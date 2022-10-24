<script>
import NavMenuSectionTitle from '@/Pages/Admin/Panel/layouts/components/vertical-nav-menu/components/NavMenuSectionTitle.vue'
import NavMenuGroup from '@/Pages/Admin/Panel/layouts/components/vertical-nav-menu/components/NavMenuGroup.vue'
import NavMenuLink from '@/Pages/Admin/Panel/layouts/components/vertical-nav-menu/components/NavMenuLink.vue'
//import AppContainer from '@/Pages/Admin/Panel.vue'
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 

export default{
  components: { 
    NavMenuSectionTitle,
    NavMenuGroup,
    NavMenuLink,
  },
  props: {
    isDrawerOpen: { type: Boolean, default: null, },
  },

  setup (props, ctx) {
    const state = reactive({        
    })
    
    return { ...toRefs(state) } 
  }
} 
</script> 

<template>
  <v-navigation-drawer app floating width="260" class="app-navigation-menu" :right="$vuetify.rtl" @input="val => $emit('update:is-drawer-open', val)">
    <!-- Navigation Header -->
    <div class="vertical-nav-header d-flex items-center ps-6 pe-5 pt-5 pb-2">
      <inertia-link href="" class="d-flex align-center text-decoration-none">
        <v-img contain eager src="/storage/assets/images/logos/logo.svg" max-height="30px" max-width="30px" alt="logo" class="app-logo me-3"></v-img>
        <v-slide-x-transition><h2 class="app-title text--primary">SGB</h2></v-slide-x-transition>
      </inertia-link>
    </div>

    <!-- Navigation Items -->
    <v-list expand shaped class="vertical-nav-menu-items pr-5">
      <nav-menu-link title="Dashboard" icon="mdi-home-outline"></nav-menu-link>
      <nav-menu-link title="Account Settings" icon="mdi-account-cog-outline"></nav-menu-link>
      <nav-menu-group title="Pages" icon="mdi-file-outline">
        <nav-menu-link title="Login" target="_blank"></nav-menu-link>
        <nav-menu-link title="Register" target="_blank"></nav-menu-link>
        <nav-menu-link title="Error" target="_blank"></nav-menu-link>
      </nav-menu-group>
      <nav-menu-section-title title="USER INTERFACE"></nav-menu-section-title>
      <nav-menu-link title="Typography" icon="mdi-alpha-t-box-outline"></nav-menu-link>
      <nav-menu-link title="Icons" icon="mdi-eye-outline"></nav-menu-link>
      <nav-menu-link title="Cards" icon="mdi-credit-card-outline"></nav-menu-link>
      <nav-menu-link title="Tables" icon="mdi-table"></nav-menu-link>
      <nav-menu-link title="Form Layouts" icon="mdi-form-select"></nav-menu-link>
    </v-list>
    <a href="https://themeselection.com/products/materio-vuetify-vuejs-admin-template" target="_blank" rel="nofollow">
      <v-img
        :src="`/storage/assets/images/pro/upgrade-banner-${$vuetify.theme.dark ? 'dark' : 'light'}.png`"
        alt="upgrade-banner"
        transition="scale-transition"
        class="upgrade-banner mx-auto"
        max-width="230"
      ></v-img>
    </a>
  </v-navigation-drawer>
</template>

<style lang="scss" scoped>
@import '@/materio/sass/preset/mixins.scss';

.app-title {
  font-size: 1.25rem;
  font-weight: 700;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: 0.3px;
}

// ? Adjust this `translateX` value to keep logo in center when vertical nav menu is collapsed (Value depends on your logo)
.app-logo {
  transition: all 0.18s ease-in-out;
  .v-navigation-drawer--mini-variant & {
    transform: translateX(-4px);
  }
}

@include theme(app-navigation-menu) using ($material) {
  background-color: map-deep-get($material, 'background');
}

.app-navigation-menu {
  .v-list-item {
    &.vertical-nav-menu-link {
      ::v-deep .v-list-item__icon {
        .v-icon {
          transition: none !important;
        }
      }
    }
  }
}

// You can remove below style
// Upgrade Banner
.app-navigation-menu {
  .upgrade-banner {
    position: absolute;
    bottom: 13px;
    left: 50%;
    transform: translateX(-50%);
  }
}
</style>
