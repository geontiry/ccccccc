<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const items = ref([
      {title: 'Customer Care', href: route('support'), },
      {title: 'Brenden Account', href: route('support.account'), },
      {title: 'Brenden Shopping', href: route('support.shopping'), },
      {title: 'Brenden Orders', href: route('support.orders'), },
      {title: 'Brenden Partners', href: route('support.partners'), },
      {title: 'Interested in Brenden', href: route('support.interest'), },
      {title: 'Frequently Asked Questions', href: route('support.faq'),},
      {title: 'Payment & Reward Policy', href: route('support.paymentoffers'),},
      {title: 'Shipping & Delivery Policy', href: route('support.shippingdelivery'), },
      {title: 'Return & Refund Policy', href: route('support.returnrefund'), },
      {title: 'Privacy Policy', href: route('support.privacy'), },
      {title: 'Cookies Policy', href: route('support.cookies'), },
      {title: 'Terms of Service', href: route('support.terms'), },
    ])
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-menu bottom left offset-y transition="scale-transition" origin="center center">
      <template v-slot:activator="{ on: menu, attrs }">
        <v-tooltip bottom>
          <template v-slot:activator="{ on: tooltip }">
            <v-btn text small fab dark v-bind="attrs" v-on="{ ...tooltip, ...menu }"><v-icon>mdi-help-circle-outline</v-icon></v-btn>
          </template>
          <span>Support Center</span>
        </v-tooltip>
      </template>
      <v-list dense>
        <v-list-item class="my-n2" v-for="(item, index) in items" :key="index" :href="item.href">          
          <v-list-item-title><v-icon color="primary" dense>mdi-help-circle-outline</v-icon> {{ item.title }}</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>
  </div>
</template>

<script>
export default {
  props: {},
  components: {},
  data: () => {
    return { 
        items: [
        
      ]
    };
  },
  methods: {},
};
</script>
<style scoped>
</style>