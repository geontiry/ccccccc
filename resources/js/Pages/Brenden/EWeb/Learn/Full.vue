<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <full-heading></full-heading>
        <full-courses></full-courses>
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
import FullHeading from "@/Pages/Brenden/EWeb/Learn/Full/FullHeading.vue";
import FullCourses from "@/Pages/Brenden/EWeb/Learn/Full/FullCourses.vue";


export default {
  components: {
    AppContainer,
    FullHeading,
    FullCourses,
  },
  data: () => ({
      
    }),
};
</script>
