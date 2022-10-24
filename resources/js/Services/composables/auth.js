import { useFetch } from '@/Services/composables/fetch'
import { ref, reactive, toRefs } from '@vue/composition-api'

export function useAuth() {
  const state = reactive({
    dialogSignup: false, 
    dialogLogin: false, 
    dialogEmailVerify: false, 
    dialogPasswordReset: false,
    snackbarSignup: false, 
    snackbarLogin: false, 
    statusSignup: false, 
    statusLogin: false,    
    providers: [ 'google', 'facebook', 'twitter', 'linkedin' ],
  })
  
  // const passwordMatch = ()=> formsignup.password === this.formsignup.password_confirmation || "Password does not match";
  
  const dialog =(type, active)=>{
    if( active === true ){  
      if( type == 'login' ){ state.dialogLogin = true }    
      if( type == 'signup' ){ state.dialogLogin = false, state.dialogSignup = true }    
      if( type == 'emailVerify' ){ state.dialogSignup = false, state.dialogEmailVerify = true }    
      if( type == 'passwordReset' ){ state.dialogLogin = false, state.dialogSignup = false, state.dialogPasswordReset = true }    
    }
    if( active === false ){
      if( type == 'login' ){ state.dialogLogin = false } 
      if( type == 'signup' ){ state.dialogSignup = false } 
    }
  }

  const auth = (action, payload)=>{
    switch (action){
      case "signup":
        setTimeout(() => {
          axios.post(route('register'), payload)
          .then(response => {
            state.snackbarSignup = true
            state.statusSignup = true
            window.location.reload()
          })
          .catch((error) => { 
            state.snackbarSignup = true
            state.statusSignup = false
          })
        }, 1000)
        break;

      case "login":
        setTimeout(() => {
          axios.post(route('login'), payload)
          .then(response => {
            state.snackbarLogin = true
            state.statusLogin = true
            window.location.reload()
          })
          .catch((error) => { 
            state.snackbarLogin = true
            state.statusLogin = false
          })
        }, 1000)
        break;

      case "logout":
        break;

      case "passwordReset":
        setTimeout(() => {
          axios.post(route('password.email'), payload)
          .then(response => {
            state.snackbarSignup = true
          })
          .catch((error) => { 
            state.snackbarSignup = true
          })
        }, 1000)
        break;

      case "passwordConfirm":
        break;

      case "emailVerification":
        setTimeout(() => {
          axios.post(route('verification.send'), payload)
          .then(response => {
            state.snackbarSignup = true
          })
          .catch((error) => { 
            state.snackbarSignup = true
          })
        }, 1000)
        break;

      case "login":
        break;

      case "login":
        break;
    }    
  }
  
  return { ...toRefs(state), dialog, auth };
}