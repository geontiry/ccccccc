<script>
import Product from "@/Partials/Synvast/Widget/Product.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { Product },
  props: {
    category: {type: String, required: true},
    products: {type: Array, required: true},
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
    <v-card class="my-3">
      <div class="d-flex blue lighten-4 justify-space-between">
        <h2 class="text-h5 orange--text  pa-1">{{ category }}</h2>
        <v-btn text color="grey" class="text-capitalize">See All <v-icon>mdi-chevron-double-right</v-icon></v-btn>
      </div>
      <v-divider></v-divider>
      <v-container class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-5 gap-4">
        <div  v-for="product in products" :key="product">
          <product dense color="orange darken-4" :product="product"></product>
        </div>
      </v-container>
    </v-card>
  </div>
</template>

<style scoped>
 
</style>