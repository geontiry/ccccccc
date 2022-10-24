<script>
//import NavConnection from "@/Layouts/Synvast/Header/NavConnection.vue";
import AppMeta from "@/Layouts/Synvast/Supp/AppMeta.vue";
import CompBanner from "@/Components/CompBanner.vue";
import AuthAccount from "@/Partials/Auth/User/AuthAccount.vue";
import AuthLogin from "@/Partials/Auth/User/AuthLogin.vue";
import AuthPasswordReset from "@/Partials/Auth/User/AuthPasswordReset.vue";
import AuthSignup from "@/Partials/Auth/User/AuthSignup.vue";
import AuthEmailVerification from "@/Partials/Auth/User/AuthEmailVerification.vue";
import NavContact from "@/Layouts/Synvast/Header/NavContact.vue";
import NavSites from "@/Layouts/Synvast/Header/NavSites.vue";
import NavBrand from "@/Layouts/Synvast/Header/NavBrand.vue";
import NavSearch from "@/Layouts/Synvast/Header/NavSearch.vue";
import VMenuDropShop from "@/Components/Menu/VMenuDropShop.vue";
import VMenuDropDown from "@/Components/Menu/VMenuDropDown.vue";
import NavLinks from "@/Layouts/Synvast/Header/NavLinks.vue";
import SnipBreadcrumb from "@/Components/SnipBreadcrumb.vue";
import AppBackTop from "@/Layouts/Synvast/Supp/AppBackTop.vue";
import AppLiveChat from "@/Layouts/Synvast/Supp/AppLiveChat.vue";
import AppFeedback from "@/Layouts/Synvast/Supp/AppFeedback.vue";
import FooterDetail from "@/Layouts/Synvast/Footer/FooterDetail.vue";
import UserConsent from "@/Layouts/Synvast/Footer/UserConsent.vue";
import { apiSynvast } from '@/Services/apis/synvast'
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 
  
export default { 
  components: { 
    AppMeta, CompBanner, NavContact, NavBrand, NavSearch, AuthAccount, AuthLogin, AuthPasswordReset, AuthSignup,
    AuthEmailVerification, NavSites, NavLinks, VMenuDropShop, VMenuDropDown, SnipBreadcrumb, AppBackTop, AppLiveChat,
    AppFeedback, FooterDetail, UserConsent
  },
  props: {
    meta: {type: Object, required: false}
  },

  setup (props, ctx) {
    const { sites, categories, supports } = apiSynvast()

    const state = reactive({ })

    const drawer = ref(false)
    const group = ref(null)
           
    //cart_items: state => state.cart.cart_items, cart_total: state => state.cart.cart_total, cart_count: state => state.cart.cart_count,

    //$store.dispatch("getCarts")
    watch(group, async (val) =>drawer = true)
    
    return { ...toRefs(state), drawer, group, sites, categories, supports } 
  }
} 
</script>

