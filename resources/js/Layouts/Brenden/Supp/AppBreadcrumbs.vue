<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    active: { type: Boolean, default: false},
    breadcrumbs: Object,
  },

  setup (props, ctx) {
    //const a = ref(3)
    
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