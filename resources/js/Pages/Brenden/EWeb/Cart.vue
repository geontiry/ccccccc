<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>        
        <v-stepper v-model="e1" alt-labels>
          <v-stepper-header class="ma-0 pa-1">
            <v-stepper-step :complete="e1 > 1" step="1" complete-icon="mdi-cart-arrow-right"  class="mt-1 mb-0 mx-0 pa-1 text-subtitle-2" @click="e1 = 1">1. Cart</v-stepper-step>
            <v-divider class="mt-5 pa-0 primary"></v-divider>
            <v-stepper-step :complete="e1 > 2" step="2" complete-icon="mdi-shield-check" class="mt-1 mb-0 mx-0 pa-1 text-subtitle-2" @click="e1 = 2">2. Checkout</v-stepper-step>
            <v-divider class="mt-5 pa-0 primary"></v-divider>
            <v-stepper-step :complete="e1 > 3" step="3" complete-icon="mdi-truck-check" class="mt-1 mb-0 mx-0 pa-1 text-subtitle-2" @click="e1 = 3">3. Shipping</v-stepper-step>
            <v-divider class="mt-5 pa-0 primary"></v-divider>
            <v-stepper-step :complete="e1 > 4" step="4" complete-icon="mdi-file-table" class="mt-1 mb-0 mx-0 pa-1 text-subtitle-2" @click="e1 = 4">4. Invoice</v-stepper-step>
            <v-divider class="mt-5 pa-0 primary"></v-divider>
            <v-stepper-step :complete="e1 > 5" step="5" complete-icon="mdi-cash" class="mt-1 mb-0 mx-0 pa-1 text-subtitle-2" @click="e1 = 5">5. Payment</v-stepper-step>
            <v-divider class="mt-5 pa-0 primary"></v-divider>
            <v-stepper-step step="6" complete-icon="mdi-progress-check" class="mt-1 mb-0 mx-0 pa-1 text-subtitle-2" @click="e1 = 6">6. Order</v-stepper-step>
          </v-stepper-header>

          <v-stepper-items>
            <v-stepper-content step="1" class="ma-0 pa-1">
              <v-row no-gutters>
                  <v-col cols="12" sm="12" md="8" class="px-1"><cart-items></cart-items></v-col>
                  <v-col cols="12" sm="12" md="4" class="px-1">
                    <v-card color="grey lighten-1">
                      <cart-summary></cart-summary>
                      <v-card-actions>
                        <v-btn small text outlined color="primary" :href="route('eweb.home')" class="text-capitalize m-1">Continue Shopping</v-btn>
                        <v-btn small color="primary" class="text-capitalize m-1" @click="e1 = 2">Proceed to Checkout</v-btn>
                      </v-card-actions>
                    </v-card>
                  </v-col>
                </v-row>
            </v-stepper-content>

            <v-stepper-content step="2">
              <v-row no-gutters>
                  <v-col cols="12" sm="12" md="8">
                    <v-card class="mb-12" color="grey lighten-1" height="200px"></v-card>
                  </v-col>
                  <v-col cols="12" sm="12" md="4">
                    <v-card color="grey lighten-1">
                      <v-card-actions>
                        <v-btn small text outlined color="primary" class="text-capitalize m-1" @click="e1 = 1">Back to Cart</v-btn>
                        <v-btn small color="primary" class="text-capitalize m-1" @click="e1 = 3">Proceed to Shipping</v-btn>
                      </v-card-actions>
                    </v-card>
                  </v-col>
              </v-row>
            </v-stepper-content>

            <v-stepper-content step="3">
              <v-row no-gutters>
                  <v-col cols="12" sm="12" md="8">
                    <v-card class="mb-12" color="grey lighten-1" height="200px"></v-card>
                  </v-col>
                  <v-col cols="12" sm="12" md="4">
                    <v-card color="grey lighten-1">
                     <v-card-actions>
                        <v-btn small text outlined color="primary" class="text-capitalize m-1" @click="e1 = 2">Back to Checkout</v-btn>
                        <v-btn small color="primary" class="text-capitalize m-1" @click="e1 = 4">Proceed to Invoice</v-btn>
                     </v-card-actions>
                    </v-card>
                  </v-col>
              </v-row>
            </v-stepper-content>

            <v-stepper-content step="4">
              <v-row no-gutters>
                  <v-col cols="12" sm="12" md="8">
                    <v-card class="mb-12" color="grey lighten-1" height="200px"></v-card>
                  </v-col>
                  <v-col cols="12" sm="12" md="4">
                    <v-card color="grey lighten-1">
                      <v-card-actions>
                        <v-btn small text outlined color="primary" class="text-capitalize m-1" @click="e1 = 3">Back to Shipping</v-btn>
                        <v-btn small color="primary" class="text-capitalize m-1" @click="e1 = 5">Proceed to Payment</v-btn>
                      </v-card-actions>
                    </v-card>
                  </v-col>
              </v-row>
            </v-stepper-content>

            <v-stepper-content step="5">
              <v-row no-gutters>
                  <v-col cols="12" sm="12" md="8">
                    <v-card class="mb-12" color="grey lighten-1" height="200px"></v-card>
                  </v-col>
                  <v-col cols="12" sm="12" md="4">
                    <v-card color="grey lighten-1">
                      <v-card-actions>
                        <v-btn small text outlined color="primary" class="text-capitalize m-1" @click="e1 = 4">Back to Invoice</v-btn>
                        <v-btn small color="primary" class="text-capitalize m-1" @click="e1 = 6">Proceed to Order</v-btn>
                      </v-card-actions>
                    </v-card>
                  </v-col>
              </v-row>
            </v-stepper-content>

            <v-stepper-content step="6">
              <v-row no-gutters>
                  <v-col cols="12" sm="12" md="8">
                    <v-card class="mb-12" color="grey lighten-1" height="200px"></v-card>
                  </v-col>
                  <v-col cols="12" sm="12" md="4">
                    <v-card color="grey lighten-1">
                      <v-card-actions>
                        <v-btn small text outlined color="primary" class="text-capitalize m-1" @click="e1 = 5">Back to Payment</v-btn>
                        <v-btn small color="primary" class="text-capitalize m-1">Confirm Order</v-btn>
                      </v-card-actions>
                    </v-card>
                  </v-col>
              </v-row>
            </v-stepper-content>
          </v-stepper-items>
        </v-stepper>
        
      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>
      
       <!-- Page Slot Footer -->
      <template #footer></template>    

    </app-container>
  </div>
</template> 
         
    

<script>
import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
import CartItems from "@/Pages/Brenden/EWeb/Cart/CartItems.vue";
import CartSummary from "@/Pages/Brenden/EWeb/Cart/CartSummary.vue";


export default {
  components: {
    AppContainer,
    CartItems,
    CartSummary, 
  },
  props: {},
  mixins: [metainformation],
   data: ()=>{
     return {
       meta: { title: 'Cart', description: '', keywords: '',  },
       e1: 1,
      }
    },
  watch: {},
  methods: {}
};
</script>
