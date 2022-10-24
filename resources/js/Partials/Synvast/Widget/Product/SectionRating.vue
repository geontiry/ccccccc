<script>
import CompRating from "@/Components/CompRating"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { CompRating },
  props: {
    dense: {type: Boolean, default: false},
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
    <div v-if="dense">
            
    </div>
    <div v-else>
      
    </div>
  </div>
</template>

<style scoped>
 
</style>