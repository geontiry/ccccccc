<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {},

  metaInfo () {
    return {
      titleTemplate: '%s | Brenden Web',
      //title: this.page.meta.title,
    }
  },

  setup (props, ctx) {
    const state = reactive({  
      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-card>
    <v-card-title  class="text-h6">Contact Center</v-card-title>
    <v-card-text>
      <p class="text-subtitle-1 my-1">Find Us</p>
      <p class="text-subtitle-2 my-1">415-40200 Kisii<br>GS3 Tech Plaza RM1</p>
      <v-divider  class="my-1"></v-divider>
      <p class="text-subtitle-1 my-1">Call Us</p>
      <p class="text-subtitle-2 my-1">0716285824</p>
      <v-divider  class="my-1"></v-divider>
      <p class="text-subtitle-1 my-1">Mail Us</p>
      <p class="text-subtitle-2">info@gensetr.com</p>
      <v-divider class="my-1"></v-divider>
      <p class="text-subtitle-1 my-1">Chat Us</p>
      <div class="text-subtitle-2 my-1">
        <v-icon dense>mdi-message</v-icon>
        <v-icon dense>mdi-whatsapp</v-icon>
        <v-icon dense>mdi-telegram</v-icon>
        <v-icon dense>mdi-facebook-messenger</v-icon>
      </div>
      <v-divider  class="my-1"></v-divider>
      <p class="text-subtitle-1 my-1">Follow Us</p>
      <div class="text-subtitle-2 my-1">
        <v-icon dense>mdi-facebook</v-icon>
        <v-icon dense>mdi-whatsapp</v-icon>
        <v-icon dense>mdi-twitter</v-icon>
        <v-icon dense>mdi-linkedin</v-icon>
        <v-icon dense>mdi-youtube</v-icon>
      </div>
    </v-card-text>
  </v-card>
  </div>
</template>

<style lang="scss" scoped>

</style>