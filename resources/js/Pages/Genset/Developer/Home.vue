<template>
  <div class="font-sans text-gray-800" :class="theme">
    <header class="border-t-4 border-blue-700 bg-white z-10 absolute w-full shadow-md">
      <nav class="container mx-auto px-8 flex flex-wrap justify-between items-center py-8">
        <div class="mb-0 lg:mb-6 xl:mb-0">
          <inertia-link href="/" class="font-bold text-xl flex items-end"><img src="https://vue-components-example.netlify.app/img/logo.82b9c7a5.png" alt="logo" class="w-10"><span>SGB</span></inertia-link>
        </div>
        <div class="block lg:hidden">
          <button @click="toggleMenu" class="flex items-center px-3 py-2 border rounded border-gray-500 hover:text-gray-600 hover:border-gray-600">
            <svg class="current-color h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" fill="gray" /></svg>
          </button>
        </div>
        <ul class="uppercase tracking-wide font-bold w-full block flex-grow lg:flex lg:flex-initial lg:w-auto items-center mt-8 lg:mt-0" :class="menuOpen ? 'block': 'hidden'">
          <li><theme-switcher :theme="theme" @themeChanged="updateTheme" /></li>
          <li class="mr-8 mb-6 lg:mb-0"><mega-menu /></li>
          <li class="mr-8 mb-6 lg:mb-0"><inertia-link href="/about" class="text-copy-primary hover:text-gray-600">About</inertia-link></li>
          <li class="mr-8 mb-6 lg:mb-0"><inertia-link href="/contact" class="text-copy-primary hover:text-gray-600">Contact</inertia-link></li>
          <li><dropdown-menu /></li>
        </ul>
      </nav>
    </header> 
    <div class="bg-gray-100 min-h-screen pt-40 text-lg">
      <Home />
    </div>
  </div>
</template>

<script>
// import SearchComponent from '@/Pages/Genset/Developer/components/SearchComponent.vue'
import DropdownMenu from '@/Pages/Genset/Developer/components/DropdownMenu.vue'
import ThemeSwitcher from '@/Pages/Genset/Developer/components/ThemeSwitcher.vue'
import MegaMenu from '@/Pages/Genset/Developer/components/MegaMenu.vue'
import Home from '@/Pages/Genset/Developer/views/Home.vue'

export default {
  name: 'app',
  components: {
    // SearchComponent,
    ThemeSwitcher,
    DropdownMenu,
    MegaMenu,
    Home
  },
  data() {
    return {
      menuOpen: false,
      theme: '',
    }
  },
  mounted() {
    this.theme = localStorage.getItem('theme') || 'theme-light'
  },
  methods: {
    toggleMenu() {
      this.menuOpen = !this.menuOpen
    },
    updateTheme(theme) {
      this.theme = theme
    }
  }
}
</script>

<!-- <style src="@/assets/css/tailwind.css" />
<style src="@/assets/css/main.css" /> -->