<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import LayoutContent from '@/Pages/Admin/Panel/layouts/Content.vue'
import UpgradeToPro from '@/Pages/Admin/Panel/components/UpgradeToPro.vue'
import StatisticsCardVertical from '@/Pages/Admin/Panel/components/statistics-card/StatisticsCardVertical.vue'
import DashboardCongratulationJohn from '@/Pages/Admin/Panel/views/dashboard/DashboardCongratulationJohn.vue'
import DashboardStatisticsCard from '@/Pages/Admin/Panel/views/dashboard/DashboardStatisticsCard.vue'
import DashboardCardTotalEarning from '@/Pages/Admin/Panel/views/dashboard/DashboardCardTotalEarning.vue'
import DashboardCardDepositAndWithdraw from '@/Pages/Admin/Panel/views/dashboard/DashboardCardDepositAndWithdraw.vue'
import DashboardCardSalesByCountries from '@/Pages/Admin/Panel/views/dashboard/DashboardCardSalesByCountries.vue'
import DashboardWeeklyOverview from '@/Pages/Admin/Panel/views/dashboard/DashboardWeeklyOverview.vue'
import DashboardDatatable from '@/Pages/Admin/Panel/views/dashboard/DashboardDatatable.vue'
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 

export default{
  components: { 
    LayoutContent,
    UpgradeToPro,
    StatisticsCardVertical,
    DashboardCongratulationJohn,
    DashboardStatisticsCard,
    DashboardCardTotalEarning,
    DashboardCardDepositAndWithdraw,
    DashboardCardSalesByCountries,
    DashboardWeeklyOverview,
    DashboardDatatable,
  },
  props: {},

  setup (props, ctx) {
    const totalProfit = { statTitle: 'Total Profit', icon: "mdi-poll", color: 'success', subtitle: 'Weekly Project', statistics: '$25.6k', change: '+42%', }
    const totalSales = { statTitle: 'Refunds', icon: 'mdi-currency-usd', color: 'secondary', subtitle: 'Past Month', statistics: '$78', change: '-15%',}
    const newProject = { statTitle: 'New Project', icon: 'mdi-label-variant-outline', color: 'primary', subtitle: 'Yearly Project', statistics: '862', change: '-18%', }
    const salesQueries = { statTitle: 'Sales Quries', icon: 'mdi-help-circle-outline', color: 'warning', subtitle: 'Last week', statistics: '15', change: '-18%', }

    const state = reactive({        
    })
    
    return { ...toRefs(state), totalProfit, totalSales, newProject, salesQueries, } 
  }
} 
</script> 

<template>
  <LayoutContent>
    <v-row>
    <v-col cols="12" md="4"><dashboard-congratulation-john></dashboard-congratulation-john></v-col>
    <v-col cols="12" md="8"><dashboard-statistics-card></dashboard-statistics-card></v-col>
    <v-col cols="12" sm="6" md="4"><dashboard-weekly-overview></dashboard-weekly-overview></v-col>
    <v-col cols="12" md="4" sm="6"><dashboard-card-total-earning></dashboard-card-total-earning></v-col>
    <v-col cols="12" md="4">
      <v-row class="match-height">
        <v-col cols="12" sm="6">
          <statistics-card-vertical :change="totalProfit.change" :color="totalProfit.color" :icon="totalProfit.icon" :statistics="totalProfit.statistics" 
          :stat-title="totalProfit.statTitle" :subtitle="totalProfit.subtitle"></statistics-card-vertical></v-col>
        <v-col cols="12" sm="6">
          <statistics-card-vertical :change="totalSales.change" :color="totalSales.color" :icon="totalSales.icon" :statistics="totalSales.statistics"
            :stat-title="totalSales.statTitle" :subtitle="totalSales.subtitle"></statistics-card-vertical>
        </v-col>
        <v-col cols="12" sm="6">
          <statistics-card-vertical :change="newProject.change" :color="newProject.color" :icon="newProject.icon" :statistics="newProject.statistics"
            :stat-title="newProject.statTitle" :subtitle="newProject.subtitle"></statistics-card-vertical>
        </v-col>
        <v-col cols="12" sm="6">
          <statistics-card-vertical :change="salesQueries.change" :color="salesQueries.color" :icon="salesQueries.icon" :statistics="salesQueries.statistics"
            :stat-title="salesQueries.statTitle" :subtitle="salesQueries.subtitle"></statistics-card-vertical>
        </v-col>
      </v-row>
    </v-col>
    <v-col cols="12" md="4"><dashboard-card-sales-by-countries></dashboard-card-sales-by-countries></v-col>
    <v-col cols="12" md="8"><dashboard-card-deposit-and-withdraw></dashboard-card-deposit-and-withdraw></v-col>
    <v-col cols="12"><dashboard-datatable></dashboard-datatable></v-col>
  </v-row>
  </LayoutContent>
</template>

<style lang="scss" scoped>
</style>
