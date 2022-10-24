<script>
import CompSnack from "@/Components/CompSnack.vue";
import { useValidation } from '@/Services/composables/validation'
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: {CompSnack },
  props: {},

  setup (props, ctx) {
    const {rules, passwordRules, specialRules, wordsRules, passwordMatch} = useValidation()
    //const a = ref(3)
    // snackbar: false,
    //       formlogin: {  },
    //       form: false,
    //       loading: false,  

    // passwordResetDialog: state => state.user.passwordResetDialog, 
    const closePasswordResetDialog =()=>{
            // this.$store.commit("SET_PASSWORD_RESET_DIALOG", false)
      }
      const passwordReset = ()=>{
          //let user = {_token: this.csrf, ...this.formlogin,}
          //this.$store.dispatch("login", user);
        }
    
    return { } 
  }
} 
</script>

<template>
  <div>   
        <template>
        <v-dialog persistent v-model="passwordResetDialog" width="400">
          <v-card :loading="loading" class="elevation-16"> 
            <v-card-title>
              Reset Password
              <v-spacer></v-spacer>
              <v-btn class="mx-0" icon @click="closePasswordResetDialog"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
            </v-card-title>
            <v-card-text class="mb-0 pb-0">
                <div class="grey--text text--darken-2 text-subtitle-2">Forgot your password? No problem.</div>
                <div class="text-caption">Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</div>
                <div>We have emailed your password reset link! </div>
                <v-form ref="form" v-model="form" class="pa-2">
                    <v-text-field outlined dense required clearable v-model="formlogin.email" type="email" :rules="[rules.email]" 
                        label="Email" clear-icon="mdi-close-circle" prepend-icon="mdi-email" class="mx-auto my-1">
                    </v-text-field>
                </v-form>
            </v-card-text>
            <v-card-actions class="justify-end mt-n8">
              <v-btn small :disabled="!form" :loading="loading" class="white--text float-right" color="orange darken-4" depressed  @click.stop="passwordReset()">Send Reset Email</v-btn>
            </v-card-actions>
          </v-card>
          <comp-snack :snackbar="snackbar" text="Failed to login"></comp-snack>
        </v-dialog>  
    </template>    
  </div>
</template>

<style scoped>
 
</style>