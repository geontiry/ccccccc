<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    sdb: { type: Boolean, required: true}
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { } 
  }
} 
</script>

<template>
  <div class="d-flex">
    <v-avatar size="36"><a :href="route('eweb.home')"><img src="https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo" alt="John"> </a></v-avatar>
    <v-app-bar-title class="hidden-xs-only text-h"><a  :href="route('eweb.home')" class="white--text">Brenden Web</a></v-app-bar-title>
    <v-app-bar-title class="text-h" v-if="sdb"><a  :href="route('eweb.home')" class="grey--text">Brenden Web</a></v-app-bar-title>
  </div>
</template>

<style scoped>
</style>