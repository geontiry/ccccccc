<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    //const a = ref(3)
    const dialoglogin = ref(false)
    const dialogsignup = ref(false)
    const userlogin = ref({})
    const usersignup = ref({})
    const show1 = ref(false)
    const csrf = ref(document.querySelector('meta[name="csrf-token"]').getAttribute('content'))
    const profileitems = ref([
        { icon: 'mdi-account-circle-outline', title: 'My Profile' },
        { icon: 'mdi-account-circle-outline', title: 'My Shopping' },
        { icon: 'mdi-account-circle-outline', title: 'My History' },
        { icon: 'mdi-briefcase-account-outline', title: 'My Wallet' },
        { icon: 'mdi-account-cog-outline', title: 'My Settings' },
        { icon: 'mdi-account-cog-outline', title: 'My Contact' },
    ])

    const openLogin = ()=> dialoglogin = true; dialogsignup =false
    const openSignup =()=>dialogsignup = true; dialoglogin = false

    const login = ()=>{  
        axios.post(route('login'), { email: userlogin.email, password: userlogin.password, remember: userlogin.remember, _token: csrf})
                .then((response) => { snack = true; snackColor = 'primary'; snackText = login;
                window.location.reload() //window.location = '/login';
                })
                .catch((error) => { snack = true; snackColor = 'error'; snackText = login});
    }

    const signup =()=>{
        axios.post(route('register'), { name: usersignup.name, email: usersignup.email, password: usersignup.password, password_confirmation: usersignup.cpassword, terms: usersignup.agree, _token: csrf})
                .then((response) => { snack = true; snackColor = 'primary'; snackText = login;
                window.location.reload() //window.location = '/login';
                })
                .catch((error) => { snack = true; snackColor = 'error'; snackText = login });
    }

    const reset = ()=>{ }
    
    const logout =()=>{ 
        axios.post(route('logout')).then(response => { 
            window.location.reload()
            dialoglogin = !dialoglogin
        })
    }
    
    return { } 
  }
} 
</script>

