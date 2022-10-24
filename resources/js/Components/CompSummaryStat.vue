<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    name: {type: String, required: true},
    icon: {type: String, required: true},
    value: {type: String, required: true},
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { }
  }
} 
</script>

<template>
  <div>
      <p class="text-caption font-weight-bold mb-0"><v-icon dense>{{ icon }}</v-icon> {{ value }} </p>
      <p class="text-caption text-capitalize mb-0" color="rgba(0,0,0,.54)">{{ name }}</p>
  </div>
</template>

<style scoped>
 
</style>