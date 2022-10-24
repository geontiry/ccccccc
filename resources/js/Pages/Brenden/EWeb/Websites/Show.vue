<template>
  <div>
    <app-container>
      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <show-heading></show-heading>
        <v-row>
          <v-col cols="12" sm="12" md="7">
            <show-carousel></show-carousel>
            <show-detail></show-detail>
          </v-col>
          <v-col cols="12" sm="12" md="5">
            <show-summary></show-summary>
          </v-col>
        </v-row>
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
import BreadCrumbs from "@/Pages/Brenden/EWeb/Websites/BreadCrumbs.vue";
import ShowHeading from "@/Pages/Brenden/EWeb/Websites/Show/ShowHeading.vue";
import ShowCarousel from "@/Pages/Brenden/EWeb/Websites/Show/ShowCarousel.vue";
import ShowSummary from "@/Pages/Brenden/EWeb/Websites/Show/ShowSummary.vue";
import ShowDetail from "@/Pages/Brenden/EWeb/Websites/Show/ShowDetail.vue";

export default {
  components: {
    AppContainer,
    BreadCrumbs, 
    ShowHeading, 
    ShowCarousel,
    ShowSummary,
    ShowDetail,
  },
  data: () => ({
      
    }),
};
</script>
