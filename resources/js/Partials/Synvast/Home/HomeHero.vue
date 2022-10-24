<script>
import VMediaCarousel from "@/Components/Media/VMediaCarousel.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { VMediaCarousel },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
       images: [
        { src: 'https://demo.graygrids.com/themes/shopgrids/assets/images/hero/slider-bg2.jpg', },
        { src: '/storage/eweb/websites/ecommerce/personal2.png', },
        { src: '/storage/eweb/websites/ecommerce/personal3.png', },
        { src: '/storage/eweb/websites/ecommerce/personal4.png', },
        { src: '/storage/eweb/websites/ecommerce/personal5.png', },
      ],
      items: [
        'Electrical Lights',
        'Electrical Switches',
        'Electrical Sockets',
        'Electrical Cables',
        'Electrical Panels',
        'Electrical Modules',
        'Electrical Tools',
        'Electrical Energy',
        'Electrical Machines',
        'Electrical Services',
      ],
      values: [
        {icon: 'mdi-shield-check', name: 'Quality Confidence Shopping', point1: 'Original verified products', point2: 'Great offers & discounts'},
        {icon: 'mdi-truck-check', name: 'Quick Cheap Delivery', point1: 'Free returns', point2: 'Over 28 locations countrywide'},
        {icon: 'mdi-briefcase-check', name: 'Convenient Secure Payment', point1: 'Safe & secure payment', point2: '100% money back guarantee' },
        {icon: 'mdi-account-multiple-check-outline', name: 'Reliable Customer Support', point1: '', },
      ]
      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-row no-gutters>
      <v-col cols="12" sm="6">
        <VMediaCarousel dense :height="$vuetify.breakpoint.xsOnly ? 200 : 305" :images ="images" />
      </v-col>
      <v-col cols="6" sm="3" class="px-1">
        <v-card class="mb-2"><v-img height="150" src="/storage/eweb/home/hero1.jpg"></v-img></v-card>
        <v-card class="mt-2"><v-img height="150" src="/storage/eweb/home/hero1.jpg"></v-img></v-card>
      </v-col>
      <v-col cols="6" sm="3" class="pl-1">
        <v-alert dense color="indigo darken-1" dark :icon="value.icon" border="left" height="75" class="mb-1" v-for="(value, i) in values" :key="i">
          <div class="text-subtitle-2 orange--text">{{ value.name }}</div>
          <div class="text-caption"><v-icon small color="orange">mdi-check</v-icon>{{ value.point1 }}</div>
          <div class="text-caption"><v-icon small color="orange">mdi-check</v-icon>{{ value.point2 }}</div>
        </v-alert>
      </v-col>
    </v-row>

  </div>
</template>

<style scoped>
</style>
