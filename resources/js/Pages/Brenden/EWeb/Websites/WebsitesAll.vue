<template>
  <div>
    <v-data-iterator :items="websites" :items-per-page.sync="itemsPerPage" :page="page" :search="search" :sort-by="sortBy.toLowerCase()" :sort-desc="sortDesc" hide-default-footer>
      <template v-slot:header>
            <v-toolbar color="blue darken-3" class="mb-1">
              <v-text-field v-model="search" dense clearable flat solo-inverted hide-details prepend-inner-icon="mdi-magnify" label="Search"></v-text-field>
              <template v-if="$vuetify.breakpoint.mdAndUp">
                <v-spacer></v-spacer>
                <v-btn-toggle v-model="sortDesc" mandatory>
                  <v-btn small depressed color="blue" :value="false"><v-icon>mdi-arrow-up</v-icon></v-btn>
                  <v-btn small depressed color="blue" :value="true"><v-icon>mdi-arrow-down</v-icon></v-btn>
                </v-btn-toggle>
              </template>
            </v-toolbar>
          </template>
      <template v-slot:default="props">
            <v-row>
              <v-col v-for="item in props.items" :key="item.name" cols="12" sm="6" md="4" lg="4" xl="3">
                <v-card hover class="">
                  <v-img class="white--text align-end grey lighten-2" height="150" :src="item.sorce" :aspect-ratio="1" :lazy-src="item.sorce">
                  <template v-slot:placeholder>
                    <v-row class="fill-height ma-0" align="center" justify="center"><v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular></v-row>
                  </template>  
                  <v-speed-dial v-model="fab" direction="right" transition open-on-hover>
                        <template v-slot:activator>
                          <v-btn text fab small v-model="fab" color="primary"><v-icon v-if="fab" dense>mdi-close</v-icon><v-icon v-else dense>mdi-share-variant</v-icon></v-btn>
                        </template>
                        <v-btn fab dark small color="green" ><v-icon>mdi-pencil</v-icon></v-btn>
                        <v-btn fab dark small color="indigo"><v-icon>mdi-plus</v-icon></v-btn>
                        <v-btn fab dark small color="red"><v-icon>mdi-delete</v-icon></v-btn>
                      </v-speed-dial>  
                      <v-btn small fab text color="primary"><v-icon dense>mdi-heart-outline</v-icon></v-btn>              
                      <v-btn small fab text color="primary"><v-icon dense>mdi-compare</v-icon></v-btn>              
                      <v-btn small fab text color="primary"><v-icon dense>mdi-chat-plus-outline</v-icon></v-btn>              
                  </v-img>
                  <v-list-item three-line>
                      <v-list-item-content>
                        <v-list-item-title class="text-subtitle-2">{{ item.title }}</v-list-item-title>
                        <v-list-item-subtitle class="text-caption">Small plates, salads & sandwiches - an intimate setting with 12 indoor seats plus patio seating.</v-list-item-subtitle>
                      </v-list-item-content>
                    </v-list-item>
                  <v-card-text>
                    <v-row class="mb-2">
                      <div class="text-caption ml-4"><v-icon dense>mdi-download</v-icon><em>125</em> Downloads</div>
                    </v-row>
                    <v-row align="center" class="ml-1">
                      <v-rating value="4.5" color="amber" dense half-increments readonly size="14"></v-rating>
                      <div class="grey--text ml-1">4.5 (413 Reviews)</div>                      
                    </v-row>
                    <div align="right" class="my-1 text-subtitle-2">KSh. <strong class="text-h6">2330</strong></div>                    
                  </v-card-text>
                    <v-card-actions> 
                      <v-btn small fab absolute top left text color="white" class="mt-10 ml-n4"><v-icon dense>mdi-heart-outline</v-icon></v-btn>   
                        <v-btn small text color="primary"><v-icon>mdi-television-play</v-icon> Demo</v-btn>
                        <v-btn small color="primary"><v-icon dense>mdi-file-plus-outline</v-icon> Quote</v-btn>
                        <v-btn small color="primary"><v-icon dense>mdi-cart-plus</v-icon> Buy</v-btn>
                    </v-card-actions>
                  </v-card>
              </v-col>
            </v-row>
          </template>
          <template v-slot:footer>
            <v-row class="mt-2" align="center" justify="center">
              <span class="grey--text">Items per page</span>
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
              <span class="mr-4 grey--text"> Page {{ page }} of {{ numberOfPages }}</span>
              <v-btn fab text small color="blue darken-3" class="mr-1" @click="formerPage" ><v-icon dense>mdi-chevron-left</v-icon></v-btn>
              <v-btn fab text small color="blue darken-3" class="ml-1" @click="nextPage" ><v-icon dense>mdi-chevron-right</v-icon></v-btn>
            </v-row>
          </template>

    </v-data-iterator>  
  </div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
  components: {},
  props: {},
  data: ()=>{
      return {
        search: "",
        sortBy: "name",
        sortDesc: false,
        page: 1,
        itemsPerPage: 6,
        itemsPerPageArray: [6, 12, 24],
        websites: [
            { cate: 'Technical', title: 'Top 10 Australian beaches', date: '2019-10-25', name: 'Whitehaven Beach', place: 'Whitsunday Island, Whitsunday Islands', sorce: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg'},
            { cate: 'Sports', title: 'Top 10 Australian beaches', date: '2019-11-5', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/house.jpg'},
            { cate: 'Music', title: 'Top 10 Australian beaches', date: '2020-01-7', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/road.jpg'},
            { cate: 'Creative', title: 'Top 10 Australian beaches', date: '2019-11-3', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg'},
            { cate: 'Sports', title: 'Top 10 Australian beaches', date: '2019-10-20', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/house.jpg'},
            { cate: 'Music', title: 'Top 10 Australian beaches', date: '2019-11-5', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/road.jpg'},
            { cate: 'Adventure', title: 'Top 10 Australian beaches', date: '2019-12-14', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg'},
            { cate: 'Sports', title: 'Top 10 Australian beaches', date: '2020-03-12', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/house.jpg'},
            { cate: 'Music', title: 'Top 10 Australian beaches', date: '2019-11-9', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/road.jpg'},
            { cate: 'Adventure', title: 'Top 10 Australian beaches', date: '2019-10-26', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg'},
            { cate: 'Sports', title: 'Top 10 Australian beaches', date: '2019-09-21', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/house.jpg'},
            { cate: 'Music', title: 'Top 10 Australian beaches', date: '2019-08-15', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/road.jpg'},
            { cate: 'Creative', title: 'Top 10 Australian beaches', date: '2019-11-11', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg'},
            { cate: 'Sports', title: 'Top 10 Australian beaches', date: '2019-11-17', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/house.jpg'},
            { cate: 'Music', title: 'Top 10 Australian beaches', date: '2019-12-04', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/road.jpg'},
            { cate: 'Creative', title: 'Top 10 Australian beaches', date: '2020-05-05', name: 'Whitehaven Beach', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg'},
        ],
      }
  },
  computed: {
    numberOfPages() {
      return Math.ceil(this.websites.length / this.itemsPerPage);
    },
  },
   watch: {},
   methods: {
     nextPage() {
       if (this.page + 1 <= this.numberOfPages) this.page += 1;
       },
       formerPage() {
         if (this.page - 1 >= 1) this.page -= 1;
         },
         updateItemsPerPage(number) {
           this.itemsPerPage = number;
        },
  },
};
</script>
<style scoped>
 
</style>