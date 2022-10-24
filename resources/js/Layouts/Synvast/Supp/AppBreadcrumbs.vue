<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const active = ref({ type: Boolean, default: false})
    const breadcrumbs = ref(Object)
    
    return { } 
  }
} 
</script>

<template>
  <div>
      <v-breadcrumbs  :items="breadcrumbs" class="ma-0 pa-1" v-if="active === true"></v-breadcrumbs> 
  </div>
</template>

<style lang="scss" scoped>

</style>