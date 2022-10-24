<script>
import ProductsCategory from "@/Partials/Synvast/Widget/Listing/ProductsCategory.vue"
import ProductsFilter from "@/Partials/Synvast/Widget/Listing/ProductsFilter.vue"
import ProductsListing from "@/Partials/Synvast/Widget/Listing/ProductsListing.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { ProductsCategory, ProductsFilter, ProductsListing, },
  props: {
    products: {type: Array, required: true}
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
    <products-list-home></products-list-home>
    <products-category></products-category>
    <v-row no-gutters>
      <v-col cols="2">
        <products-filter></products-filter>
      </v-col>
      <v-col cols="10" class="pl-4">            
        <products-listing :products="products"></products-listing>
      </v-col>
    </v-row>
  </div>
</template> 
