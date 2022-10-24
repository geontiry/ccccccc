<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
      value: Boolean
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { }
  }
} 
</script>

<template>
    <span>
        <span v-if="value === true" class="text-success">✔</span>
        <span v-else-if="value === false" class="text-danger">✗</span>
        <span v-else>-</span>
    </span>
</template>