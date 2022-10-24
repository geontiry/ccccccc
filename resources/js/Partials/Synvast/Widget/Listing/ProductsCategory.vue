<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      categories: [
        {title:'Incandescent', img: '', href: route('websites.ecommerce')},
        {title:'Halogen',  img: '', href: route('websites.corporate')},
        {title:'Energy Saving', img: '', href: route('websites.corporate')},
        {title:'LED',  img: '', href: route('websites.institution')},
        {title:'Fluorescent',  img: '', href: route('websites.institution')},
        {title:'Accessories',  img: '', href: route('websites.institution')},
      ]      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-slide-group mandatory show-arrows class="mb-2">
      <v-slide-item v-slot="{ active, toggle }">
        <v-card hover max-width="140" max-height="50"  class="mx-1" active-class="purple white--text"  :input-value="active" @click="toggle">
          <v-img class="white--text align-end" height="50" src="https://cdn.vuetifyjs.com/images/cards/docks.jpg">
            <v-card-title class="mx-0 px-2 text-subtitle-2 font-weight-bold"><v-icon dense color="white">mdi-home</v-icon> Lights</v-card-title>
          </v-img>
        </v-card>
      </v-slide-item>
      <v-slide-item v-for="category in categories" v-bind:key="category.id" v-slot="{ active, toggle }">
        <v-card hover max-width="140" max-height="50"  class="mx-1" active-class="purple white--text"  :input-value="active" @click="toggle">
          <v-img class="white--text align-end" height="50" src="https://cdn.vuetifyjs.com/images/cards/docks.jpg">
            <v-card-title class="mx-0 px-2 text-subtitle-2 font-weight-bold"><v-icon dense color="white">mdi-chevron-double-right</v-icon> {{ category.title }}</v-card-title>
          </v-img>
        </v-card>
      </v-slide-item>
    </v-slide-group>
  </div>
</template>

<style scoped>
 
</style>