<template>
  <div>
    <app-container>
      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <comp-heading v-bind="page" header1></comp-heading>

        <websites-category></websites-category>  
        <v-divider class="m-4"></v-divider>      
        <v-row>
          <v-col cols="3" sm="2">
            <websites-filter></websites-filter>
          </v-col>
          <v-col cols="9" sm="10">
            <websites-all></websites-all>            
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
import WebsitesCategory from "@/Pages/Brenden/EWeb/Websites/WebsitesCategory.vue";
import WebsitesFilter from "@/Pages/Brenden/EWeb/Websites/WebsitesFilter.vue";
import WebsitesAll from "@/Pages/Brenden/EWeb/Websites/WebsitesAll.vue";
import CompHeading from "@/Components/CompHeading.vue";

export default {
  components: {
    AppContainer,
    WebsitesCategory,
    WebsitesFilter,
    WebsitesAll,
    CompHeading,
  },
  mixins: [metainformation],
  data: () => ({
    meta: { title: 'Websites', description: '', keywords: '',  },
      page: {
        title: 'Ready-made Websites',
        description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas',
      }, 
    }),
};
</script>
