<template>
  <div>
      <h2 class="text-center text-h5">Our Customer Value</h2>
      <v-row class="" dense>
          <v-col cols="3" v-for="value in values" :key="value.name">
            <comp-listing header :title="value.name" icontitle="mdi-web" :lists="value.items" iconlist="mdi-check-circle-outline"></comp-listing>
          </v-col>
      </v-row>
  </div>
</template>

<script>
import CompListing from "@/Components/CompListing.vue";
export default {
  components: {
    CompListing,
  },
  data: ()=>{
      return {
        values: [
          { 
            name: 'One-time Payment', 
            icon: 'mdi-clock',  
            items: [
              'No extra hidden charge', '7-day money back guarantee', 'Cheapest domain names', 'Free domain name transfer'
            ]
          },
          { 
            name: 'Modern Design', 
            icon: 'mdi-clock',  
            items: [
              'Responsive layout', 'Latest frameworks', 'SEO Optimization', 'Customizable, clean code'
            ]
          },
          { 
            name: 'Reliable Extension', 
            icon: 'mdi-clock',  
            items: [
              'No extra hidden charge', '7-day money back guarantee', 'Cheapest domain names', 'Free domain name transfer'
            ]
          },
          { 
            name: 'Customer Support', 
            icon: 'mdi-clock',  
            items: [
              'Regular updates & bug fixes', 'Email and live contact',
            ]
          },
        ],
      }
  },
   methods: {}
};
</script>
<style scoped>
 
</style>