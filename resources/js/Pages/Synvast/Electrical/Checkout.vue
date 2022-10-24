<script>
import AppSynvast from "@/Layouts/AppSynvast.vue"
import CheckoutBilling from "@/Partials/Synvast/Cart/CheckoutBilling.vue"
import CheckoutShipping from "@/Partials/Synvast/Cart/CheckoutShipping.vue"
import CheckoutPayment from "@/Partials/Synvast/Cart/CheckoutPayment.vue"
import CheckoutSummary from "@/Partials/Synvast/Cart/CheckoutSummary.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { AppSynvast, CheckoutBilling, CheckoutShipping, CheckoutPayment, CheckoutSummary, },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
       meta: { title: 'Checkout', description: '', keywords: '', url: '', site_name: '', type: '', image: '', image_type: 'image/png', image_width: 1024, image_height: 600, },
       e6: 2,
       family: [
         {"name":"Jack",  "age": 26}, 
         {"name":"Jill",  "age": 22},
         {"name":"Jill",  "age": 22},
         {"name":"Jill",  "age": 22},
         {"name":"James", "age": 5 },
         {"name":"Jenny", "age": 2 }
        ],
        sum:'',
        count:''      
    })

    //$store.dispatch("loadLocationsData");
    // let xs = 'Jill'
    //this.family = this.family.filter(person => person.age > 18 && person.name == xs);
    //this.sum = this.family.reduce((acc, person) => acc + person.age, 0); 
    // this.sum = this.family.reduce((accum, { age }) => accum + age, 0); 
    // this.count = this.family.reduce((counter, {age}) => age === 22 ? ++counter : counter, 0); 
    
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
        <v-container>
          <v-row class="grey lighten-4">
            <v-col cols="8">
              <div>Checkout Progress</div>
              <v-stepper vertical v-model="e6" >
                <v-stepper-step :complete="e6 > 1" step="1">
                  <v-card-title><v-icon>mdi-truck-check</v-icon> Billing<v-spacer></v-spacer><v-btn small text color="orange" v-if="e6!=1" @click="e6 = 1">Change</v-btn></v-card-title>
                  <v-card color="grey lighten-4" v-if="e6>1">
                    <v-list-item three-line class="mt-n2">
                      <v-list-item-content>
                        <v-list-item-title><strong>Geoffrey Ontiri</strong></v-list-item-title>
                        <v-list-item-subtitle>+254716285824</v-list-item-subtitle>
                      </v-list-item-content>
                    </v-list-item>
                  </v-card>                  
                </v-stepper-step>
                <v-stepper-content step="1">
                  <v-card>
                    <checkout-billing></checkout-billing>
                    <v-card-actions class="justify-end">
                      <v-btn text outlined color="orange" class="text-capitalize m-1" :href="route('electrical.cart')">Back to Cart</v-btn>
                      <v-btn dark color="orange" class="text-capitalize m-1" @click="e6 = 2">Proceed to Shipping</v-btn>                     
                  </v-card-actions>
                  </v-card>
                </v-stepper-content>
                <v-stepper-step :complete="e6 > 2" step="2">
                  <v-card-title><v-icon>mdi-truck-check</v-icon> Shipping<v-spacer></v-spacer><v-btn small text color="orange" v-if="e6!=2" @click="e6 = 2">Change</v-btn></v-card-title>
                  <v-card color="grey lighten-4" v-if="e6>2">
                    <v-list-item three-line class="mt-n2">
                      <v-list-item-content>
                        <v-list-item-title><strong>Geoffrey Ontiri</strong></v-list-item-title>
                        <v-list-item-subtitle>Nakuru, CBD - GPO/City Market/Nation Centre, Nairobi</v-list-item-subtitle>
                        <v-list-item-subtitle>+254716285824</v-list-item-subtitle>
                      </v-list-item-content>
                    </v-list-item>
                  </v-card>                  
                </v-stepper-step>
                <v-stepper-content step="2">
                  <v-card>
                    <checkout-shipping></checkout-shipping>
                    <v-card-actions class="justify-end">
                      <v-btn text outlined color="orange" class="text-capitalize m-1" @click="e6 = 2">Back to Billing</v-btn>
                      <v-btn dark color="orange" class="text-capitalize m-1" @click="e6 = 3">Proceed to Payment</v-btn>                     
                  </v-card-actions>
                  </v-card>
                </v-stepper-content>
                <v-stepper-step :complete="e6 > 3" step="3">
                  <v-card-title><v-icon>mdi-cash</v-icon> Payment</v-card-title>
                </v-stepper-step>
                <v-stepper-content step="3">
                  <v-card>
                    <checkout-payment></checkout-payment>                    
                    <v-card-actions class="justify-end">
                      <v-btn text outlined color="orange" class="text-capitalize m-1" @click="e6 = 1">Back to Shipping</v-btn>
                      <v-btn dark color="orange" class="text-capitalize m-1">Complete Order</v-btn>                     
                  </v-card-actions>
                  </v-card>
                </v-stepper-content>
              </v-stepper>
            </v-col>
            <v-col cols="4">
              <checkout-summary></checkout-summary>
            </v-col>
          </v-row>
        </v-container>        
      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>
      
       <!-- Page Slot Footer -->
      <template #footer></template>    

    </AppSynvast>
  </div>
</template> 
