<template>
  <div>
    <v-card-text>
      <p class="text-h5 my-1 pa-0"><v-icon>mdi-cart</v-icon>Cart Summary</p>
      <p class="text-h6 ma-0 py-0">Subtotals {4}</p>
      <v-row no-gutters class="ma-0 pt-0 pb-1">
        <v-col cols= "9">
          <p class="text-subtitle-2 ma-0 pa-0 text-truncate">Cloud Hosting - Gold Cloud Plan with unlimited features</p>
          <p class="text-caption my-n1 pa-0"><v-icon x-small>mdi-check</v-icon> 2 Addons</p>
        </v-col>
        <v-col cols="3" class="text-center"><strong>Ksh. 4530</strong></v-col>
      </v-row>
      <v-row no-gutters class="ma-0 pa-0">
        <v-col cols= "9" class="text-subtitle-2 ma-0 pa-0">Cloud Hosting - Gold Cloud Plan <span class="text-caption">(with 2 addons)</span></v-col>
        <v-col cols="3" class="text-center ma-0 pa-0"><strong>Ksh. 1530</strong></v-col>
      </v-row>
      <v-row no-gutters class="ma-0 pa-0">
        <v-col cols= "9" class="text-subtitle-2 ma-0 pt-0 pb-1">Cloud Hosting - Gold Cloud Plan</v-col>
        <v-col cols="3" class="text-center"><strong>Ksh. 2330</strong></v-col>
      </v-row>
      <v-row no-gutters class="ma-0 pa-0">
        <v-col cols= "9" class="text-subtitle-2 ma-0 pt-0 pb-1">Set-up Fees</v-col>
        <v-col cols="3" class="text-center"><strong>Ksh. 990</strong></v-col>
      </v-row>  
      <v-divider></v-divider>
      <p class="text-h6 ma-0 py-0">Total Recurring {3}</p>
      <v-row no-gutters>
        <v-col cols="auto" class="m-auto"><comp-summary-stat name="Monthly" value="Ksh. 1260"></comp-summary-stat></v-col>
        <v-col cols="auto" class="m-auto"><comp-summary-stat name="Quarterly" value="Ksh. 1260"></comp-summary-stat></v-col>
        <v-col cols="auto" class="m-auto"><comp-summary-stat name="Annually" value="Ksh. 1260"></comp-summary-stat></v-col>
      </v-row>
      <v-divider></v-divider>
      <p class="text-h6 ma-0 py-0">Total due today</p>
      <p class="text-caption ma-0 pa-0"><v-icon small>mdi-information</v-icon> Cost inclusive of VAT</p>
      <p class="text-caption ma-0 pa-0"><v-icon small>mdi-help-circle</v-icon> Have questions? <a href="#">Contact us for assistance</a>.</p>
      <p class="text-subtitle-2 primary--text ma-4">KSh. <b class="text-h3 font-weight-black">11, 254</b></p>
    </v-card-text>
  </div>
</template>

<script>
import CompSummaryStat from "@/Components/CompSummaryStat.vue";
export default {
  components: {
    CompSummaryStat,
  },
  props: {},
  data: () => {
    return {
      desserts: [
        {
          name: "Frozen Yogurt",
          calories: 159,
        },
        {
          name: "Ice cream sandwich",
          calories: 237,
        },
        {
          name: "Eclair",
          calories: 262,
        },
        {
          name: "Cupcake",
          calories: 305,
        },
        {
          name: "Gingerbread",
          calories: 356,
        },
        {
          name: "Jelly bean",
          calories: 375,
        },
        {
          name: "Lollipop",
          calories: 392,
        },
        {
          name: "Honeycomb",
          calories: 408,
        },
        {
          name: "Donut",
          calories: 452,
        },
        {
          name: "KitKat",
          calories: 518,
        },
      ],
    };
  },
  watch: {},
  methods: {},
};
</script>
<style scoped>
</style>