<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    title: {type: String, required: true},
    tags: {type: Array, required: true},
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { }
  }
} 
</script>

<template>
  <div>
      <p class="text-subtitle-1 mb-1">{{ title }}</p>
      <v-chip small color="primary" class="mr-1"  v-for="tag in tags" :key="tag.id">{{ tag }}</v-chip>
  </div>
</template>

<style scoped>
 
</style>