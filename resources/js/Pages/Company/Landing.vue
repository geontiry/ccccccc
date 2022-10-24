<script>
import AppCompany from "@/Layouts/AppCompany.vue";
import Home from "@/Pages/Company/Landing/HomeSection.vue";
import About from "@/Pages/Company/Landing/AboutSection.vue";
import Download from "@/Pages/Company/Landing/DownloadSection.vue";
import Pricing from "@/Pages/Company/Landing/PricingSection.vue";
import Contact from "@/Pages/Company/Landing/ContactSection.vue";
import Extra from "@/Pages/Company/Landing/ExtraSection.vue";
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default {
  components: { AppCompany, Home, About, Download, Pricing, Contact, Extra},
  props: {  },

  setup (props, ctx) {

  }
} 
</script>

<template>
  <div>
    <AppCompany>
    <template #page>
      <Home />
      <About />
      <Download />
      <Pricing />
      <Contact />
      <Extra />
    </template>
  </AppCompany>      
  </div>
</template>

<style lang="scss" scoped>
</style>