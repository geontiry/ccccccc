<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <comp-heading v-bind="page" header1></comp-heading>
        <apexchart width="500" type="bar" :options="chartOptions" :series="series"></apexchart>



 
      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>
      
       <!-- Page Slot Footer -->
      <template #footer></template>    

    </app-container>
  </div>
</template> 
         
    

<script>

import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
import CompHeading from "@/Components/CompHeading.vue";
import BlogPost from "@/Layouts/Brenden/BlogPost.vue";
import BlogCard from "@/Layouts/Brenden/BlogCard.vue";
import BlogCount from "@/Layouts/Brenden/BlogCount.vue";
import BlogPricing from "@/Layouts/Brenden/BlogPricing.vue";


export default {
  components: {
    AppContainer,   
    CompHeading,
    BlogPost, 
    BlogCard,
    BlogCount,
    BlogPricing,
  },
  data: () => ({
      page: {
        title: 'Web Design Services',
        description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas',
      }, 
      chartOptions: {
          chart: {
            id: 'vuechart-example'
          },
          xaxis: {
            categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998]
          }
        },
        series: [{
          name: 'series-1',
          data: [30, 40, 45, 50, 49, 60, 70, 91]
        }]

    }),
    methods: {
      
    },
};
</script>
