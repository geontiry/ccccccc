<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      username: '',
      email : '',
      password: '',
      isPasswordVisible: false,
      socialLink: [
      {icon: 'mdi-facebook', color: '#4267b2', colorInDark: '#4267b2',},
      {icon: 'mdi-twitter', color: '#1da1f2', colorInDark: '#1da1f2',},
      {icon: 'mdi-github', color: '#272727', colorInDark: '#fff',},
      {icon: 'mdi-google', color: '#db4437', colorInDark: '#db4437',},
      ]      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div class="auth-wrapper auth-v1">
    <div class="auth-inner">
      <v-card class="auth-card">
        <!-- logo -->
        <v-card-title class="d-flex align-center justify-center py-7">
          <inertia-link class="d-flex align-center">
            <v-img src="/storage/dash/logos/logo.svg" max-height="30px" max-width="30px" alt="logo" contain class="me-3 "></v-img>
            <h2 class="text-2xl font-weight-semibold">Materio</h2>
          </inertia-link>
        </v-card-title>

        <!-- title -->
        <v-card-text>
          <p class="text-2xl font-weight-semibold text--primary mb-2">
            Adventure starts here 🚀
          </p>
          <p class="mb-2">
            Make your app management easy and fun!
          </p>
        </v-card-text>

        <!-- login form -->
        <v-card-text>
          <v-form>
            <v-text-field
              v-model="username"
              outlined
              label="Username"
              placeholder="JohnDoe"
              hide-details
              class="mb-3"
            ></v-text-field>

            <v-text-field
              v-model="email"
              outlined
              label="Email"
              placeholder="john@example.com"
              hide-details
              class="mb-3"
            ></v-text-field>

            <v-text-field
              v-model="password"
              outlined
              :type="isPasswordVisible ? 'text' : 'password'"
              label="Password"
              placeholder="············"
              :append-icon="isPasswordVisible ? 'mdi-eye-off-outline' : 'mdi-eye-outline'"
              hide-details
              @click:append="isPasswordVisible = !isPasswordVisible"
            ></v-text-field>

            <v-checkbox hide-details class="mt-1">
              <template #label>
                <div class="d-flex align-center flex-wrap">
                  <span class="me-2">I agree to</span><a href="javascript:void(0)">privacy policy &amp; terms</a>
                </div>
              </template>
            </v-checkbox>

            <v-btn block color="primary" class="mt-6">Sign Up</v-btn>
          </v-form>
        </v-card-text>

        <!-- create new account  -->
        <v-card-text class="d-flex align-center justify-center flex-wrap mt-2">
          <span class="me-2">
            Already have an account?
          </span>
          <router-link :to="{ name:'pages-login' }">
            Sign in instead
          </router-link>
        </v-card-text>

        <!-- divider -->
        <v-card-text class="d-flex align-center mt-2">
          <v-divider></v-divider>
          <span class="mx-5">or</span>
          <v-divider></v-divider>
        </v-card-text>

        <!-- social link -->
        <v-card-actions class="d-flex justify-center">
          <v-btn v-for="link in socialLink" :key="link.icon" icon class="ms-1">
            <v-icon :color="$vuetify.theme.dark ? link.colorInDark:link.color">{{ link.icon }}
            </v-icon>
          </v-btn>
        </v-card-actions>
      </v-card>
    </div>

    <!-- background triangle shape  -->
    <img class="auth-mask-bg" height="190" :src="`/storage/dash/misc/mask-${$vuetify.theme.dark ? 'dark':'light'}.png`">
    <!-- tree -->
    <v-img class="auth-tree" width="247" height="185" src="/storage/dash/misc/tree.png"></v-img>
    <!-- tree  -->
    <v-img class="auth-tree-3" width="377" height="289" src="/storage/dash/misc/tree-3.png"></v-img>
  </div>
   
  </div>
</template>

<style lang="scss" scoped>
//@import '@/Style/pages/auth.scss';

</style>