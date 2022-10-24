<script>
import AdmPanel from "@/Layouts/AdmPanel.vue";
import DashCardStatistics from "@/Partials/Admin/Dash/DashCardStatistics.vue";
import DashCardTracker from "@/Partials/Admin/Dash/DashCardTracker.vue";
import DashCardTrend from "@/Partials/Admin/Dash/DashCardTrend.vue";
import DashCardCounter from "@/Partials/Admin/Dash/DashCardCounter.vue";
import ApexChart from "@/Components/Charts/ApexChart.vue";
import TableCatalogues from "@/Pages/Test/Admdashboard/TableCatalogues.vue";
import TestLocations from "@/Pages/Test/TestLocations.vue";
import TestUpload from "@/Pages/Test/TestUpload.vue";
import DashboardCongratulationJohn from "@/Components/Test/DashboardCongratulationJohn.vue";
import DashboardStatisticsCard from "@/Components/Test/DashboardStatisticsCard.vue";
import DashboardWeeklyOverview from "@/Components/Test/DashboardWeeklyOverview.vue";
import DashboardCardTotalEarning from "@/Components/Test/DashboardCardTotalEarning.vue";
import DashboardDatatable from "@/Components/Test/DashboardDatatable.vue";
import StatisticsCardVertical from "@/Components/Test/StatisticsCardVertical.vue";
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 
const gradients = [ ['#222'], ['#42b3f4'], ['red', 'orange', 'yellow'], ['purple', 'violet'], ['#00c6ff', '#F0F', '#FF0'], ['#f72047', '#ffd200', '#1feaea'], ]
  
export default { 
  components: {
    AdmPanel, DashCardStatistics, DashCardTracker, DashCardCounter, DashCardTrend, ApexChart, TableCatalogues,
    TestLocations, TestUpload, DashboardCongratulationJohn, DashboardStatisticsCard, DashboardWeeklyOverview,
    DashboardCardTotalEarning, DashboardDatatable, StatisticsCardVertical,
   },
  props: {
    module: { type: String, required: true},
  },
  setup (props, ctx) {
    const state = reactive({  
      totalProfit: { statTitle: 'Total Profit', icon: 'mdi-poll', color: 'success', subtitle: 'Weekly Project', statistics: '$25.6k', change: '+42%', },
      totalSales: { statTitle: 'Refunds',       icon: 'mdi-currency-usd', color: 'secondary', subtitle: 'Past Month', statistics: '$78', change: '-15%', },
      // vertical card options
      newProject: { statTitle: 'New Project', icon: 'mdi-label-variant-outline', color: 'primary', subtitle: 'Yearly Project', statistics: '862', change: '-18%', },
      salesQueries: { statTitle: 'Sales Quries', icon: 'mdi-help-circle-outline', color: 'warning', subtitle: 'Last week', statistics: '15', change: '-18%', },
      series: [
          {name: 'series-1', data: [30, 40, 45, 50, 49, 60, 70, 91]}
      ],
      options: {
        chart: { id: 'vuechart-example' },
        xaxis: { categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998] },
        labels: ['Apple', 'Mango', 'Orange', 'Watermelon']
      },
      tab: null,
      dashboarditems: [ 'Summary', 'EngContracts', 'EngBusiness', 'HumResource', 'SalMarketing', 'OpsDevelopment', 'FinProcurement', ],
      text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      width: 2,
      radius: 10,
      padding: 8,
      lineCap: 'round',
      gradient: gradients[5],
      value: [0, 2, 5, 9, 5, 10, 3, 5, 0, 0, 1, 8, 2, 9, 0],
      gradientDirection: 'top',
      fill: false,
      type: 'trend',
      autoLineWidth: false,      
    })
    
    return { ...toRefs(state) } 
  }
} 
</script>

