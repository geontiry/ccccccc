<template>
  <div>
    <v-row>
      <v-col cols="auto" v-for="category in categories" v-bind:key="category.id">
        <v-card hover class="">
          <v-img class="white--text align-end" height="60" src="https://cdn.vuetifyjs.com/images/cards/docks.jpg">
            <v-card-title class="text-body-1 font-weight-bold">{{ category.title }} <br>Websites</v-card-title>
          </v-img>
        </v-card>
      </v-col>
    </v-row>
    
  </div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
  components: {},
  props: {},
  data: ()=>{
      return {
        categories: [
          {title:'ECommerce Websites', img: '', href: route('websites.ecommerce')},
          {title:'Corporate Websites',  img: '', href: route('websites.corporate')},
          {title:'Agency Websites', img: '', href: route('websites.corporate')},
          {title:'Institution Websites',  img: '', href: route('websites.institution')},
          {title:'Religious Websites',  img: '', href: route('websites.institution')},
          {title:'Multimedia Websites',  img: '', href: route('websites.institution')},
          {title:'Social Websites',  img: '', href: route('websites.institution')},
          {title:'Dashboard Websites',  img: '',  href: route('websites.personal')},
          {title:'Personal Websites',  img: '',  href: route('websites.personal')},
        ]
      }
  },
  computed: {},
  watch: {},
  methods: {}
};
</script>
<style scoped>
 
</style>