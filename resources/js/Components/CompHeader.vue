<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    dense: {type: Boolean, default: false},
    title: {type: String, required: true},
    overview: {type: String, required: true},
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { }
  }
} 
</script>

<template>
  <div>
    <div v-if="dense">
      <v-list-item three-line>
        <v-list-item-content>
          <v-list-item-title class="text-subtitle-2">{{ title }}</v-list-item-title>
          <v-list-item-subtitle class="text-caption">{{ overview }}</v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>
    </div>
    <div v-else>
      <v-card-title><h1 class="text-h5">{{ title }}</h1></v-card-title>
      <v-card-text>{{ overview }}</v-card-text>
    </div>
  </div>
</template>

<style scoped>
 
</style>