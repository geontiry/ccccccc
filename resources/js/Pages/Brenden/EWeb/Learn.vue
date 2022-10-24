<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <comp-heading v-bind="page" header1></comp-heading>
        <learn-courses></learn-courses>        
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
import LearnCourses from "@/Pages/Brenden/EWeb/Learn/LearnCourses.vue";
import CompHeading from "@/Components/CompHeading.vue";

export default {

  components: {
    AppContainer,
    LearnCourses,  
    CompHeading, 
  },
  mixins: [metainformation],
  data: () => ({
    meta: { title: 'Learning', description: '', keywords: '',  },
    breadcrumbs: [
      { text: 'Home', disabled: false, href: route('eweb.home'), },
      { text: 'Web Learning', disabled: true, href: '', },
    ],
      page: {
        title: 'Web Learning Services',
        description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas',
      },      
    }),
};
</script>
