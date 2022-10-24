<script>
import ProductHome from "@/Component/Synvast/ProductHome"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { ProductHome },
  props: {
    category: {type: String, required: true},
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
        <h2 class="text-h5 orange--text  pa-1">Electrical {{ category }}</h2>
        <v-btn text color="grey" class="text-capitalize">See All <v-icon>mdi-chevron-double-right</v-icon></v-btn>
      </div>
      <v-divider></v-divider>
      <v-row no-gutters class="my-3">
        <v-col cols="2" v-for="n in 6" :key="n" class="px-1"><product-home color="orange darken-4"></product-home></v-col>
      </v-row>
    </v-card>
  </div>
</template>

<style scoped>
 
</style>