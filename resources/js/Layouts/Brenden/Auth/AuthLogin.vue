<script>
import CompSnack from "@/Components/CompSnack.vue";
import { useValidation } from '@/Services/composables/validation'
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { CompSnack },
  props: {
      dialoglogin: {type: Boolean, required: true, default: false},
  },

  setup (props, ctx) {
    const {rules, passwordRules, specialRules, wordsRules, passwordMatch} = useValidation()
    
    const csrf = ref(document.querySelector('meta[name="csrf-token"]').getAttribute('content'))
    const formlogin = ref({email: undefined, password: undefined, remember: false})
    const form = ref(false)
    const loading = ref(false)
    const show = ref(false)
    const providers = ref([
        { name: 'Google', href: route("auth", 'google'), icon: 'mdi-google'},
        { name: 'Facebook', href: route("auth", 'facebook'), icon: 'mdi-facebook'},
        { name: 'Twitter', href: route("auth", 'twitter'), icon: 'mdi-twitter'},
        { name: 'Linkedin', href: route("auth", 'linkedin'), icon: 'mdi-linkedin'},
    ])

    const openLogin = ()=> { dialoglogin = true; dialogsignup =false }
    const openSignup = ()=> { dialogsignup = true; dialoglogin = false }
    const login =()=>{  
        loading = true
        snackbar=false
        setTimeout(() => (
            loading = false, 
            snackbar=true), 2000)
            axios.post(route('login'), { _token: csrf, ...formlogin, })
                    .then((response) => {
                        snack = true; snackColor = 'primary'; snackText = login;
                        window.location.reload()
                        })
                    .catch((error) => {
                        snack = true; snackColor = 'error'; snackText = login             
            })
        }
    
    return { rules, passwordRules, specialRules, wordsRules, passwordMatch, csrf, formlogin, form, loading, show, providers     } 
  }
} 
</script>

<template>
  <div>   
        <template>
        <v-btn dark rounded small color="primary" class="text-capitalize" @click.stop="openLogin"><v-icon small>mdi-account-circle</v-icon>Login</v-btn>
        <v-dialog persistent v-model="dialoglogin" width="400">
          <v-card :loading="loading" class="elevation-16"> 
            <v-card-title class="headline">
                <v-btn small text color="primary"><v-icon left>mdi-account-circle</v-icon>Login</v-btn>
                <span>or</span>
                <v-btn small text plain color="grey" @click.stop="dialogsignup=true"><v-icon left>mdi-account-plus</v-icon>Signup</v-btn>
                <v-spacer></v-spacer>
                <v-btn class="mx-0" icon @click="dialoglogin = false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
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
                        <v-btn small :disabled="!form" :loading="loading" class="white--text float-right" color="primary" depressed  @click.stop="login()">Login</v-btn>
                    </div>
                    <div class="d-flex justify-space-between">
                        <span><a href="">Forgot </a> password?</span>
                        <span>Help! I Need <a @click.stop="dialogsignup=true"> an account?</a></span>
                    </div>
                </v-form>
            </v-card-text>
            <v-card-text class="text-center text--lighten-2 text-subtitle-2 ma-0 pa-0">Alternatively Login with: </v-card-text>
            <v-divider></v-divider>
            <v-card-actions class="justify-space-between ">
                <v-btn small dark color="blue darken-1" class="text-capitalize ma-1" :href="provider.href" v-for="provider in providers" :key="provider.name">
                    <v-icon x-small>{{ provider.icon }}</v-icon>{{ provider.name }}</v-btn>
            </v-card-actions>
          </v-card>
          <comp-snack :snackbar="snackbar" text="Failed to login"></comp-snack>
        </v-dialog>  
    </template>    
  </div>
</template>

<style scoped>
 
</style>