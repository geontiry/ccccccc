<script>
import CompBanner from "@/Components/CompBanner.vue"
import AuthAccount from "@/Partials/Auth/User/AuthAccount.vue"
import AuthLogin from "@/Partials/Auth/User/AuthLogin.vue"
import AuthPasswordReset from "@/Partials/Auth/User/AuthPasswordReset.vue"
import AuthSignup from "@/Partials/Auth/User/AuthSignup.vue"
import NavContact from "@/Layouts/Synvast/Header/NavContact.vue"
import NavSites from "@/Layouts/Synvast/Header/NavSites.vue"
import NavBrand from "@/Layouts/Synvast/Header/NavBrand.vue"
import NavSearch from "@/Layouts/Synvast/Header/NavSearch.vue"
import NavLinks from "@/Layouts/Synvast/Header/NavLinks.vue"
import NavSidebar from "@/Layouts/Synvast/Selfcare/NavSidebar.vue"
import NavTopbar from "@/Layouts/Synvast/Selfcare/NavTopbar.vue"
import AccSummary from "@/Layouts/Synvast/Selfcare/AccSummary.vue"
import AppBackTop from "@/Layouts/Synvast/Supp/AppBackTop.vue"
import AppLiveChat from "@/Layouts/Synvast/Supp/AppLiveChat.vue"
import AppFeedback from "@/Layouts/Synvast/Supp/AppFeedback.vue"
import UserConsent from "@/Layouts/Synvast/Footer/UserConsent.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: {
    CompBanner, NavContact, NavBrand, NavSearch, AuthAccount, AuthLogin, AuthPasswordReset, AuthSignup, NavSites, 
    NavLinks, NavSidebar, NavTopbar, AccSummary, AppBackTop, AppLiveChat, AppFeedback, UserConsent,
   },
  props: {},

  setup (props, ctx) {
    const drawer =ref (false) 
    const group = ref(null)
    const dialoglogin = ref(false)

    watch(group, async (val) =>drawer = true)
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <!-- App.vue -->
    <v-app>
      <v-container class="app pt-0">
        <!-- App Banner-->   
        <comp-banner></comp-banner>
        <!-- App Header-->   
        <!-- Nav Bar-->
        <v-app-bar color="#002C4D" dense dark class="" height="85">
          <v-container class="px-0">
            <div class="ml-n4 grid grid-cols-12 gap-2" v-if="$vuetify.breakpoint.smAndUp">
              <nav-sites class="col-span-5 orange rounded-br-full"></nav-sites>
              <nav-contact class="col-span-7"></nav-contact>
            </div>
            <div class="pt-3 grid grid-cols-12 gap-0">
              <div class="col-span-3">
                <v-app-bar-nav-icon @click.stop="drawer = !drawer" class="hidden-sm-and-up"></v-app-bar-nav-icon>
                <nav-brand></nav-brand>   
              </div>
             <nav-search class="col-span-3" v-if="$vuetify.breakpoint.smAndUp"></nav-search>
              <div class="col-span-6">
                <div class="d-flex justify-end">
                <template v-if="$vuetify.breakpoint.smAndUp">
                  <auth-account v-if="$page.props.user"></auth-account>
                  <auth-login class="mx-1" v-if="!$page.props.user"></auth-login>
                  <auth-password-reset></auth-password-reset>
                  <auth-signup v-if="!$page.props.user" class="mx-1"></auth-signup>
                  <nav-compare></nav-compare>
                  <nav-favorites></nav-favorites>
                  <nav-quotes></nav-quotes>
                  <nav-cart></nav-cart>
                </template>
                <template v-if="$vuetify.breakpoint.xsOnly">
                  <v-spacer></v-spacer>
                  <nav-compare></nav-compare>
                  <nav-favorites></nav-favorites>
                  <nav-quotes></nav-quotes>
                  <nav-cart></nav-cart>
                </template>
                <nav-support v-if="$vuetify.breakpoint.smAndUp"></nav-support>
                <v-spacer v-if="$vuetify.breakpoint.xsOnly"></v-spacer>
                <nav-search v-if="$vuetify.breakpoint.xsOnly"></nav-search>
              </div>
            </div>            
          </div>
        </v-container>
          <!-- Nav Bar-->
          <template v-slot:extension v-if="$vuetify.breakpoint.smAndUp">
              <nav-links></nav-links>
              <v-spacer></v-spacer>
              <v-btn text small flat color="teal lighten-4" class="pa-1 text-caption text-capitalize" active-class="grey--text">Latest</v-btn>
              <v-btn text small flat color="teal lighten-4" class="pa-1 text-caption text-capitalize" active-class="grey--text">Trending</v-btn>
              <v-btn text small flat color="teal lighten-4" class="pa-1 text-caption text-capitalize" active-class="grey--text">Offers</v-btn>
          </template>
                 
          
      </v-app-bar>
      <!-- Nav Drawer-->  
      <v-navigation-drawer v-model="drawer" absolute left temporary app v-if="$vuetify.breakpoint.xsOnly" class="sidebar">
          <template v-slot:prepend>
             <v-btn small icon absolute top right class="mt-n2 mr-n3" @click="drawer = false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
            <span class="d-flex mt-2 ml-2">
              <nav-brand sdb></nav-brand>
              <v-spacer></v-spacer>
              <nav-sites></nav-sites>
              <v-spacer></v-spacer>
            </span>
              <auth-account sdb class="d-inline-flex" v-if="($page.props.user)"></auth-account>
              <auth-login class="d-inline-flex" v-if="(!$page.props.user)"></auth-login>
              <auth-signup class="d-inline-flex" v-if="(!$page.props.user)"></auth-signup>
          </template>
          <v-divider></v-divider>
          <v-row>
            <v-col cols="9">
              <nav-links sdb></nav-links>
            </v-col>
            <v-divider vertical></v-divider>
            <v-col cols="3" class="d-flex flex-column justify-space-around">
              <nav-support></nav-support>
              <nav-cart></nav-cart>
              <nav-compare></nav-compare>
              <nav-favorites></nav-favorites>
              <nav-quotes></nav-quotes>
              <nav-support></nav-support>
            </v-col>
          </v-row>
          <v-divider></v-divider>
              <nav-contact></nav-contact>
      </v-navigation-drawer>
      <!-- Header Extension-->
        <slot name="header"></slot>
        <!-- App Content-->        
        <v-main class="pa-1 grey lighten-3">
          <!-- App Page-->
          <v-row no-gutters>
            <v-col cols="2"><nav-sidebar></nav-sidebar></v-col>
            <v-col cols="10">
              <nav-topbar class="pa-1"></nav-topbar>
              <v-row dense>
                <v-col cols="9" class="px-2"><slot name="page"></slot></v-col>
                <v-col cols="3"><acc-summary></acc-summary></v-col>
              </v-row>
            </v-col>
          </v-row>
          <!-- App Supp-->
          <app-back-top></app-back-top><!-- Page Back-to-Top-->
          <app-live-chat></app-live-chat><!-- Page Live Contact-->
          <app-feedback></app-feedback><!-- Page Feedback-->
          
          <slot name="supp"></slot>
        </v-main>
        <!-- App Footer-->
        <user-consent></user-consent>
        <slot name="footer"></slot>
      </v-container>
    </v-app>
  </div>
</template>

<style scoped>
.sidebar{
  min-height: 100%; position: fixed;
}
</style>