<script>
import CompSnack from "@/Components/CompSnack.vue"
import { useAuth } from '@/Services/composables/auth'
import { useValidation } from '@/Services/composables/validation'
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api'
  
export default { 
  components: { CompSnack },
  props: {},

  setup (props, ctx) {
    const { dialogLogin, dialogSignup, dialog, auth, snackbarSignup, providers } = useAuth()
    const { rules, } = useValidation()

    const state = reactive({
      snackbar: false,
      formsignup: {},
      form: false,
      loading: false,
      show: false,
      guide: false,
      perc: "",
      color: "",
      message: "",
      progress: {one: 0, two: 0, three: 0, four: 0, five: 0},
      check: {
        is_lower: [false, 'Contains Lowercase Letter'],
        is_upper: [false, 'Contains Uppercase Letter'],
        is_special: [false, 'Contains Special  Character'],
        is_number: [false, 'Contains Number Character'],
        is_length: [false, 'At Least 8 Characters'],
      },
      dialogterms: false,
      dialogprivacy: false,
    })

    const passwordCheck =()=>{
      state.check.is_lower[0] = /[a-z]/.test(state.formsignup.password);
      state.check.is_upper[0] = /[A-Z]/.test(state.formsignup.password);
      state.check.is_special[0] = /[`~!,?><;'"|@#\$%\^\&*\)\(+=._-]/.test(state.formsignup.password);
      state.check.is_number[0] = /\d/.test(state.formsignup.password);
      state.check.is_length[0] = state.formsignup.password.length > 8;
      let is_check = [ state.check.is_lower[0], state.check.is_upper[0], state.check.is_special[0], state.check.is_number[0], state.check.is_length[0]].filter(v => v).length;
      state.perc = is_check*20;
      switch ( is_check ){
        case 1:
          state.progress.one = 100;
          state.color = 'error';
          state.message = 'Very weak';
          break;
        case 2:
          state.progress.two = 100;
          state.color = 'orange'; state.message = 'Weak';
          break;
        case 3:
          state.progress.three = 100;
          state.color = 'lime'; state.message = 'Medium';
          break;
        case 4:
          state.progress.four = 100;
          state.color = 'blue'; state.message = 'Strong';
          break;
        case 5:
          state.progress.five = 100;
          state.color = 'green'; state.message = 'Very strong';
          break;
        case 0:
        default:
          state.color = 'grey';
          state.message = '';
      }
    }

    return {
      ...toRefs(state), 
      dialogLogin, dialogSignup, dialog, auth, snackbarSignup, providers,
      rules, 
      passwordCheck,
    } 
  }
} 
</script>

<template>
  <div>
        <template>
        <v-btn small rounded dark color="orange" class="text-capitalize" @click.stop="dialog('signup', true)"><v-icon small>mdi-account-plus</v-icon>Signup</v-btn>
        <v-dialog persistent v-model="dialogSignup" width="420">
            <v-card class="elevation-16">
                <v-card-title class="headline">
                    <v-btn small text plain color="grey" @click.stop="dialog('login', true)"><v-icon left>mdi-account-circle</v-icon>Login</v-btn>
                    <span>or</span>
                    <v-btn small text color="orange"><v-icon left>mdi-account-plus</v-icon>Signup</v-btn>
                    <v-spacer></v-spacer>
                    <v-btn class="mx-0" icon @click="dialog('signup', false)"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
                </v-card-title>
                <v-card-text class="mb-0 pb-0">
                    <p class="grey--text text--lighten-2 text-subtitle-2 ma-0 pa-0">Just few minutes and create a Brenden account for free!</p>
                    <v-form ref="form" v-model="form" class="pa-2">
                    <v-text-field outlined dense required clearable v-model="formsignup.name" :rules="[rules.required]"
                        label="Username" clear-icon="mdi-close-circle" prepend-icon="mdi-account" class="mx-auto my-1">
                    </v-text-field>
                    <v-text-field outlined dense required clearable v-model="formsignup.email" type="email" :rules="[rules.email]" validate-on-blur
                        label="Email" clear-icon="mdi-close-circle" prepend-icon="mdi-email" class="mx-auto my-1">
                    </v-text-field>
                    <v-text-field outlined dense required clearable v-model="formsignup.password" :type="show ? 'text' : 'password'" :rules="[rules.password, rules.min(8), rules.max(20)]"  counter="20"
                        label="Password" clear-icon="mdi-close-circle" @input="passwordCheck" @focus="guide =! guide" @blur="guide =! guide" @click:append="show = !show" :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'" prepend-icon="mdi-lock"
                        class="mx-auto my-1">
                    </v-text-field>
                    <v-sheet v-if="guide">
                      <v-row no-gutters  class="ml-3">
                        <v-col cols="1">{{perc}}%</v-col>
                        <v-col cols="8">
                          <v-row dense>
                                <v-col><v-progress-linear rounded :color="color" v-model="progress.one"></v-progress-linear></v-col>
                                <v-col><v-progress-linear rounded :color="color" v-model="progress.two"></v-progress-linear></v-col>
                                <v-col><v-progress-linear rounded :color="color" v-model="progress.three"></v-progress-linear></v-col>
                                <v-col><v-progress-linear rounded :color="color" v-model="progress.four"></v-progress-linear></v-col>
                                <v-col><v-progress-linear rounded :color="color" v-model="progress.five"></v-progress-linear></v-col>
                            </v-row>
                        </v-col>
                        <v-col cols="3">{{message}}</v-col>
                    </v-row>
                    <v-list dense>
                      <v-list-item class="my-n4" :class=" values[0] ? 'success--text' : '' " v-for="( values, test) in check" :key="test">
                          <v-list-item-icon><v-icon dense :color=" values[0] ? 'success' : '' ">{{ values[0] ? 'mdi-check-circle-outline' : 'mdi-alert-circle-outline'}}</v-icon></v-list-item-icon>
                          <v-list-item-content><v-list-item-title>{{ values[1] }}</v-list-item-title></v-list-item-content>
                      </v-list-item>
                    </v-list>
                    </v-sheet>
                    <v-text-field outlined dense required clearable v-model="formsignup.password_confirmation" type="password" counter="20" :rules="[rules.required, passwordMatch]"
                        label="Confirm Password" clear-icon="mdi-close-circle" prepend-icon="mdi-lock"  class="mx-auto my-1">
                    </v-text-field>
                    <div class="d-flex justify-space-between">
                      <v-checkbox dense v-model="formsignup.terms" :rules="[rules.required]" color="primary" class=" d-flex mt-0 mb-0 ml-1 pa-0">
                        <template v-slot:label><span class="text-caption"> I agree to the&nbsp;<a href="#" @click.stop.prevent="dialogterms = true">Terms of Service</a>*</span></template>
                      </v-checkbox>
                      <v-btn small :disabled="!form" :loading="loading" class="white--text" color="orange darken-4" depressed @click.stop="auth('signup', formsignup)">Signup</v-btn>
                    </div>
                    <div class="d-flex justify-space-between">
                        <v-btn small dark plain text color="primary" class="text-capitalize" @click="openEmailVerificationDialog">Verify email?</v-btn>
                        <span>Already have an account?<v-btn small dark plain text color="primary" class="text-capitalize ml-0 pl-1" @click="dialog('login', true)">Login</v-btn></span>
                    </div>
                </v-form>
            </v-card-text>
            <v-card-text class="text-center text--lighten-2 text-subtitle-2 ma-0 pa-0">Alternatively Signup with: </v-card-text>
            <v-divider></v-divider>
            <v-card-actions class="justify-space-around">
                <div class="text-center text--lighten-2 text-subtitle-2 ma-0 pa-0">Signup with: </div>
                <v-btn icon outlined dark color="orange darken-2" class="text-capitalize ma-1" :href="route('auth.socialite', `${provider}`)" v-for="provider in providers" :key="provider">
                  <v-icon size="30">{{ `mdi-${provider}` }}</v-icon>
                </v-btn>
            </v-card-actions>
            </v-card>
        </v-dialog>
          <v-dialog v-model="dialogterms" absolute max-width="400" persistent >
            <v-card>
              <v-card-title class="headline grey lighten-3">Terms of Service</v-card-title>
              <v-card-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </v-card-text>
              <v-divider></v-divider>
              <v-card-actions>
                <v-btn text @click="agreement = false, dialogterms = false">No</v-btn>
                <v-spacer></v-spacer>
                <v-btn class="white--text" color="primary accent-4" @click="agreement = true, dialogterms = false">Yes</v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
    </template>
  </div>
</template>

<style scoped>

</style>
