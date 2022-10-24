<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {
    dense: {type: Boolean, default: false},
    title: {type: String, required: true},
    description: {type: String, required: true},
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
      <v-list-item two-line class="px-1 mt-n3">
        <v-list-item-content>
          <v-list-item-title class="text-subtitle-2"><inertia-link :href="route(`electrical.products.division.category.listing.catalogue.product`, [ 'lights', 'led', 'tubes', '2-way-tubes', '25-mm'])">{{ title }}</inertia-link></v-list-item-title>
          <v-list-item-subtitle class="text-caption">{{ description }}</v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>
    </div>
    <div v-else>
      <v-card-title class="py-1"><h1 class="text-subtitle-1">{{ title }}</h1></v-card-title>
      <v-card-text class="text-subtitle-2 grey--text">{{ description }}</v-card-text>
    </div>
  </div>
</template>

<style scoped>
 
</style>