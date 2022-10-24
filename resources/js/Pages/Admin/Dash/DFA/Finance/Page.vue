<script>
import AdmPanel from "@/Layouts/AdmPanel.vue";
import DashboardCardSalesByCountries from "@/Components/Test/DashboardCardSalesByCountries.vue";
import DashboardCardDepositAndWithdraw from "@/Components/Test/DashboardCardDepositAndWithdraw.vue";
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  layout: AdmPanel,
  components: { DashboardCardSalesByCountries, DashboardCardDepositAndWithdraw, },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-row>
        <v-col cols="12" md="4" ><dashboard-card-sales-by-countries></dashboard-card-sales-by-countries></v-col>
        <v-col cols="12" md="8" ><dashboard-card-deposit-and-withdraw></dashboard-card-deposit-and-withdraw></v-col>
    </v-row>
  </div>
</template>