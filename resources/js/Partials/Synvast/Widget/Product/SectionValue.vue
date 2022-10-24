<script>
import CompSummaryAvatars from "@/Components/CompSummaryAvatars.vue";
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { CompSummaryAvatars },
  props: {
    dense: {type: Boolean, default: false},
    values: {type: Object, default: false},
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
    <comp-summary-avatars title="Similar Brands" :avatars="values"></comp-summary-avatars>
  </div>
</template>

<style scoped>
 
</style>