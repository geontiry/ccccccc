<script>
import AppSynvast from "@/Layouts/AppSynvast.vue"
import Product from "@/Partials/Synvast/Widget/Product.vue";
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { AppSynvast, Product, },
  props: { page: Object },

  setup (props, ctx) {
    const state = reactive({  
      meta: { title: 'Product', description: '', keywords: '', url: '', site_name: '', type: '', image: '', image_type: 'image/png', image_width: 1024, image_height: 600, },
      color: 'orange',
      product:
        {
          product_code: 561546,
          title: '3-way Switch socket',
          description: 'Small plates, salads & sandwiches - an intimate setting with 12 indoor seats plus patio seating.',
          variations: [ '1.0.0', '1.4.8', '1.6.7', '2.4.2', '3.2.4', ],
          variant: ['1.0.0'],
          qty: 1,
          rating: { rate: 4.5,  reviews: 158, percentage: 75, downloads: 180, },
          stats:{ instock: '125 Items', delivery: '2-4 Days', ontime: '98.42 %', warranty: '1 Year', },
          reviews: [
            { title: 'Excellent', stars: 5, count: 75, percentage: 75},
            { title: 'Good', stars: 4, count: 150, percentage: 85},
            { title: 'Average', stars: 3, count: 15, percentage: 45},
            { title: 'Poor', stars: 2, count: 5, percentage: 20},
            { title: 'Bad', stars: 1, count: 2, percentage: 8},
          ],
          prices: [
            { id: 1, items: '1 - 49', discount: 14.5, marked: 450000, selling: 400450 },
            { id: 2, items: '50 - 199', discount: 12.5, marked: 4450, selling: 4400 },
            { id: 3, items: '200 - 999', discount: 10.5, marked: 4400, selling: 4350 },
            { id: 4, items: '>=1000', discount: 8.5, marked: 4350, selling: 4300 }
          ],
          images: [
            '/storage/synvast/electrical/isolator.jpg', 
            '/storage/hero.png', 
            '/storage/eweb/home/hero2.jpg', 
            '/storage/eweb/websites/ecommerce/personal2.png',
            '/storage/eweb/websites/ecommerce/personal3.png',
            '/storage/eweb/websites/ecommerce/personal4.png',
            '/storage/eweb/websites/ecommerce/personal5.png',
          ],
          values: [ 
            { name: 'HTML', version: '5', img: '/storage/logo/languages/client_html.png'},
            { name: 'CSS', version: '3', img: '/storage/logo/languages/client_css.png'},
            { name: 'JavaScript', version: '3', img: '/storage/logo/languages/client_javascript.jpg'},
            { name: 'jQuery', version: '3.2', img: '/storage/logo/languages/client_jquery.png'},
          ],
        },
      
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
        <product :color="color" :product="product"></product>
      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>
      
       <!-- Page Slot Footer -->
      <template #footer></template>    

    </AppSynvast>
  </div>
</template> 
