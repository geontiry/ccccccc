<script>
import AdmPanel from "@/Layouts/AdmPanel.vue"
import DashCardStatistics from "@/Partials/Admin/Dash/DashCardStatistics.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { AdmPanel, DashCardStatistics, },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      product: 'Products Catalogue',
        products: [
          { title: 'Lights', total: 784, icon: 'mdi-trending-up', color: 'primary'},
          { title: 'Switches', total: 541, icon: 'mdi-account-outline', color: 'success'},
          { title: 'Sockets', total: 535, icon: 'mdi-label-outline', color: 'warning'},
          { title: 'Cables', total: 345, icon: 'mdi-currency-usd', color: 'info'},
          { title: 'Panels', total: 300, icon: 'mdi-currency-usd', color: 'info'},
          { title: 'Modules', total: 300, icon: 'mdi-currency-usd', color: 'info'},
          { title: 'Tools', total: 2, icon: 'mdi-currency-usd', color: 'info'},
          { title: 'Energy', total: 2, icon: 'mdi-currency-usd', color: 'info'},
          { title: 'Machines', total: 3, icon: 'mdi-currency-usd', color: 'info'},
          { title: 'Appliances', total: 3, icon: 'mdi-currency-usd', color: 'info'},
        ],      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <AdmPanel>
        <DashCardStatistics :title="product" :stats="products"  class="mb-3" />
    </AdmPanel>
  </div>
</template>
