<script>
import AppSynvast from "@/Layouts/AppSynvast.vue"
import CartItems from "@/Partials/Synvast/Cart/CartItems.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { AppSynvast, CartItems, },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      meta: { title: 'Cart', description: '', keywords: '', url: '', site_name: '', type: '', image: '', image_type: 'image/png', image_width: 1024, image_height: 600, },
       e1: 1,
       e6: 1,      
    })
    
    return { } 
  }
} 
</script>

<template>
  <AppSynvast :meta="meta">
      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <cart-items>
            <template #actions>
              <v-card-actions class="justify-end">
                <v-btn small text outlined color="orange" class="text-capitalize m-1" :href="route('electrical.home')">Continue Shopping</v-btn>
                <v-btn small dark color="orange" class="text-capitalize m-1" :href="route('electrical.cart.checkout')">Cart Checkout</v-btn>
              </v-card-actions>
            </template>
          </cart-items>

      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>

       <!-- Page Slot Footer -->
      <template #footer></template>

    </AppSynvast>
</template>