<template>
    <AdmPanel title="Dashboard Management">
        <v-container>
          <v-row>
              <v-col cols="10">
                <v-tabs>
                  <v-tab class="text-capitalize">SBG</v-tab>
                  <v-tab class="text-capitalize">Admin</v-tab>
                  <v-tab class="text-capitalize">SynVast</v-tab>
                  <v-tab class="text-capitalize">Sales</v-tab>
                  <v-tab class="text-capitalize">Marketing</v-tab>
                  <v-tab class="text-capitalize">Operations</v-tab>
                  <v-tab class="text-capitalize">Finance</v-tab>
                  <v-tab class="text-capitalize">Procurement</v-tab>
                  <v-tab-item>
                    <v-row>
                      <v-col cols="12" md="4" ><dashboard-congratulation-john></dashboard-congratulation-john></v-col>
                      <v-col cols="12" md="8"><dashboard-statistics-card></dashboard-statistics-card></v-col>
                      <v-col cols="12" sm="6" md="4"><dashboard-weekly-overview></dashboard-weekly-overview></v-col>
                      <v-col cols="12" md="4" sm="6"><dashboard-card-total-earning></dashboard-card-total-earning></v-col>
                      <v-col cols="12" md="4">
                        <v-row class="match-height">
                          <v-col cols="12" sm="6" >
                            <statistics-card-vertical :change="totalProfit.change" :color="totalProfit.color" :icon="totalProfit.icon" :statistics="totalProfit.statistics" :stat-title="totalProfit.statTitle" :subtitle="totalProfit.subtitle" ></statistics-card-vertical>
                          </v-col>
                          <v-col cols="12" sm="6" >
                            <statistics-card-vertical :change="totalSales.change" :color="totalSales.color" :icon="totalSales.icon" :statistics="totalSales.statistics" :stat-title="totalSales.statTitle" :subtitle="totalSales.subtitle" ></statistics-card-vertical>
                          </v-col>
                          <v-col cols="12" sm="6">
                            <statistics-card-vertical :change="newProject.change" :color="newProject.color" :icon="newProject.icon" :statistics="newProject.statistics" :stat-title="newProject.statTitle" :subtitle="newProject.subtitle" ></statistics-card-vertical>
                          </v-col>
                          <v-col cols="12" sm="6" >
                            <statistics-card-vertical :change="salesQueries.change" :color="salesQueries.color" :icon="salesQueries.icon" :statistics="salesQueries.statistics" :stat-title="salesQueries.statTitle" :subtitle="salesQueries.subtitle" ></statistics-card-vertical>
                          </v-col>
                        </v-row>
                      </v-col>
                      <v-col cols="12" md="4" ><dashboard-card-sales-by-countries></dashboard-card-sales-by-countries></v-col>
                      <v-col cols="12" md="8" ><dashboard-card-deposit-and-withdraw></dashboard-card-deposit-and-withdraw></v-col>
                      <v-col cols="12"><dashboard-datatable></dashboard-datatable></v-col>
                    </v-row>
                    <test-upload></test-upload>
                <test-locations></test-locations>
                <table-catalogues></table-catalogues>
                  </v-tab-item>
                  <v-tab-item>
                    <v-card>
                  <v-tabs>
                    <v-tab class="text-subtitle-2 text-capitalize">Recent Activity</v-tab>
                    <v-tab class="text-subtitle-2 text-capitalize"><v-icon dense>mdi-calendar-month-outline</v-icon>Events</v-tab>
                    <v-tab class="text-subtitle-2 text-capitalize"><v-icon dense>mdi-alert-octagon-outline</v-icon>Alerts</v-tab>
                    <v-tab class="text-subtitle-2 text-capitalize"><v-icon dense>mdi-bell-outline</v-icon>Notifications</v-tab>
                    <v-tab class="text-subtitle-2 text-capitalize"><v-icon dense>mdi-email-outline</v-icon>Messages</v-tab>
                    <v-tab class="text-subtitle-2 text-capitalize"><v-icon dense>mdi-account</v-icon>Account</v-tab>
                    <v-tab-item>
                      <v-card>
                        <v-list dense>
                          <v-list-item>
                            <v-list-item-content><v-list-item-title><inertia-link>Geontiry</inertia-link> created an account</v-list-item-title></v-list-item-content>
                            <v-list-item-action><v-list-item-action-text>12.14 PM</v-list-item-action-text></v-list-item-action>
                          </v-list-item>
                          <v-list-item><v-list-item-content><v-list-item-title><inertia-link>Geontiry</inertia-link> created an account</v-list-item-title></v-list-item-content></v-list-item>
                          <v-list-item><v-list-item-content><v-list-item-title><inertia-link>Geontiry</inertia-link> created an account</v-list-item-title></v-list-item-content></v-list-item>
                        </v-list>
                      </v-card>
                    </v-tab-item>
                  </v-tabs>
                </v-card>
                  </v-tab-item>
                  <v-tab-item>
                    <v-tabs>
                    <v-tab class="text-subtitle-2 text-capitalize">Catalogue</v-tab>
                    <v-tab class="text-subtitle-2 text-capitalize">Products</v-tab>
                    <v-tab class="text-subtitle-2 text-capitalize">Services</v-tab>
                    <v-tab class="text-subtitle-2 text-capitalize">Reviews</v-tab>
                    <v-tab-item>
                      <v-card>
                        <v-list dense>
                          <v-list-item>
                            <v-list-item-content><v-list-item-title><inertia-link>Geontiry</inertia-link> created an account</v-list-item-title></v-list-item-content>
                            <v-list-item-action><v-list-item-action-text>12.14 PM</v-list-item-action-text></v-list-item-action>
                          </v-list-item>
                          <v-list-item><v-list-item-content><v-list-item-title><inertia-link>Geontiry</inertia-link> created an account</v-list-item-title></v-list-item-content></v-list-item>
                          <v-list-item><v-list-item-content><v-list-item-title><inertia-link>Geontiry</inertia-link> created an account</v-list-item-title></v-list-item-content></v-list-item>
                        </v-list>
                      </v-card>
                    </v-tab-item>
                  </v-tabs>
                  </v-tab-item>
                  <v-tab-item>
                    <v-subheader>Sales Overview</v-subheader>
                    <dash-card-counter></dash-card-counter>
                    <dash-card-tracker></dash-card-tracker>
                    <dash-card-trend></dash-card-trend>
                    <v-tabs>
                    <v-tab class="text-subtitle-2 text-capitalize">Quotes</v-tab>
                    <v-tab-item>
                      <v-card>
                        <v-list dense>
                          <v-list-item>
                            <v-list-item-content><v-list-item-title><inertia-link>Geontiry</inertia-link> created an account</v-list-item-title></v-list-item-content>
                            <v-list-item-action><v-list-item-action-text>12.14 PM</v-list-item-action-text></v-list-item-action>
                          </v-list-item>
                          <v-list-item><v-list-item-content><v-list-item-title><inertia-link>Geontiry</inertia-link> created an account</v-list-item-title></v-list-item-content></v-list-item>
                          <v-list-item><v-list-item-content><v-list-item-title><inertia-link>Geontiry</inertia-link> created an account</v-list-item-title></v-list-item-content></v-list-item>
                        </v-list>
                      </v-card>
                    </v-tab-item>
                  </v-tabs>
                  </v-tab-item>
                  <v-tab-item>
                    <v-card>
                  <v-tabs>
                    <v-tab class="text-subtitle-2 text-capitalize">Social</v-tab>
                    <v-tab class="text-subtitle-2 text-capitalize"><v-icon dense>mdi-gmail</v-icon>Email</v-tab>
                    <v-tab class="text-subtitle-2 text-capitalize"><v-icon dense>mdi-facebook</v-icon>Facebook</v-tab>
                    <v-tab class="text-subtitle-2 text-capitalize"><v-icon dense>mdi-twitter</v-icon>Twitter</v-tab>
                    <v-tab class="text-subtitle-2 text-capitalize"><v-icon dense>mdi-instagram</v-icon>Instagram</v-tab>
                    <v-tab class="text-subtitle-2 text-capitalize"><v-icon dense>mdi-linkedin</v-icon>Linkedin</v-tab>
                    <v-tab class="text-subtitle-2 text-capitalize"><v-icon dense>mdi-youtube</v-icon>Youtube</v-tab>
                    <v-tab-item>
                      <v-card>
                        <v-list dense class="box">
                          <v-list-item  v-for="n in 6" :key="n">
                            <v-list-item-content><v-list-item-title><inertia-link>Geontiry</inertia-link> created an account</v-list-item-title></v-list-item-content>
                            <v-list-item-action><v-list-item-action-text>12.14 PM</v-list-item-action-text></v-list-item-action>
                          </v-list-item>
                        </v-list>
                      </v-card>
                    </v-tab-item>
                  </v-tabs>
                </v-card>
                <v-card><apex-chart type="donut" :series="series[0].data" :options="options"></apex-chart></v-card>
                  </v-tab-item>
                  <v-tab-item></v-tab-item>
                  <v-tab-item>
                    <v-card><apex-chart type="line" :series="series" :options="options"></apex-chart></v-card>
                    <v-card><apex-chart type="bar" :series="series" :options="options"></apex-chart></v-card>
                  </v-tab-item>
                  <v-tab-item></v-tab-item>
                </v-tabs>
              </v-col>
              <v-col cols="2">
                <v-card max-width="200" color="grey lighten-4">
                  <v-card-title>
                    <div class="caption grey--text text-capitalize">Sales Volume</div>
                    <div><v-icon>mdi-arrow-up</v-icon><span class="text-h5">125</span><small>BPM</small></div>
                  </v-card-title>
                  <v-sheet color="transparent">
                    <v-sparkline :value="value" :gradient="gradient" :smooth="radius || false" :padding="padding" :line-width="width" :stroke-linecap="lineCap"
                    :gradient-direction="gradientDirection" :fill="fill" :type="type" :auto-line-width="autoLineWidth" auto-draw></v-sparkline>
                  </v-sheet>
                </v-card>

              </v-col>
            </v-row>
        </v-container>
     </AdmPanel>
</template>

<style lang="css" scoped>
</style>