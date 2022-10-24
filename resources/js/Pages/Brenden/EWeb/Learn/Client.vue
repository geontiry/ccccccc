<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <client-heading></client-heading>
        <client-courses></client-courses>
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
import ClientHeading from "@/Pages/Brenden/EWeb/Learn/Client/ClientHeading.vue";
import ClientCourses from "@/Pages/Brenden/EWeb/Learn/Client/ClientCourses.vue";


export default {
  components: {
    AppContainer,
    ClientHeading,
    ClientCourses,
  },
  data: () => ({
      
    }),
};
</script>
