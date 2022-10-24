<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    //const a = ref(3)
    
    return { } 
  }
} 
</script>
<template>
  <div class="d-sm-flex justify-center">
    <v-btn text class="text-caption text-capitalize" color="teal lighten-4"><v-icon small>mdi-map-marker</v-icon>Nakuru</v-btn>
    <v-btn text class="text-caption text-capitalize" color="teal lighten-4"><v-icon small>mdi-phone-message</v-icon>0716285824</v-btn>
    <v-btn text class="text-caption text-capitalize" color="teal lighten-4"><v-icon small>mdi-gmail</v-icon>info@brendentech.co.ke</v-btn>
    <v-spacer></v-spacer>
    <v-icon small>fab fa-facebook-f</v-icon>
    <v-icon small>mdi-twitter</v-icon>
    <v-icon small>mdi-linkedin</v-icon>
    <v-icon small>mdi-instagram</v-icon>
  </div>
</template>

<style scoped>
</style>