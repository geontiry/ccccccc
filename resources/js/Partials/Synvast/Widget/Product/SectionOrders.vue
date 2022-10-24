<script>
import CompSummaryTags from "@/Components/CompSummaryTags.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { CompSummaryTags },
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
     
  </div>
</template>

<style scoped>
 
</style>