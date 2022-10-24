<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    header1: { type: Boolean, required: true},
    header2: { type: Boolean, required: true},
    header3: { type: Boolean, required: true},
    title: { type: String, },
    description: { type: String, },
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { }
  }
} 
</script>

<template>
  <div>
    <div v-if="header1">
      <h1 class="text-center text-h4">{{ title }}</h1>
      <p class="text-subtitle-1">{{ description }}</p>
    </div>
    <div v-if="header2">
      <h2 class="text-center text-h5">{{ title }}</h2>
      <p class="text-subtitle-1">{{ description }}</p>
    </div>
    <div v-if="header3">
      <h2 class="text-h6">{{ title }}</h2>
      <p class="text-body-1">{{ description }}</p>
    </div>
  </div>
</template>

<style lang="scss" scoped>

</style>