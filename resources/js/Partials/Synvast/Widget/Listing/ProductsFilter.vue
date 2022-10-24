<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      overlay: false,
      radios: 'Duckduckgo',
      min: 50,
      max: 90000,
      range: [5550, 70444],
      categories: ['Indoor', 'Outdoor', 'Street', 'Garden', 'Hotel'],
      brands: ['Siemens', 'Philips', 'Wurth' ],
      shippings: ['Free', 'Premium', ],
      deliveries: ['Express', 'In 1 day', 'In 1-2 days', ' In 2-4 Days', 'In 1 Week'],
      discounts: [0, 5, 10, 15, 25],
      ratings: [ '4.0', '3.0', '2.0', '1.0', '0.0'],
      ratingselect: '0.0',
      tags: [ 'Portal', 'School', 'Business', 'Portfolio', 'Drawers', 'Shopping', 'Art', 'Tech', 'Creative Writing', ],      
    })

    watch(overlay, async (val) => {val && setTimeout(() => { overlay = false}, 2000)})
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-overlay opacity="0.6" :value="overlay"><v-progress-circular indeterminate size="64" ></v-progress-circular></v-overlay>
    <v-card-text>
      <v-list-item-subtitle class="text-subtitle-2"><v-icon dense>mdi-filter</v-icon>Price Range</v-list-item-subtitle>
      <v-range-slider dense hide-details color="orange" track-color="orange accent-1" :min="min" :max="max" class="align-center mt-0 mb-3" v-model="range" @change="overlay = !overlay"></v-range-slider>
      <v-row class="px-2">
        <v-text-field dense outlined color="orange" label="From" type="number" style="width: 60px" class="text-caption"  :value="range[0]" @change="$set(range, 0, $event); overlay = !overlay"></v-text-field>
        <v-spacer></v-spacer>
        <v-text-field dense outlined color="orange" label="To" type="number" style="width: 60px" class="text-caption" :value="range[1]" @change="$set(range, 1, $event); overlay = !overlay"></v-text-field>
      </v-row>
    </v-card-text>
    <v-list dense class="ma-0 pa-0">
      <v-list-group :value="false" no-action>
        <template v-slot:activator>
          <v-list-item-subtitle class="text-subtitle-2"><v-icon dense>mdi-filter</v-icon>By Category</v-list-item-subtitle>
        </template>
        <v-checkbox dense color="orange" class="text-caption mt-n1 mb-n5" v-for="category in categories" :key="category" @change="overlay = !overlay">
          <template v-slot:label>{{ category }}</template>
        </v-checkbox>
      </v-list-group>
      <v-list-group no-action>
        <template v-slot:activator>
          <v-list-item-subtitle class="text-subtitle-2"><v-icon dense>mdi-filter</v-icon>By Brands</v-list-item-subtitle>
        </template>
        <v-checkbox dense color="orange" class="text-caption mt-n1 mb-n5" v-for="brand in brands" :key="brand" @change="overlay = !overlay">
          <template v-slot:label>{{ brand }}</template>
        </v-checkbox>
      </v-list-group>
      <v-list-group no-action>
        <template v-slot:activator>
          <v-list-item-subtitle class="text-subtitle-2"><v-icon dense>mdi-filter</v-icon>By Shipping</v-list-item-subtitle>          
        </template>
        <v-checkbox dense color="orange" class="text-caption mt-n1 mb-n5" v-for="shipping in shippings" :key="shipping" @change="overlay = !overlay">
        <template v-slot:label>{{ shipping }}</template>
      </v-checkbox>
      </v-list-group>
      <v-list-group no-action>
        <template v-slot:activator>
          <v-list-item-subtitle class="text-subtitle-2"><v-icon dense>mdi-filter</v-icon>By Delivery</v-list-item-subtitle>          
        </template>
        <v-checkbox dense color="orange" class="text-caption mt-n1 mb-n5" v-for="delivery in deliveries" :key="delivery" @change="overlay = !overlay">
          <template v-slot:label>{{ delivery }}</template>
        </v-checkbox>
      </v-list-group>
      <v-list-group no-action>
        <template v-slot:activator>
          <v-list-item-subtitle class="text-subtitle-2"><v-icon dense>mdi-filter</v-icon>By Discounts</v-list-item-subtitle>          
        </template>
        <v-radio-group dense v-model="radioGroup" class="ma-0 pa-0">
        <v-radio color="orange" class="ma-0 text-caption" :value="discount" :label="`${discount}% or more`" v-for="discount in discounts" :key="discount" @change="overlay = !overlay"></v-radio>
      </v-radio-group>
      </v-list-group>
      <v-list-group no-action>
        <template v-slot:activator>
          <v-list-item-subtitle class="text-subtitle-2"><v-icon dense>mdi-filter</v-icon>By Rating</v-list-item-subtitle>          
        </template>
        <v-radio-group dense v-model="ratingselect">
          <v-radio class="my-0" :value="rating" v-for="rating in ratings" :key="rating" @click="overlay = !overlay">
            <template v-slot:label>
              <v-row color="orange" class="text-caption font-weight-medium">
                <span class="ml-2">Above {{ rating }}</span> 
                <v-rating :value="rating" color="orange" dense half-increments readonly size="14"></v-rating>
              </v-row>
        </template>
      </v-radio>
    </v-radio-group>
      </v-list-group>
      <v-list-group no-action>
        <template v-slot:activator>
          <v-list-item-subtitle class="text-subtitle-2"><v-icon dense>mdi-filter</v-icon>By Application</v-list-item-subtitle>          
        </template>
        <v-chip-group column multiple active-class="orange--text">
        <v-chip small class="text-caption font-weight-medium" v-for="tag in tags" :key="tag" @change="overlay = !overlay">{{ tag }}</v-chip>
      </v-chip-group>
      </v-list-group>
      <v-list-group no-action>
        <template v-slot:activator>
          <v-list-item-subtitle class="text-subtitle-2"><v-icon dense>mdi-filter</v-icon>By Material</v-list-item-subtitle>          
        </template>
      </v-list-group>
    </v-list>    
  </div>
</template>

<style scoped>
 
</style>