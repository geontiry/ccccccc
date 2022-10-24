<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <comp-heading v-bind="page" header1></comp-heading>
        <p>Session: {{ sessions }}</p>
        <p>Page: {{ Object.keys($page.props)  }}</p>
        
        <v-card>
          <v-card-title class="indigo white--text headline">User Directory</v-card-title>
          <v-row justify="space-between">
            <v-col cols="3">
              <v-sheet class="pa-4 primary lighten-2">
                <v-text-field v-model="search" label="Search ..." dark flat dense solo-inverted hide-details clearable clear-icon="mdi-close-circle-outline"></v-text-field>
                <v-checkbox v-model="caseSensitive" dark hide-details label="Case sensitive search"></v-checkbox>
              </v-sheet>
              <v-treeview dense rounded activatable hoverable open-on-click transition :active="active"
                  v-model="tree" :open="initiallyOpen" :items="items" item-key="name" :search="search" :filter="filter" class="text-subtitle-2">
                <template v-slot:prepend="{ item, open }">
                  <v-icon v-if="!item.file">{{ open ? 'mdi-folder-open' : 'mdi-folder' }}</v-icon>
                  <v-icon v-else>{{ files[item.file] }}</v-icon>
                </template>
                <!--<template v-slot:prepend="{ item }">
                  <v-icon v-if="!item.children">mdi-account</v-icon>
                </template>-->
              </v-treeview>
            </v-col>
            <v-divider vertical></v-divider>
            <v-col>
              <v-scroll-y-transition mode="out-in">
                <div v-if="selected" class="title grey--text text--lighten-1 font-weight-light" style="align-self: center;">Select a User</div>
                <v-card v-else :key="selected" class="pt-6 mx-auto" flat max-width="400">
                  <v-card-text>
                    <v-avatar size="88"><v-img src="https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo" class="mb-6"></v-img></v-avatar>
                    <h3 class="headline mb-2">GK Ontiri</h3>
                    <div class="blue--text mb-2">geontiry@gmail.com</div>
                    <div class="blue--text subheading font-weight-bold">Geontiry</div>
                  </v-card-text>
                <v-divider></v-divider>
                <v-row class="text-left" tag="v-card-text">
                  <v-col class="text-right mr-4 mb-2" tag="strong" cols="5">Company:</v-col>
                  <v-col>Brenden Tech</v-col>
                  <v-col class="text-right mr-4 mb-2" tag="strong" cols="5">Website:</v-col>
                  <v-col><a href="" target="_blank">www.brenden.com</a></v-col>
                  <v-col class="text-right mr-4 mb-2" tag="strong" cols="5">Phone:</v-col>
                  <v-col>0716285824</v-col>
                </v-row>
              </v-card>
            </v-scroll-y-transition>
          </v-col>
        </v-row>
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
import CompHeading from "@/Components/CompHeading.vue";


export default {
  components: {
    AppContainer,   
    CompHeading,
   
  },
  data: () => ({
      page: {
        title: 'Web Design Services',
        description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas',
      }, 
      active: [],
      users: [],
      open: [1, 2],
      search: null,
      caseSensitive: false,
      initiallyOpen: ['public'],
      files: {
        html: 'mdi-language-html5',
        js: 'mdi-nodejs',
        json: 'mdi-code-json',
        md: 'mdi-language-markdown',
        pdf: 'mdi-file-pdf',
        png: 'mdi-file-image',
        txt: 'mdi-file-document-outline',
        xls: 'mdi-file-excel',
      },
      tree: [],
      items: [
        {
          name: '.git',
        },
        {
          name: 'node_modules',
        },
        {
          name: 'public',
          children: [
            {
              name: 'static',
              children: [{
                name: 'logo.png',
                file: 'png',
              }],
            },
            {
              name: 'favicon.ico',
              file: 'png',
            },
            {
              name: 'index.html',
              file: 'html',
            },
          ],
        },
        {
          name: '.gitignore',
          file: 'txt',
        },
        {
          name: 'babel.config.js',
          file: 'js',
        },
        {
          name: 'package.json',
          file: 'json',
        },
        {
          name: 'README.md',
          file: 'md',
        },
        {
          name: 'vue.config.js',
          file: 'js',
        },
        {
          name: 'yarn.lock',
          file: 'txt',
        },
      ],
    }),
    computed: {
      filter () {
        return this.caseSensitive
          ? (item, search, textKey) => item[textKey].indexOf(search) > -1
          : undefined
      },
    },
    methods: {
      
    },
};
</script>
