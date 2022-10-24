<script>
import AppBackTop from "@/Layouts/Brenden/Supp/AppBackTop.vue";
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { AppBackTop },
  props: {},

  setup (props, ctx) {
    //const a = ref(3)
    
    return { } 
  }
} 
</script>
<template>
  <div>
  <!-- Page Back-to-Top-->
    <app-back-top></app-back-top>
    
  </div>
</template>

</script>
<style scoped>
 
</style>