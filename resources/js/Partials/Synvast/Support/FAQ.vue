<script>
import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
import CompBreadcrumbs from "@/Component/CompBreadcrumbs";
import CompHeading from "@/Component/CompHeading.vue";
import Contact from "@/Pages/Synvast/Electrical/Support/Contact.vue";
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { AppContainer, CompBreadcrumbs, CompHeading, Contact, },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      breadcrumbs: [ 
        { text: 'Home', disabled: false, href: route('home'), },
        { text: 'Support Center', disabled: false, href: route('support'), },
        { text: 'FAQ', disabled: true, href: '', },
      ],
      page: {
        title: 'Frequently Asked Questions',
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
            <v-expansion-panels focusable>
              <v-expansion-panel v-for="(item,i) in 5" :key="i">
                <v-expansion-panel-header class="ma-0">
                  Item
                  <template v-slot:actions>
                    <v-icon color="primary">$expand</v-icon>
                  </template>
                </v-expansion-panel-header>
                <v-expansion-panel-content>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </v-expansion-panel-content>
              </v-expansion-panel>
            </v-expansion-panels>
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
