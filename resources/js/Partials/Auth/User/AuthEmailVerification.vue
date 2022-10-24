<script>
import CompSnack from "@/Components/CompSnack.vue";
import { useValidation } from '@/Services/composables/validation'
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { CompSnack },
  props: {},

  setup (props, ctx) {
    const {rules, passwordRules, specialRules, wordsRules, passwordMatch} = useValidation()

    const snackbar = ref(false)
    const resend = ref(false)
    const formlogin = ref({  })
    const form = ref(false)
    const loading = ref(false)
    //TODO emailVerificationDialog: state => state.user.emailVerificationDialog, 

    const closeEmailVerificationDialog = ()=>{
      // this.$store.commit("SET_EMAIL_VERIFICATION_DIALOG", false)
    }

    const emailVerification =()=>{
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
        <v-dialog persistent v-model="emailVerificationDialog" width="400">
          <v-card :loading="loading" class="elevation-16"> 
            <v-card-title>
              Email Verification
              <v-spacer></v-spacer>
              <v-btn class="mx-0" icon @click="closeEmailVerificationDialog"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
            </v-card-title>
            <v-card-text class="mb-0 pb-0">
                <div class="grey--text text--darken-2 text-subtitle-2">Thanks for signing up!</div>
                <div class="text-caption">Before getting started, could you verify your email address by clicking on the link we just emailed to you.</div>
                <v-form ref="form" v-model="form" class="pa-2">
                    <v-checkbox dense v-model="resend" color="primary" class="mt-0 ml-1 pa-0">
                      <template v-slot:label>I didn't receive the email? We will gladly send you another</template>
                    </v-checkbox>
                </v-form>
            </v-card-text>
            <v-card-actions class="justify-end mt-n8">
              <v-btn small :disabled="!form" :loading="loading" class="white--text float-right" color="orange darken-4" depressed  @click.stop="emailVerification()">Resend Verification Email</v-btn>
            </v-card-actions>
          </v-card>
          <comp-snack :snackbar="snackbar" text="Failed to login"></comp-snack>
        </v-dialog>  
    </template>    
  </div>
</template>

<style scoped>
 
</style>