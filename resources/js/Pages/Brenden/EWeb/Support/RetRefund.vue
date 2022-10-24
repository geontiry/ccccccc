<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <v-row>
          <v-col cols="9">
            <comp-heading v-bind="page" header1></comp-heading>
          </v-col>
          <v-col cols="3">
            <contact></contact>
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
import CompHeading from "@/Components/CompHeading.vue";
import Contact from "@/Pages/Brenden/EWeb/Support/Contact.vue";
export default {
  components: {
    AppContainer,
    CompHeading,
    Contact,
  },
  data: () => ({
      page: {
        title: 'Return & Refund Policy',
        description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas',
      },
    }),
};
</script>
