<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      
    })
    // cart_items: state => state.cart.cart_items, 
    //   cart_total: state => state.cart.cart_total, 
    //   cart_count: state => state.cart.cart_count, 
    //$store.dispatch("getCarts");
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div>Cart Summary</div>
    <v-card class="mb-1">
      <div class="d-flex ma-1">
        <span><v-icon dense color="primary">mdi-cart</v-icon>Cart: {{ cart_count }} Items</span>
          <v-spacer></v-spacer>
          <v-btn small text color="orange" :href="route('electrical.cart')">Modify <v-icon small>mdi-chevron-double-right</v-icon></v-btn>
      </div>
      <v-divider></v-divider>
      <v-list two-line dense  class="scroll">
          <div v-for="(item, i) in cart_items" :key="i">
            <v-divider class="ml-16" v-show="i !== 0"></v-divider>
          <v-list-item class="mt-n1 mb-n3" >
              <v-list-item-avatar tile class="rounded"><v-img src="https://cdn.vuetifyjs.com/images/lists/1.jpg"></v-img></v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title><inertia-link>3-way Switch socket</inertia-link></v-list-item-title>
                <v-list-item-subtitle>Small plates, salads &amp; sandwiches - an intimate setting with 12 indoor seats plus patio seating</v-list-item-subtitle>
              </v-list-item-content>
              <v-list-item-action><v-list-item-action-text><strong>{{item.quantity}}</strong></v-list-item-action-text></v-list-item-action>
            </v-list-item>
          </div>
        </v-list>
    </v-card>
    <div>Order Summary</div>
    <v-card>
      <v-row dense class="pa-2">
        <v-col cols="6" class="text-subtitle-1 text-end">Subtotal:</v-col><v-col cols="6" class="text-right text-subtitle-1">{{ cart_total | ksh}}</v-col>
        <v-col cols="6" class="text-subtitle-1 text-end grey--text">VAT:</v-col><v-col cols="6" class="text-right text-subtitle-1 grey--text">Ksh. 0</v-col>    
        <v-col cols="6" class="text-subtitle-1 text-end">Shipping:</v-col><v-col cols="6" class="text-right text-subtitle-1">Ksh. 530</v-col>    
        <v-col cols="6" class="text-subtitle-1 text-end">Voucher:</v-col><v-col cols="6" class="text-right text-subtitle-1">Ksh. 530</v-col>    
        <v-col cols="12"><v-divider class="ml-6"></v-divider></v-col>
        <v-col cols="6" class="text-h6 text-end orange--text">Total:</v-col><v-col cols="6" class="text-right text-h6 orange--text"><strong>{{ cart_total | ksh }}</strong></v-col>
        <v-col cols="12" class="text-caption  text-start">
          <div><v-icon small>mdi-information</v-icon> Cost inclusive of VAT</div>
          <div><v-icon small>mdi-help-circle</v-icon> Need support? <a href="#">Contact us</a>.</div>
        </v-col>
      </v-row>
    </v-card>
    <v-card class="mt-1">
      <div>Order Invoice <v-icon>mdi-download</v-icon></div>
    </v-card>
  </div>
</template>

<style scoped>
.scroll{
  max-height: 200px; overflow-y: scroll;
}
</style>