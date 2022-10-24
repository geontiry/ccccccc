<script>
import CompSnack from "@/Components/CompSnack.vue"
import { useAuth } from '@/Services/composables/auth'
import { useValidation } from '@/Services/composables/validation'
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api'
  
export default { 
  components: { CompSnack },
  props: {},

  setup (props, ctx) {
    const { dialogLogin, dialogSignup, dialog, auth, snackbarLogin, snackbarSignup, providers } = useAuth()
    const { rules, } = useValidation()
    
    const state = reactive({
      snackbar: false,
      formlogin: {},
      form: false,
      loading: false,
      show: false,
    })

    return { 
      ...toRefs(state), 
      dialogLogin, dialogSignup, dialog, auth,snackbarLogin,  snackbarSignup, providers,
      rules, 
    } 
  }
} 
</script>

<template>
<div>   
  <template>
    <v-btn dark rounded outlined small color="orange" class="text-capitalize" @click.stop="dialog('login', true)"><v-icon small>mdi-account-circle</v-icon>Login</v-btn>
    <v-dialog persistent v-model="dialogLogin" width="400"> 
      <v-card :loading="snackbarLogin" class="elevation-16"> 
        <v-card-title class="headline">
          <v-btn small text color="orange"><v-icon left>mdi-account-circle</v-icon>Login</v-btn>
          <span>or</span>
          <v-btn small text plain color="grey" @click.stop="dialog('signup', true)"><v-icon left>mdi-account-plus</v-icon>Signup</v-btn>
          <v-spacer></v-spacer>
          <v-btn class="mx-0" icon @click="dialog('login', false)"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
        </v-card-title>
        <v-card-text class="mb-0 pb-0">
          <p class="grey--text text--lighten-2 text-subtitle-2 ma-0 pa-0">Please login to enjoy our awesome shopping experience!</p>
          <v-form ref="form" v-model="form" class="pa-2">
            <v-text-field outlined dense required clearable v-model="formlogin.email" type="email" :rules="[rules.email]" 
              label="Email" clear-icon="mdi-close-circle" prepend-icon="mdi-email" class="mx-auto my-1">
            </v-text-field>
            <v-text-field outlined dense required clearable v-model="formlogin.password" :type="show ? 'text' : 'password'"  counter="20"
              label="Password" clear-icon="mdi-close-circle" @click:append="show = !show" :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'" prepend-icon="mdi-lock" 
              class="mx-auto my-1">
            </v-text-field>
            <div class="d-flex justify-space-between">
              <v-checkbox dense v-model="formlogin.remember" color="primary" class="mt-0 ml-1 pa-0"><template v-slot:label>Remember me?</template></v-checkbox>
              <v-btn small :disabled="!form" :loading="loading" class="white--text float-right" color="orange darken-4" depressed  @click.stop="auth('login', formlogin)">Login</v-btn>
            </div>
            <div class="d-flex justify-space-between">
              <v-btn small dark plain text color="primary" class="text-capitalize" @click="openPasswordResetDialog">Forgot password?</v-btn>
              <span>Need an account?<v-btn small dark plain text color="primary" class="text-capitalize ml-0 pl-1" @click="openSignupDialog">Signup</v-btn></span>
            </div>
          </v-form> 
        </v-card-text>            
        <v-divider></v-divider>
        <v-card-actions class="justify-space-around">
          <div class="text-center text--lighten-2 text-subtitle-2 ma-0 pa-0">Login with: </div>
          <v-btn icon outlined dark color="orange darken-2" class="text-capitalize ma-1" :href="route('auth.socialite', `${provider}`)" v-for="provider in providers" :key="provider">
            <v-icon size="30">{{ `mdi-${provider}` }}</v-icon>
          </v-btn>
        </v-card-actions>
      </v-card>
      <comp-snack :snackbar="snackbar" text="Failed to login"></comp-snack>
    </v-dialog>  
  </template>    
</div>
</template>

<style scoped>
 
</style>