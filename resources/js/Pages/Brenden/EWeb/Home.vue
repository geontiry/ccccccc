<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <home-hero></home-hero>
         <home-clients></home-clients>
        <home-value></home-value>
        <home-services></home-services>
        <home-websites></home-websites>
        <home-design></home-design>
        <home-hosting></home-hosting>
        <home-cta></home-cta>
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
import HomeHero from "@/Pages/Brenden/EWeb/Home/HomeHero.vue";
import HomeClients from "@/Pages/Brenden/EWeb/Home/HomeClients.vue";
import HomeValue from "@/Pages/Brenden/EWeb/Home/HomeValue.vue";
import HomeWebsites from "@/Pages/Brenden/EWeb/Home/HomeWebsites.vue";
import HomeServices from "@/Pages/Brenden/EWeb//Home/HomeServices.vue";
import HomeDesign from "@/Pages/Brenden/EWeb/Home/HomeDesign.vue";
import HomeHosting from "@/Pages/Brenden/EWeb/Home/HomeHosting.vue";
import HomeCta from "@/Pages/Brenden/EWeb/Home/HomeCta.vue";

export default {
  components: {
    AppContainer,
    HomeHero,
    HomeClients,
    HomeValue,
    HomeWebsites,
    HomeServices,
    HomeDesign,
    HomeHosting,
    HomeCta,
  },
  mixins: [metainformation],
  data: () => ({
      meta: { title: 'Home', description: '', keywords: '',  },
  }),
};
</script>
