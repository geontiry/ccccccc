<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const items = ref([
      { link: route("home"), icon: "mdi-home-outline", title: "Home" },
      { link: route("about"), icon: "mdi-bank-outline", title: "About" },
      { link: route("websites"), icon: "mdi-web", title: "Websites" },
      { link: route("design"), icon: "mdi-monitor-cellphone-star", title: "Design", },
      { link: route("domain"), icon: "mdi-television-stop", title: "Domain" },
      { link: route("host"), icon: "mdi-desktop-tower-monitor", title: "Host", },
      { link: route("integrate"), icon: "mdi-monitor-screenshot", title: "Integrate", },
      { link: route("learn"), icon: "mdi-monitor-dashboard", title: "Learn" },
      { link: route("hire"), icon: "mdi-smart-card-reader-outline", title: "Hire", },
    ])
    
    return { } 
  }
} 
</script>
<template>
  <div>
    <v-text-field append-icon="mdi-microphone" flat hide-details label="Search" prepend-inner-icon="mdi-magnify" solo-inverted dense class="hidden-xs-only"></v-text-field>
    <v-btn small icon class="hidden-sm-and-up"><v-icon dense>mdi-magnify</v-icon></v-btn>
  </div>
</template>

<style scoped>
</style>