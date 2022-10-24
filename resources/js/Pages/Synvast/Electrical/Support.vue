<script>
import AppSynvast from "@/Layouts/AppSynvast.vue";
import CompHeading from "@/Components/CompHeading.vue";
import Contact from "@/Pages/Synvast/Electrical/Support/Contact.vue";
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { AppSynvast, Contact, CompHeading, },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      meta: { title: 'Support', description: '', keywords: '', url: '', site_name: '', type: '', image: '', image_type: 'image/png', image_width: 1024, image_height: 600, },
      supports: [
        {title: 'Brenden Account', href: route('electrical.support.account'), img: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg', description: 'Learn on how to create and manage a brenden online account'},
        {title: 'Brenden Shopping', href: route('electrical.support.shopping'), img: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg', description: 'Learn on how to conveniently shop at brenden '},
        {title: 'Brenden Orders', href: route('electrical.support.orders'), img: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg', description: 'Learn how to place, track and/or cancel an order'},
        {title: 'Brenden Web Partners', href: route('electrical.support.partners'), img: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg', description: 'Learn how to place, track and/or cancel an order'},
        {title: 'Interested in Brenden', href: route('electrical.support.interest'), img: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg', description: 'Learn on how to express your interest with us'},
        {title: 'Frequently Asked Questions', href: route('electrical.support.faq'), img: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg', description: 'Learn on how to shop at brenden web'},
        {title: 'Payment & Reward Policy', href: route('electrical.support.paymentoffers'), img: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg', description: 'Learn how to pay, payment methods and rewards (discounts, vouchers)'},
        {title: 'Shipping & Delivery Policy', href: route('electrical.support.shippingdelivery'), img: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg', description: 'Learn how to place, track and/or cancel an order'},
        {title: 'Return & Refund Policy', href: route('electrical.support.returnrefund'), img: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg', description: 'Learn on how to shop at brenden web'},
        {title: 'Privacy Policy', href: route('electrical.support.privacy'), img: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg', description: 'Learn on how to shop at brenden web'},
        {title: 'Cookies Policy', href: route('electrical.support.cookies'), img: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg', description: 'Learn on how to shop at brenden web'},
        {title: 'Terms of Service', href: route('electrical.support.terms'), img: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg', description: 'Learn on how to shop at brenden web'},
      ],
      page: {
        title: 'Brenden Customer Care',
        description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas',
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
        <comp-heading v-bind="page" header1></comp-heading>
        <v-row>
            <v-col cols="9">
              <v-row>
                <v-col cols="4" v-for="support in supports" :key="support.title">
                  <v-card hover height="220" :href="support.href">
                    <v-img  :src="support.img" height="80" class="white--text align-end" gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)">
                      <v-card-title  class="text-subtitle-1"  :href="support.href">{{ support.title }}</v-card-title>
                    </v-img>
                    <v-card-text class="text-subtitle-2">{{ support.description }}</v-card-text>
                    <v-card-actions  class="justify-end"><v-btn small text plain color="primary" :href="support.href">Learn More</v-btn></v-card-actions>
                  </v-card>
                </v-col>
              </v-row>
            </v-col>
            <v-col cols="3">
              <contact></contact>
            </v-col>
          </v-row>
      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>
      
       <!-- Page Slot Footer -->
      <template #footer></template>    

    </AppSynvast>
  </div>
</template> 