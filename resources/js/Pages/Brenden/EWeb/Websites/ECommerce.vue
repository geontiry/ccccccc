<template>
  <div>
    <app-container>
      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <v-card color="grey" class="mb-1 p-0">
        </v-card>

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
//import WebsitesCategory from "@/Pages/Brenden/Websites/WebsitesCategory.vue";

export default {
  components: {
    AppContainer,
  },
  data: () => ({
    }),
};
</script>
