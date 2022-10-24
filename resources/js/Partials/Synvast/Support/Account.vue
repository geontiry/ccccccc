<script>
import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import CompBreadcrumbs from "@/Component/CompBreadcrumbs"
import CompHeading from "@/Component/CompHeading.vue"
import Contact from "@/Pages/Synvast/Electrical/Support/Contact.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { AppContainer, CompBreadcrumbs, CompHeading, Contact },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      breadcrumbs: [ 
        { text: 'Home', disabled: false, href: route('home'), },
        { text: 'Support Center', disabled: false, href: route('support'), },
        { text: 'Brenden Account', disabled: true, href: '', },
      ],
      page: {
        title: 'Brenden Account Support',
        description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas',
      },      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <comp-breadcrumbs :breadcrumbs="breadcrumbs" active></comp-breadcrumbs>
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
