<script>
import AppSynvast from "@/Layouts/AppSynvast.vue";
import HomeHero from "@/Partials/Synvast/Home/HomeHero.vue";
import ProductsFeature from "@/Partials/Synvast/Widget/ProductsFeature.vue";
import HomeTestimonials from "@/Partials/Synvast/Home/HomeTestimonials.vue";
import HomeCta from "@/Partials/Synvast/Home/HomeCta.vue"
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 
  
export default { 
  components: { AppSynvast, HomeHero, ProductsFeature, HomeTestimonials, HomeCta, },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      meta: { title: 'Home', description: '', keywords: '', url: '', site_name: '', type: '', image: '', image_type: 'image/png', image_width: 1024, image_height: 600, },
      trending: [
        {
          product_code: 451645,
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
            product_code: 586645,
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
              product_code: 978465,
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
                product_code: 695225,
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
                  product_code: 946858,
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
    
    return { ...toRefs(state) } 
  }
} 
</script>

<template>
  <AppSynvast :meta="meta">
      <!-- Page Slot Header -->
      <template #header></template>
      <!-- Page Slot Home-->
      <template #page>
        <HomeHero />
        <ProductsFeature category="Trending Products" :products="trending" />
        <ProductsFeature category="Latest Products" />
        <ProductsFeature category="Lights" />
        <ProductsFeature category="Switches" />
        <ProductsFeature category="Sockets" />
        <ProductsFeature category="Cables" />
        <ProductsFeature category="Panels" />
        <ProductsFeature category="Modules" />
        <ProductsFeature category="Tools" />
        <ProductsFeature category="Energy" />
        <ProductsFeature category="Machines" />
        <ProductsFeature category="Appliances" />
        <HomeTestimonials />
        <HomeCta />
      </template>
      <!-- Page Slot Supp -->
      <template #supp></template>
       <!-- Page Slot Footer -->
      <template #footer></template>
    </AppSynvast>
</template>
