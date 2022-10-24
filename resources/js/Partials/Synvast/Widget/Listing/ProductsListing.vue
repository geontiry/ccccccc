<script>
import Product from "@/Partials/Synvast/Widget/Product.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { Product },
  props: {
    products: {type: Array, required: true},
  },

  setup (props, ctx) {
    const state = reactive({  
      breadcrumbs: [
        { text: 'Home', disabled: false, href: '', },
        { text: 'Lights', disabled: true, href: '', },
      ],      
      search: "",
      sortBy: "name",
      sortAsc: true,
      sortSelected: 'Price',
      items: ['Price', 'Discount', 'Newest', 'Popularity',],
      sortDesc: false,
      page: 1,
      itemsPerPage: 24,
      itemsPerPageArray: [24, 48, 80],
      
    })

    const numberOfPages = computed(()=>Math.ceil(products.length / itemsPerPage))
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-data-iterator :items="products" :items-per-page.sync="itemsPerPage" :page="page" :search="search" :sort-by="sortBy.toLowerCase()" :sort-desc="sortDesc" hide-default-footer>
      <template v-slot:header>
            <v-toolbar color="grey lighten-1" class="mb-4">
              <v-list-item two-line class="pl-0">
                <v-list-item-content>
                  <v-list-item-title>Electrical Lights <span class="text-subtitle-2">(235 products)</span></v-list-item-title>
                  <v-list-item-subtitle><comp-breadcrumbs :breadcrumbs="breadcrumbs" active></comp-breadcrumbs></v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>
              <v-spacer></v-spacer>
              <v-select dense solo single-line hide-details :append-icon="sortAsc ? 'mdi-sort-ascending' : 'mdi-sort-descending'" :items="items" v-model="sortSelected" @click:append="sortAsc = !sortAsc"></v-select>
              <v-btn-toggle mandatory>
                <v-btn small :value="true"><v-icon>mdi-view-grid</v-icon></v-btn>
                <v-btn small :value="true"><v-icon>mdi-view-list</v-icon></v-btn>
              </v-btn-toggle>
            </v-toolbar>
          </template>
      <template v-slot:default="props">
            <v-row class="mb-3">
              <v-col v-for="product in props.items" :key="product.name" cols="12" sm="6" md="4" lg="3">
                <product dense color="orange darken-4" :product="product"></product>
              </v-col>
            </v-row>
            <v-divider></v-divider>
          </template>
          <template v-slot:footer>
            <v-row class="mt-2" align="center" justify="center">
              <span class="grey--text">Products per page</span>
              <v-menu offset-y>
                <template v-slot:activator="{ on, attrs }">
                  <v-btn dark text color="primary" class="ml-2" v-bind="attrs" v-on="on">{{ itemsPerPage }}<v-icon>mdi-chevron-down</v-icon></v-btn>
                </template>
                <v-list>
                  <v-list-item v-for="(number, index) in itemsPerPageArray" :key="index" @click="updateItemsPerPage(number)">
                    <v-list-item-title>{{ number }}</v-list-item-title>
                  </v-list-item>
                </v-list>
              </v-menu>
              <v-spacer></v-spacer>
              <v-pagination circle color="orange darken-1" :length="18" :total-visible="8" class="my-1" v-model="page"></v-pagination>
              <span class="mr-4 grey--text"> Page {{ page }} of {{ numberOfPages }}</span>
            </v-row>
          </template>

    </v-data-iterator>  
  </div>
</template>

<style scoped>
 
</style>