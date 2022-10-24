<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <server-heading></server-heading>
        <server-courses></server-courses>
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
import ServerHeading from "@/Pages/Brenden/EWeb/Learn/Server/ServerHeading.vue";
import ServerCourses from "@/Pages/Brenden/EWeb/Learn/Server/ServerCourses.vue";


export default {
  components: {
    AppContainer,
    ServerHeading,
    ServerCourses,
  },
  data: () => ({
      
    }),
};
</script>
