<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      
    })
    
    return { } 
  }
} 
</script>

<template>
<div>
    <v-progress-circular :rotate="360" :size="100" :width="10" :value="45" color="teal">45</v-progress-circular>
</div>
    
</template>

<style lang="scss" scoped>

</style>