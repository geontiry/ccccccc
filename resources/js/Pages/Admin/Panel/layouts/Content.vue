<script>
import VerticalNavMenu from '@/Pages/Admin/Panel/layouts/components/vertical-nav-menu/VerticalNavMenu.vue'
import ThemeSwitcher from '@/Pages/Admin/Panel/layouts/components/vertical-nav-menu/VerticalNavMenu.vue'
import AppBarUserMenu from '@/Pages/Admin/Panel/layouts/components/vertical-nav-menu/VerticalNavMenu.vue'
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 

export default{
  components: {
    VerticalNavMenu,
    ThemeSwitcher,
    AppBarUserMenu,
   },
  props: {},

  setup (props, ctx) {
    const state = reactive({     
      isDrawerOpen: null   
    })
    
    return { ...toRefs(state), } 
  }
} 
</script> 

<template>
  <v-app>
    <vertical-nav-menu :is-drawer-open.sync="isDrawerOpen"></vertical-nav-menu>

    <v-app-bar app flat absolute color="transparent">
      <div class="boxed-container w-full">
        <div class="d-flex align-center mx-6">
          <v-app-bar-nav-icon class="d-block d-lg-none me-2" @click="isDrawerOpen = !isDrawerOpen"></v-app-bar-nav-icon>
          <v-text-field rounded dense outlined prepend-inner-icon="mdi-magnify" class="app-bar-search flex-grow-0" hide-details></v-text-field>
          <v-spacer></v-spacer>
          <a href="https://github.com/themeselection/materio-vuetify-vuejs-admin-template-free" target="_blank" rel="nofollow">
            <v-icon class="ms-6 me-4">mdi-github</v-icon>
          </a>
          <theme-switcher></theme-switcher>
          <v-btn icon small class="ms-3"><v-icon>mdi-bell-outline</v-icon></v-btn>
          <app-bar-user-menu></app-bar-user-menu>
        </div>
      </div>
    </v-app-bar>

    <v-main>
      <div class="app-content-container boxed-container pa-6">
        <slot></slot>
      </div>
    </v-main>

    <v-footer app inset color="transparent" absolute height="56" class="px-0">
      <div class="boxed-container w-full">
        <div class="mx-6 d-flex justify-space-between">
          <span>
            &copy; 2021 <a href="https://themeselection.com" class="text-decoration-none" target="_blank">ThemeSelection</a></span>
          <span class="d-sm-inline d-none">
            <a href="https://themeselection.com/products/category/download-free-admin-templates/" target="_blank" class="me-6 text--secondary text-decoration-none">Freebies</a>
            <a href="https://themeselection.com/blog/" target="_blank" class="me-6 text--secondary text-decoration-none" >Blog</a>
            <a href="https://github.com/themeselection/materio-vuetify-vuejs-admin-template-free/blob/main/LICENSE" target="_blank" class="text--secondary text-decoration-none">MIT Licence</a>
          </span>
        </div>
      </div>
    </v-footer>
  </v-app>
</template>

<style lang="scss" scoped>
.v-app-bar ::v-deep {
  .v-toolbar__content {
    padding: 0;

    .app-bar-search {
      .v-input__slot {
        padding-left: 18px;
      }
    }
  }
}

.boxed-container {
  max-width: 1440px;
  margin-left: auto;
  margin-right: auto;
}
</style>
