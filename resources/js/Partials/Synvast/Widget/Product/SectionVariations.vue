<script>
import SRating from "@/Components/SRating.vue"
import CompSummaryStat from "@/Components/CompSummaryStat.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { CompSummaryStat, SRating },
  props: {
    dense: {type: Boolean, default: false},
    color: {type: String, default: false},
    rating: {type: Object, required: true},
    reviews: {type: Object, required: true},
    value: {type: Number, required: true},
    product_code: {type: Number, required: true},
    title: {type: String, required: true},
    variant: {type: String, required: false},
    variations: {type: Array, required: true},
    stats: {type: Object, required: true},
  },

  setup (props, ctx) {
    const state = reactive({  
      model: 0,      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div v-if="dense">
      <div align="right" class="mr-2 mt-3 orange--text">
        <span class="absolute ma-1">-14%</span>
        <span class=" text-caption text-decoration-line-through grey--text "><strong>KSh. 145,455</strong></span>
        <span class="text-subtitle-2">KSh. <strong class="text-subtitle-1 font-weight-bold">145,451</strong></span>       
      </div>             
    </div>
    <div v-else>
      <v-card-text>
        <div class="subheading">{{ title }}</div>
          <v-chip-group v-model="variant" active-class="orange white--text" mandatory >
            <v-chip small  v-for="variation in variations" :key="variation.id" :value="variation">{{ variation }}</v-chip>
          </v-chip-group>
          <v-divider class="mb-2"></v-divider>
          <v-card-text class="my-0 py-2 d-flex justify-space-between">
            <div class="">Code: #<span class="blue--text">{{ product_code }}</span></div>
            <div class="">Brand: 
              <span class="text-subtitle-2 blue--text">Phillips <v-icon small>mdi-chevron-double-right</v-icon></span> 
              <v-divider vertical></v-divider>
              <inertia-link class="text-caption">Similar products <v-icon small>mdi-chevron-double-right</v-icon></inertia-link>
            </div>
          </v-card-text>
          <v-row no-gutters  class="mb-n4">
            <v-col cols="auto" class="m-auto"><comp-summary-stat name="In-Stock" icon="mdi-checkbox-marked-circle-outline" :value="stats.instock"></comp-summary-stat></v-col>
            <v-col cols="auto" class="m-auto"><comp-summary-stat name="Delivery Time" icon="mdi-clock-outline" :value="stats.delivery"></comp-summary-stat></v-col>
            <v-col cols="auto" class="m-auto"><comp-summary-stat name="On-time Delivery" icon="mdi-clock-check-outline" :value="stats.ontime"></comp-summary-stat></v-col>
            <v-col cols="auto" class="m-auto"><comp-summary-stat name="Warranty" icon="mdi-diamond-stone" :value="stats.warranty"></comp-summary-stat></v-col>
          </v-row>
           <s-rating more color="orange" class="mx-2 mt-4" :rating="rating" :reviews="reviews" name="Sold" icon="mdi-download" :value="downloads"></s-rating>
        </v-card-text>      
    </div>
  </div>
</template>

<style scoped>
.absolute{
  top: 0; right: 0;
} 
.price{
  font-size: 10.5em;
}
</style>