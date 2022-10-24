<script>
import { useValidation } from '@/Services/composables/validation'
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    dialoglogin: {type: Boolean, required: true, default: false},
    dialogsignup: {type: Boolean, required: true, default: false},
  },

  setup (props, ctx) {
    const {rules, passwordRules, specialRules, wordsRules, passwordMatch} = useValidation()
    
    const dialogsignup = ref(false)
    const dialogterms = ref(false)
    const dialogprivacy = ref(false)
    const form = ref(false)
    const formsignup = ref({ name: undefined, email: undefined, password: undefined, password_confirmation: undefined, terms: false, })
    const show = ref(false)
    const csrf = ref(document.querySelector('meta[name="csrf-token"]').getAttribute('content'))
    const providers = ref([
        { name: 'Google', href: route("auth", 'google'), icon: 'mdi-google'},
        { name: 'Facebook', href: route("auth", 'facebook'), icon: 'mdi-facebook'},
        { name: 'Twitter', href: route("auth", 'twitter'), icon: 'mdi-twitter'},
        { name: 'Linkedin', href: route("auth", 'linkedin'), icon: 'mdi-linkedin'},
  ])

  const signup =()=>{
    axios.post(route('register'), { _token: csrf, ...formsignup, })
            .then((response) => {
              snack = true; snackColor = 'primary'; snackText = login;
                window.location.reload()
                //window.location = '/login';
            })
            .catch((error) => {
                snack = true; snackColor = 'error'; snackText = login             
            });
  }
    
    return { } 
  }
} 
</script>

<template>
  <div>   
        <template>
        <v-btn small rounded dark color="primary" class="text-capitalize" @click.stop="dialogsignup=true"><v-icon small>mdi-account-plus</v-icon>Signup</v-btn>
        <v-dialog persistent v-model="dialogsignup" width="430">
            <v-card class="elevation-16"> 
                <v-card-title class="headline">
                    <v-btn small text plain color="grey" @click.stop="dialoglogin=true"><v-icon left>mdi-account-circle</v-icon>Login</v-btn>
                    <span>or</span>
                    <v-btn small text color="primary"><v-icon left>mdi-account-plus</v-icon>Signup</v-btn>
                    <v-spacer></v-spacer>
                    <v-btn class="mx-0" icon @click="dialogsignup = false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
                </v-card-title>
                <v-card-text class="mb-0 pb-0">
                    <p class="grey--text text--lighten-2 text-subtitle-2 ma-0 pa-0">Just few minutes and create a Brenden account for free!</p>
                    <v-form ref="form" v-model="form" class="pa-2">
                    <v-text-field outlined dense required clearable v-model="formsignup.name" :rules="[rules.required]"
                        label="Username" clear-icon="mdi-close-circle" prepend-icon="mdi-account" class="mx-auto my-1">
                    </v-text-field>
                    <v-text-field outlined dense required clearable v-model="formsignup.email" type="email" :rules="[rules.email]" 
                        label="Email" clear-icon="mdi-close-circle" prepend-icon="mdi-email" class="mx-auto my-1">
                    </v-text-field>
                    <v-text-field outlined dense required clearable v-model="formsignup.password" :type="show ? 'text' : 'password'" :rules="[rules.password, rules.min(8), rules.max(20)]"  counter="20"
                        label="Password" clear-icon="mdi-close-circle" @click:append="show = !show" :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'" prepend-icon="mdi-lock" 
                        class="mx-auto my-1">
                    </v-text-field>
                    <v-text-field outlined dense required clearable v-model="formsignup.password_confirmation" type="password" counter="20"
                        label="Confirm Password" clear-icon="mdi-close-circle" prepend-icon="mdi-lock"  class="mx-auto my-1">
                    </v-text-field>
                    <v-checkbox dense v-model="formsignup.terms" :rules="[rules.required]" color="primary" class=" d-flex mt-0 mb-0 ml-1 pa-0">
                        <template v-slot:label>
                           <span class="text-caption"> I agree to the&nbsp;<a href="#" @click.stop.prevent="dialogterms = true">Terms of Service</a>&nbsp;and&nbsp;<a href="#" @click.stop.prevent="dialogprivacy = true">Privacy Policy</a>*</span>
                        </template>
                    </v-checkbox>
                    <p class="my-1"><v-btn small :disabled="!form" :loading="loading" class="white--text" color="primary" depressed @click.stop="signup()">Signup</v-btn></p>
                    <div class="d-flex justify-space-between">
                    <span><a href="">Forgot </a> password?</span>
                    <span>Already have <a @click.stop="dialoglogin=true"> an account?</a></span>
                </div>
                </v-form>
            </v-card-text>
            <v-card-text class="text-center text--lighten-2 text-subtitle-2 ma-0 pa-0">Alternatively Signup with: </v-card-text>
            <v-divider></v-divider>
            <v-card-actions class="justify-space-between ">
              <v-btn small dark color="blue darken-1" class="text-capitalize ma-1" :href="provider.href" v-for="provider in providers" :key="provider.name">
                <v-icon x-small>{{ provider.icon }}</v-icon>{{ provider.name }}</v-btn>
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
          <v-dialog v-model="dialogprivacy" absolute max-width="400" persistent >
            <v-card>
              <v-card-title class="headline grey lighten-3">Privacy Policy</v-card-title>
              <v-card-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </v-card-text>
              <v-divider></v-divider>
              <v-card-actions>
                <v-btn text @click="agreement = false, dialogprivacy = false">No</v-btn>
                <v-spacer></v-spacer>
                <v-btn class="white--text" color="primary accent-4" @click="agreement = true, dialogprivacy = false">Yes</v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
    </template>    
  </div>
</template>

<style scoped>
 
</style>