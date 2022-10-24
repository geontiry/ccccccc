<script>
import AdmPanel from "@/Layouts/AdmPanel.vue"
import DashCardStatistics from "@/Partials/Admin/Dash/DashCardStatistics.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { AdmPanel, DashCardStatistics, },
  props: {
    module: { type: String, required: true },
  },

  setup (props, ctx) {
    const state = reactive({  
      order: 'Customer Order Processing',
      orders: [
        { title: 'Placed', total: 784, icon: 'mdi-trending-up', color: 'primary'},
        { title: 'Confirmed', total: 541, icon: 'mdi-account-outline', color: 'success'},
        { title: 'Processed', total: 535, icon: 'mdi-label-outline', color: 'warning'},
        { title: 'Shipped', total: 345, icon: 'mdi-currency-usd', color: 'info'},
        { title: 'Delivered', total: 300, icon: 'mdi-currency-usd', color: 'info'},
        { title: 'Received', total: 300, icon: 'mdi-currency-usd', color: 'info'},
        { title: 'Returned', total: 2, icon: 'mdi-currency-usd', color: 'info'},
        { title: 'Refunded', total: 2, icon: 'mdi-currency-usd', color: 'info'},
        { title: 'Cancelled', total: 3, icon: 'mdi-currency-usd', color: 'info'},
      ],      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <AdmPanel :mod="module">
        <DashCardStatistics :title="order" :stats="orders"  class="mb-3" />
    </AdmPanel>
  </div>
</template>