<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      model: 0,
      overlay: false,
      paymentdialog: true,
      payments: [
        { 
          method: 'Mobile Transfer', 
          options: [
            { name: 'M-Pesa Express', description: ''},
            { name: 'M-Pesa Till', description: ''},
            { name: 'M-Pesa Paybill', description: ''},
            { name: 'Airtel Money', description: ''},
          ]
        },
        { 
          method: 'Bank Transfer', 
          options: [
            { name: 'Account Deposit', description: ''},
            { name: 'ATM Card', description: ''},
          ]
        },
        { 
          method: 'Internet Transfer', 
          options: [
            { name: 'PayPal', description: ''},
            { name: 'Payoneer', description: ''},
            { name: 'Transferwise', description: ''},
            { name: 'Stripe', description: ''},
          ]
        },
      ]
      
    })

    // items: state => state.cart.cart_items, 
    //   count: state => state.cart.cart_count, 
    const openpayment = ()=>{
      overlay = true
      setTimeout(() => { 
        overlay = false, 
        paymentdialog = true 
        }, 2000)
      }
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-overlay opacity="0.6" :value="overlay"><v-progress-circular indeterminate color="orange darken-4" size="64"></v-progress-circular></v-overlay>
    <div class="text-subtitle-2">Do you have a <strong>shopping voucher</strong>?</div>
    <v-row dense>
      <v-col cols="auto"><v-text-field dense solo placeholder="Enter coupon code..."></v-text-field></v-col>
      <v-col cols="auto"><v-btn dark color="orange">Validate</v-btn></v-col>
    </v-row>
    <div class="text-subtitle-2">Choose your payment method</div>
    <v-card>
      <v-slide-group mandatory show-arrows v-model="model" class="pa-1" active-class="orange" >
        <v-slide-item v-for="payment in payments" :key="payment.method" v-slot="{ active, toggle }">
          <v-card :color="active ? undefined : 'grey lighten-1'" class="ma-1" height="60" width="180" @click="toggle">
            <v-img src="https://cdn.vuetifyjs.com/images/cards/house.jpg" class="white--text align-end fill-height" gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)">
              <v-card-title class="text-subtitle-2 ml-n1 mb-n2">{{ payment.method }} <v-scale-transition><v-icon v-if="active" color="white" size="18" v-text="'mdi-check-circle-outline'"></v-icon></v-scale-transition></v-card-title>
          </v-img>
        </v-card>
      </v-slide-item>
    </v-slide-group>
    <v-divider></v-divider>
    <v-card-title>Available Payment Options</v-card-title>
    <v-card-text v-for="(payment, i) in payments" :key="i" v-show="model === i">
      <v-row dense cols="2" class="my-1" v-for="option in payment.options" :key="option.name">
        <v-col cols="2"><v-card><v-img src="//placehold.it/400/99cc77" class="rounded fill-height" height="70"></v-img></v-card></v-col>
        <v-col cols="10">
          <div class="d-flex"><span class="text-subtitle-2 text-truncate">{{option.name}}</span></div>
          <div>Pay using safaricom mpesa </div>
          <div><v-btn small outlined color="primary" @click.stop="openpayment"><v-icon>mdi-upload</v-icon>Pay</v-btn></div>
        </v-col>
      </v-row>
    </v-card-text>
    <v-card-title>Useful Information</v-card-title>
    <v-dialog persistent v-model="paymenydialog" width="500">
      <v-card class="elevation-16">
        <v-card-title class="headline">Pickup Stations<v-spacer></v-spacer>
          <v-btn class="mr-n6 mt-n8" icon @click="paymenydialog=false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
        </v-card-title>
        <v-divider></v-divider>
      </v-card>
    </v-dialog>
  </v-card>
</div>
</template>

<style scoped>
</style>