<template>
  <div>
      <v-menu offset-y transition="scale-transition" bottom  v-if="$page.props.user">
            <template v-slot:activator="{ on, attrs }">
                <v-btn text small v-bind="attrs" v-on="on">
                    <v-avatar size="30"><img  :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name"></v-avatar><span class="hidden-xs-only">{{ $page.props.user.name }} <v-icon >mdi-chevron-down</v-icon></span>
                </v-btn>
            </template>
            <v-list>
                <v-list-item v-for="(profileitem, index) in profileitems"  :key="index">
                    <v-list-item-title><a :href="route('profile.show')"><v-icon>{{ profileitem.icon }}</v-icon>{{ profileitem.title }}</a></v-list-item-title>
                </v-list-item>
                <v-divider></v-divider>
                <v-list-item>
                    <v-list-item-title><a @click.stop="logout()"><v-icon>mdi-account-off-outline</v-icon>Logout</a></v-list-item-title>
                </v-list-item>
            </v-list>
        </v-menu>   
        <template v-else>
        <v-btn color="primary" dark rounded small @click.stop="openLogin()"><v-icon left>mdi-account-circle</v-icon><span>Login</span></v-btn>
        <v-btn color="primary" dark rounded small @click.stop="openSignup()"><v-icon left>mdi-account-plus</v-icon><span>Signup</span></v-btn>
        <v-dialog persistent v-model="dialoglogin" width="450">
          <v-card class="elevation-16 mx-auto">
            <v-card-title class="headline">
                <v-btn small text color="primary" @click.stop="openLogin()"><v-icon left>mdi-account-circle</v-icon>Login</v-btn>
                <span>or</span>
                <v-btn small text plain color="grey" @click.stop="openSignup()"><v-icon left>mdi-lock-plus</v-icon>Signup</v-btn>
                <v-spacer></v-spacer>
                <v-btn class="mx-0" icon @click="dialoglogin = false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
            </v-card-title>
            <v-card-text class="mb-0 pb-0">
                <p class="grey--text text--lighten-2 text-subtitle-2">Please login to enjoy our awesome shopping experience!</p>
                <v-text-field outlined dense required clearable v-model="userlogin.email" label="Email" prepend-icon="mdi-account" class="ml-1 mr-3 my-1"></v-text-field>
                <v-text-field outlined dense required v-model="userlogin.password" label="Password" :type="show1 ? 'text' : 'password'" hint="At least 8 characters" counter 
                @click:append="show1 = !show1" :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'" prepend-icon="mdi-lock" class="ml-1 mr-3 my-1"></v-text-field>
            </v-card-text>
            <v-card-actions class="justify-space-between mx-8 my-0">
                <v-checkbox v-model="userlogin.remember" label="Remember me" dense class="ma-0 pa-0"></v-checkbox>
                <v-spacer></v-spacer>
                <v-btn small color="primary" @click.stop="login()">Login</v-btn>
            </v-card-actions>
            <v-card-text class="teal--text text--lighten-2 text-subtitle-2">Alternatively login with: </v-card-text>
            <v-card-actions class="justify-space-between">
                <v-btn small dark color="blue darken-1" class="text-capitalize"><v-icon dense>mdi-google</v-icon>Google</v-btn>
                <v-btn small dark color="blue darken-1" class="text-capitalize"><v-icon dense>mdi-facebook</v-icon>Facebook</v-btn>
                <v-btn small dark color="blue darken-1" class="text-capitalize"><v-icon dense>mdi-twitter</v-icon>Twitter</v-btn>
                <v-btn small dark color="blue darken-1" class="text-capitalize"><v-icon dense>mdi-linkedin</v-icon>LinkedIn</v-btn>
            </v-card-actions>
            <v-divider></v-divider>
            <v-card-text><a @click.stop="openSignup()">Help! I Need an account?</a></v-card-text>
          </v-card>
        </v-dialog>  
        <v-dialog persistent v-model="dialogsignup" width="450">
          <v-card class="elevation-16 mx-auto">
            <v-card-title class="headline">
                <v-btn small text plain color="grey" @click.stop="openLogin()"><v-icon left>mdi-account-circle</v-icon>Login</v-btn>
                <span>or</span>
                <v-btn small text color="primary" @click.stop="openSignup()"><v-icon left>mdi-account-plus</v-icon>Signup</v-btn>
                <v-spacer></v-spacer>
                <v-btn class="mx-0" icon @click="dialogsignup = false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
            </v-card-title>
            <v-card-text class="mb-0 pb-0">
                <p class="grey--text text--lighten-2 text-subtitle-2">Just few minutes and create a Brenden account for free!</p>
                <v-text-field outlined dense required v-model="usersignup.name" label="Name" prepend-icon="mdi-account" class="ml-1 mr-3 my-1"></v-text-field>
                <v-text-field outlined dense required clearable v-model="usersignup.email" label="Email" prepend-icon="mdi-email" class="ml-1 mr-3 my-1"></v-text-field>
                <v-text-field outlined dense required v-model="usersignup.password" label="Password" :type="show1 ? 'text' : 'password'" hint="At least 8 characters" counter 
                @click:append="show1 = !show1" :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'" prepend-icon="mdi-lock" class="ml-1 mr-3 my-1"></v-text-field>
                <v-text-field outlined dense required v-model="usersignup.cpassword" label="Confirm Password" :type="show1 ? 'text' : 'password'" hint="At least 8 characters" counter 
                @click:append="show1 = !show1" :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'" prepend-icon="mdi-lock" class="ml-1 mr-3 my-1"></v-text-field>
            </v-card-text>
            <v-card-actions class="justify-space-between mx-8 my-0">
                <v-checkbox v-model="usersignup.agree" label="Agree with terms &amp; conditions?" dense class="ma-0 pa-0"></v-checkbox>
                <v-spacer></v-spacer>
                <v-btn small color="primary" @click.stop="signup()">Signup</v-btn>
            </v-card-actions>
            <v-card-text class="teal--text text--lighten-2 text-subtitle-2">Alternatively signup with: </v-card-text>
            <v-card-actions class="justify-space-between">
                <v-btn small dark color="blue darken-1" class="text-capitalize"><v-icon dense>mdi-google</v-icon>Google</v-btn>
                <v-btn small dark color="blue darken-1" class="text-capitalize"><v-icon dense>mdi-facebook</v-icon>Facebook</v-btn>
                <v-btn small dark color="blue darken-1" class="text-capitalize"><v-icon dense>mdi-twitter</v-icon>Twitter</v-btn>
                <v-btn small dark color="blue darken-1" class="text-capitalize"><v-icon dense>mdi-linkedin</v-icon>LinkedIn</v-btn>
            </v-card-actions>
            <v-divider></v-divider>
            <v-card-text><a @click.stop="openLogin()">Help! I already have an account?</a></v-card-text>
          </v-card>
        </v-dialog>  
    </template>    
  </div>
</template>

<style scoped>
 
</style>