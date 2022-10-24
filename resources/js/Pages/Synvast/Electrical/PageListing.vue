<script>
import AppSynvast from "@/Layouts/AppSynvast.vue"
import ProductsCollection from "@/Partials/Synvast/Widget/ProductsCollection.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { AppSynvast, ProductsCollection, },
  props: { page: Object },

  setup (props, ctx) {
    const state = reactive({  
      meta: { title: 'Products', description: '', keywords: '', url: '', site_name: '', type: '', image: '', image_type: 'image/png', image_width: 1024, image_height: 600, },
       products: [
      {
          title: '3-way Switch socket',
          description: 'Small plates, salads & sandwiches - an intimate setting with 12 indoor seats plus patio seating.',
          image: '/storage/synvast/electrical/isolator.jpg',
          variations: [ '1.0.0', '1.4.8', '1.6.7', '2.4.2', '3.2.4', ],
          variant: ['1.0.0'],
          qty: 1,
          rating: { rate: 4.5,  reviews: 158, percentage: 75, downloads: 180, },
          prices: [
            { id: 1, items: '1 - 49', discount: 14.5, marked: 450000, selling: 400450 },
            { id: 2, items: '50 - 199', discount: 12.5, marked: 4450, selling: 4400 },
            { id: 3, items: '200 - 999', discount: 10.5, marked: 4400, selling: 4350 },
            { id: 4, items: '>=1000', discount: 8.5, marked: 4350, selling: 4300 }
          ],
        },
      {
          title: '3-way Switch socket',
          description: 'Small plates, salads & sandwiches - an intimate setting with 12 indoor seats plus patio seating.',
          image: '/storage/synvast/electrical/circuit_breaker.jpg',
          variations: [ '1.0.0', '1.4.8', '1.6.7', '2.4.2', '3.2.4', ],
          variant: ['1.0.0'],
          qty: 1,
          rating: { rate: 4.5,  reviews: 158, percentage: 75, downloads: 180, },
          prices: [
            { id: 1, items: '1 - 49', discount: 14.5, marked: 450000, selling: 400450 },
            { id: 2, items: '50 - 199', discount: 12.5, marked: 4450, selling: 4400 },
            { id: 3, items: '200 - 999', discount: 10.5, marked: 4400, selling: 4350 },
            { id: 4, items: '>=1000', discount: 8.5, marked: 4350, selling: 4300 }
          ],
        },
      {
          title: '3-way Switch socket',
          description: 'Small plates, salads & sandwiches - an intimate setting with 12 indoor seats plus patio seating.',
          image: '/storage/synvast/electrical/consumer_unit.jpg',
          variations: [ '1.0.0', '1.4.8', '1.6.7', '2.4.2', '3.2.4', ],
          variant: ['1.0.0'],
          qty: 1,
          rating: { rate: 4.5,  reviews: 158, percentage: 75, downloads: 180, },
          prices: [
            { id: 1, items: '1 - 49', discount: 14.5, marked: 450000, selling: 400450 },
            { id: 2, items: '50 - 199', discount: 12.5, marked: 4450, selling: 4400 },
            { id: 3, items: '200 - 999', discount: 10.5, marked: 4400, selling: 4350 },
            { id: 4, items: '>=1000', discount: 8.5, marked: 4350, selling: 4300 }
          ],
        },
      {
          title: '3-way Switch socket',
          description: 'Small plates, salads & sandwiches - an intimate setting with 12 indoor seats plus patio seating.',
          image: '/storage/synvast/electrical/fan.jpg',
          variations: [ '1.0.0', '1.4.8', '1.6.7', '2.4.2', '3.2.4', ],
          variant: ['1.0.0'],
          qty: 1,
          rating: { rate: 4.5,  reviews: 158, percentage: 75, downloads: 180, },
          prices: [
            { id: 1, items: '1 - 49', discount: 14.5, marked: 450000, selling: 400450 },
            { id: 2, items: '50 - 199', discount: 12.5, marked: 4450, selling: 4400 },
            { id: 3, items: '200 - 999', discount: 10.5, marked: 4400, selling: 4350 },
            { id: 4, items: '>=1000', discount: 8.5, marked: 4350, selling: 4300 }
          ],
        },
      {
          title: '3-way Switch socket',
          description: 'Small plates, salads & sandwiches - an intimate setting with 12 indoor seats plus patio seating.',
          image: '/storage/synvast/electrical/polished_socket.jpg',
          variations: [ '1.0.0', '1.4.8', '1.6.7', '2.4.2', '3.2.4', ],
          variant: ['1.0.0'],
          qty: 1,
          rating: { rate: 4.5,  reviews: 158, percentage: 75, downloads: 180, },
          prices: [
            { id: 1, items: '1 - 49', discount: 14.5, marked: 450000, selling: 400450 },
            { id: 2, items: '50 - 199', discount: 12.5, marked: 4450, selling: 4400 },
            { id: 3, items: '200 - 999', discount: 10.5, marked: 4400, selling: 4350 },
            { id: 4, items: '>=1000', discount: 8.5, marked: 4350, selling: 4300 }
          ],
        },
      {
          title: '3-way Switch socket',
          description: 'Small plates, salads & sandwiches - an intimate setting with 12 indoor seats plus patio seating.',
          image: '/storage/synvast/electrical/spotlights.jpg',
          variations: [ '1.0.0', '1.4.8', '1.6.7', '2.4.2', '3.2.4', ],
          variant: ['1.0.0'],
          qty: 1,
          rating: { rate: 4.5,  reviews: 158, percentage: 75, downloads: 180, },
          prices: [
            { id: 1, items: '1 - 49', discount: 14.5, marked: 450000, selling: 400450 },
            { id: 2, items: '50 - 199', discount: 12.5, marked: 4450, selling: 4400 },
            { id: 3, items: '200 - 999', discount: 10.5, marked: 4400, selling: 4350 },
            { id: 4, items: '>=1000', discount: 8.5, marked: 4350, selling: 4300 }
          ],
        },
    ],
      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <AppSynvast :meta="meta">

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <products-collection :products="products"></products-collection>
      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>
      
       <!-- Page Slot Footer -->
      <template #footer></template>    

    </AppSynvast>
  </div>
</template> 