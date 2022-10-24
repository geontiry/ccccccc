<template>
  <div>
    <v-card>
    <v-card-title class="align-start">
      <span>Weekly Overview</span>
      <v-spacer></v-spacer>
      <v-btn icon small class="mt-n2 me-n3"><v-icon size="22">mdi-dots-vertical</v-icon></v-btn>
    </v-card-title>
    <v-card-text>
      <!-- Chart -->
      <apexchart type="bar" height="210" :options="chartOptions" :series="chartData"></apexchart>
      <div class="d-flex align-center">
        <h3 class="text-2xl font-weight-semibold me-4">45%</h3>
        <span>Your sales perfomance in 45% 🤩 better compare to last month</span>
      </div>
      <v-btn block color="primary" class="mt-6" outlined>Details</v-btn>
    </v-card-text>
  </v-card>
   
  </div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
    components: {},
    props: {
      //rating: { type: Object, required: true},
      
  },
  data: function () {
    return {
      chartOptions: {
        chart: { toolbar: { show: false, }, offsetX: -15, },
        xaxis: { categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],  axisBorder: { show: false, },  axisTicks: { show: false, }, tickPlacement: 'on', labels: { show: false, style: { fontSize: '12px', }, }, },
        yaxis: { show: true, tickAmount: 4, labels: { offsetY: 3, formatter: value => `$${value}`, }, },
        colors: [ '#f5f5f5', '#f5f5f5', '#f5f5f5', '#f5f5f5', 'purple', '#f5f5f5', '#f5f5f5', ],
        plotOptions: { bar: { columnWidth: '40%', distributed: true, borderRadius: 8, startingShape: 'rounded', endingShape: 'rounded', }, },
        dataLabels: { enabled: false, },
        legend: { show: false, },        
        stroke: { width: [2, 2], },
        grid: { strokeDashArray: 12, padding: { right: 0, }, },
      },
      chartData: [
        { data: [40, 60, 50, 60, 75, 60, 50, 65] }
      ],
    }
  },
  computed: {},
  watch: {},
  methods: {}
};
</script>

<style lang="scss" scoped>

</style>