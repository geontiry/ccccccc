<script>
import AuthAccount from "@/Layouts/Brenden/Auth/AuthAccount.vue";
import AuthLogin from "@/Layouts/Brenden/Auth/AuthLogin.vue";
import AuthSignup from "@/Layouts/Brenden/Auth/AuthSignup.vue";
import NavContact from "@/Layouts/Brenden/Header/NavContact.vue";
import NavBrand from "@/Layouts/Brenden/Header/NavBrand.vue";
import NavSearch from "@/Layouts/Brenden/Header/NavSearch.vue";
import NavTrack from "@/Layouts/Brenden/Header/NavTrack.vue";
import NavSupport from "@/Layouts/Brenden/Header/NavSupport.vue";
import NavSites from "@/Layouts/Brenden/Header/NavSites.vue";
import NavLinks from "@/Layouts/Brenden/Header/NavLinks.vue";
import NavCompare from "@/Layouts/Brenden/Header/NavCompare.vue";
import NavFavorites from "@/Layouts/Brenden/Header/NavFavorites.vue";
import NavQuotes from "@/Layouts/Brenden/Header/NavQuotes.vue";
import NavCart from "@/Layouts/Brenden/Header/NavCart.vue";
import AppBackTop from "@/Layouts/Brenden/Supp/AppBackTop.vue";
import AppLiveChat from "@/Layouts/Brenden/Supp/AppLiveChat.vue";
import FooterDetail from "@/Layouts/Brenden/Footer/FooterDetail.vue";
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { 
    NavContact, NavBrand, NavSearch, AuthAccount, AuthLogin, AuthSignup, NavTrack, NavSupport, NavSites, NavLinks,
    NavCompare, NavFavorites, NavQuotes, NavCart, AppBackTop, AppLiveChat, FooterDetail,
  },
  props: {},

  setup (props, ctx) {
    const drawer = ref(false)
    const group = ref(null)
    const dialoglogin =ref(false)

    watch(group, async (val) => drawer = true)

    const openLogin = ()=> dialoglogin = true; dialogsignup =false
    const openSignup =()=> dialogsignup = true; dialoglogin = false
    return { } 
  }
} 
</script>

<template>
  <div>
    <!-- App.vue -->
    <v-app>
      <v-container class="app">
        <!-- App Header-->   
        <!-- System Bar-->
        <v-system-bar window dark color="primary" lights-out height="18" fluid class="hidden-xs-only">
          <nav-contact></nav-contact>
        </v-system-bar>
        <!-- Nav Bar-->
        <v-app-bar color="deep-purple accent-4" dense dark src="https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg" class="topbar">
          <v-app-bar-nav-icon @click.stop="drawer = !drawer" class="hidden-sm-and-up"></v-app-bar-nav-icon>          
          <nav-brand></nav-brand>            
          <template v-if="$vuetify.breakpoint.smAndUp">
              <v-spacer></v-spacer>
              <nav-search></nav-search>
              <v-spacer></v-spacer>
              <auth-account v-if="$page.props.user"></auth-account>
              <auth-login class="mx-1" v-if="!$page.props.user" :dialoglogin="dialoglogin"></auth-login>
              <auth-signup v-if="!$page.props.user" class="mx-1"></auth-signup>
          </template>
          <template v-if="$vuetify.breakpoint.xsOnly">
              <v-spacer></v-spacer>
              <nav-compare></nav-compare>
              <nav-favorites></nav-favorites>
              <nav-quotes></nav-quotes>
              <nav-cart></nav-cart>
              <v-spacer></v-spacer>
          </template>
          <nav-track></nav-track>
          <nav-support></nav-support>
          <nav-sites v-if="$vuetify.breakpoint.smAndUp"></nav-sites>
          <v-spacer v-if="$vuetify.breakpoint.xsOnly"></v-spacer>
          <nav-search v-if="$vuetify.breakpoint.xsOnly"></nav-search>
          <!-- Nav Bar-->
          <template v-slot:extension v-if="$vuetify.breakpoint.smAndUp">
              <nav-links></nav-links>
              <v-spacer></v-spacer>
              <nav-compare></nav-compare>
              <nav-favorites></nav-favorites>
              <nav-quotes></nav-quotes>
              <nav-cart></nav-cart>
          </template>
      </v-app-bar>
      <!-- Nav Drawer-->  
      <v-navigation-drawer v-model="drawer" absolute left temporary app v-if="$vuetify.breakpoint.xsOnly" class="sidebar">
          <template v-slot:prepend>
            <span class="d-flex mt-5 ml-2">
              <nav-brand sdb></nav-brand>
              <v-spacer></v-spacer>
              <nav-sites></nav-sites>
              <v-spacer></v-spacer>
              <v-btn small icon absolute top right class="mt-n4 mr-n3" @click="drawer = false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
            </span>
              <auth-account sdb class="d-inline-flex" v-if="($page.props.user)"></auth-account>
              <auth-login class="d-inline-flex" v-if="(!$page.props.user)"></auth-login>
              <auth-signup class="d-inline-flex" v-if="(!$page.props.user)"></auth-signup>
          </template>
          <v-divider></v-divider>
          <nav-links sdb></nav-links>
          <v-divider></v-divider>
          <nav-contact></nav-contact>
      </v-navigation-drawer>
      <!-- Header Extension-->
        <slot name="header"></slot>
        <v-main>
          <v-container fluid>
            <!-- App Page-->
            <slot name="page"></slot>
            <!-- App Supp-->
            <app-back-top></app-back-top><!-- Page Back-to-Top-->
            <app-live-chat></app-live-chat><!-- Page Live Contact-->
            
            <slot name="supp"></slot>
          </v-container>
        </v-main>
        <!-- App Footer-->
        <footer-detail></footer-detail>
        <slot name="footer"></slot>
      </v-container>
    </v-app>
  </div>
</template>

<style scoped>
.app {
  padding: 0px;
}
@media (min-width: 576px) {
  .app {
    padding: 0px 40px;
  }
}
.topbar{
    -webkit-position: sticky;
    -moz-position: sticky;
    position: sticky;
    top: 0px;
    z-index: 1;
}
@media (min-width: 576px) {
  .topbar{
    top: -42px;
  }
}
.sidebar{
  min-height: 100%; position: fixed;
}
</style>