<template>
<!--<iframe height="200px" width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/fd0bd2ba-c553-466c-a060-b144797ce369?dark=false"></iframe>-->
  <!-- App.vue -->
    <v-app>
      <v-container class="app pt-0">
        <!-- <AppMeta :meta="meta" />
        <NavConnection />
        <CompBanner /> -->
        <v-app-bar class="sticky" color="#002C4D" dense dark :height="$vuetify.breakpoint.xsOnly ? '50' : '65'">
          <div class="d-flex justify-space-between" v-if="$vuetify.breakpoint.xsOnly">
            <v-app-bar-nav-icon class="mt-2 ml-n3" @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <NavBrand />
            <NavSites />
          </div>
          <div class="px-0 d-block" v-else>
            <!-- <inertia-link>Track Order</inertia-link>
            <v-divider class="mx-4" vertical inset light></v-divider>
            <inertia-link>App Download</inertia-link>
            <inertia-link>Newsletter</inertia-link>
            <inertia-link>Find us on</inertia-link> -->
            
            <div class="grid grid-cols-12 gap-0">
              <NavBrand class="col-span-3" />
              <NavSearch class="col-span-5" />
              <div class="col-span-4">
                <div class="d-flex justify-end">
                  <NavContact />
                  <AuthAccount v-if="$page.props.user" />
                  <AuthLogin class="mx-1" v-if="!$page.props.user" />
                  <AuthPasswordReset />
                  <AuthSignup v-if="!$page.props.user" class="mx-1" />
                  <AuthEmailVerification />
                </div>
              </div>
            </div>
          </div>
          <!-- Nav Bar-->
          <template v-slot:extension>
            <template v-if="$vuetify.breakpoint.xsOnly">
              <v-spacer></v-spacer>
              <!-- Nav Cart-->
              <VMenuDropShop title="Cart" icon="mdi-cart-outline" :count="cart_count" :total="cart_total" :href="route('electrical.cart')" :lists="cart_items" />
              <v-spacer></v-spacer>
              <!-- Nav Compare-->
              <VMenuDropShop dense title="Compare" icon="mdi-compare" :count="cart_count" :total="cart_total" :href="route('electrical.cart')" :lists="cart_items" />
              <v-spacer></v-spacer>
              <!-- Nav Favorites-->
              <VMenuDropShop dense title="Favorites" icon="mdi-heart-flash" :count="cart_count" :total="cart_total" :href="route('electrical.cart')" :lists="cart_items" />
              <v-spacer></v-spacer>
              <!-- Nav Quotes-->
              <VMenuDropShop dense title="Quotes" icon="mdi-file-document-outline" :count="cart_count" :total="cart_total" :href="route('electrical.cart')" :lists="cart_items" />
              <v-spacer></v-spacer>
              <!-- Nav Support-->
              <VMenuDropDown title="Support Center" icon="mdi-help-circle-outline" :links="supports" />
              <v-spacer></v-spacer>
              <nav-search></nav-search>
              <v-spacer></v-spacer>
            </template>
            <template v-if="$vuetify.breakpoint.smAndUp">
              <nav class="d-block">
                <v-row no-gutters style="height: 40px;">
                  <v-col>
                    <nav-sites class="orange rounded-tr-full"></nav-sites>
                  </v-col>
                  <v-col class="d-flex justify-end">
                    <!-- Nav Offers -->
                    <v-btn text small flat color="teal lighten-4" class="pa-1 text-caption text-capitalize" active-class="grey--text">Offers</v-btn>
                    <!-- Nav Compare -->
                    <VMenuDropShop dense title="Compare" icon="mdi-compare" :count="cart_count" :total="cart_total" :href="route('electrical.cart')" :lists="cart_items" />
                    <!-- Nav Favorites -->
                    <VMenuDropShop dense title="Favorites" icon="mdi-heart-flash" :count="cart_count" :total="cart_total" :href="route('electrical.cart')" :lists="cart_items" /> 
                    <!-- Nav Quotes -->
                    <VMenuDropShop dense title="Quotes" icon="mdi-file-document-outline" :count="cart_count" :total="cart_total" :href="route('electrical.cart')" :lists="cart_items" />
                    <!-- Nav Cart -->
                    <VMenuDropShop title="Cart" icon="mdi-cart-outline" :count="cart_count" :total="cart_total" :href="route('electrical.cart')" :lists="cart_items" />
                    <!-- Nav Support -->
                    <VMenuDropDown title="Support Center" icon="mdi-help-circle-outline" :links="supports" v-if="$vuetify.breakpoint.smAndUp" />
                  </v-col>
                </v-row> 
                <NavLinks style="height: 30px;"/>
              </nav>
            </template>
          </template>
      </v-app-bar>
      <!-- Nav Drawer-->
      <v-navigation-drawer v-model="drawer" absolute left temporary app v-if="$vuetify.breakpoint.xsOnly" class="sidebar pa-2">
          <template v-slot:prepend>
             <v-btn small icon absolute top right class="mt-n2 mr-n3" @click="drawer = false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
              <auth-account sdb class="d-inline-flex" v-if="($page.props.user)"></auth-account>
              <auth-login class="d-inline-flex" v-if="(!$page.props.user)"></auth-login>
              <auth-signup class="d-inline-flex" v-if="(!$page.props.user)"></auth-signup>
          </template>
          <v-divider class="mt-2"></v-divider>
          <nav-links sdb></nav-links>
          <v-divider></v-divider>
          <nav-contact drawer></nav-contact>
      </v-navigation-drawer>
      <!-- Header Extension-->
        <slot name="header"></slot>
        <!-- App Content-->
        <v-main class="py-2">

        <snip-breadcrumb breads></snip-breadcrumb>
          <!-- App Page-->
          <slot name="page"></slot>
          <!-- App Supp-->
          <AppBackTop /><!-- Page Back-to-Top-->
          <AppLiveChat /><!-- Page Live Contact-->
          <AppFeedback /><!-- Page Feedback-->

          <slot name="supp"></slot>
        </v-main>
        <!-- App Footer-->
        <FooterDetail />
        <UserConsent />
        <slot name="footer"></slot>
      </v-container>
    </v-app>
</template>

<style lang="scss" scoped>
.sticky{
     -webkit-position: sticky;
    -moz-position: sticky;
    position: sticky;
    top: 0px;
    z-index: 5;
}
.sidebar{
  min-height: 100%; position: fixed;
}
</style>
