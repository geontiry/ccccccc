<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {
    sdb: { type: Boolean, required: true},
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-card class="mb-1">
      <v-card-text>
        <div class="text-subtitle-2">Good morning.</div>
        <div class="text-caption">You last logged in 23 hours ago <inertia-link>more</inertia-link></div>
      </v-card-text>
      <v-card-title>Monday, 20 March 2021</v-card-title>
    </v-card>
    <v-card class="mb-1"><v-img height="150" src="/storage/eweb/home/hero1.jpg"></v-img></v-card>
    <v-card dark color="teal" class="pa-4">
      <div>1 Active Order</div>
       <v-divider></v-divider>
       <div>2 Pending Reviews</div>       
    </v-card>
    
  </div>
</template>

<style scoped>
</style>