<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    cardLoading: { type: Boolean, default: false},
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-card :loading="cardLoading">
        <v-card-title>Test</v-card-title>
    </v-card>   
  </div>
</template>

<style lang="scss" scoped>

</style>