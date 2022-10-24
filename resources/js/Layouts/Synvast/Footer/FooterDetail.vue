<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { apiSynvast } from '@/Services/apis/synvast' 
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { }, 
  props: {},

  setup (props, ctx) {
    const {sites, categories, supports } = apiSynvast()

    //const a = ref(3)
    const about = ref('Synvast Electrical offers specialist, quality, original sales and supplies in electrical lights, switches, sockets, cables, panels, modules, tools, energy, electrical machines, appliances and accessories')
    const follows = ref([
      { social: 'facebook', link: 'https://www.facebook.com/SynvastEngineering'},
      { social: 'twitter', link: 'https://twitter.com/SynvastEng'},
      { social: 'linkedin', link: 'https://www.linkedin.com/company/synvast-engineering'},
      { social: 'instagram', link: 'https://www.instagram.com/synvast_engineering'},
      { social: 'youtube', link: 'https://www.youtube.com/channel/UC7nlEonliepK_v2OxSowkyA'},
    ])
    
    return { about, follows, sites, categories, supports } 
  }
} 
</script>

<template>
  <div>
    <v-footer color="#002C4D" class="white--text">
      <v-row dense no-gutters>
        <v-col cols="6">
          <v-row dense no-gutters>
            <v-col cols="5">
              <div class="text-subtitle-1 text-center">
                  <v-avatar size="28"><img src="https://pbs.twimg.com/profile_images/1414106143971061760/5VMM5knC_400x400.jpg" alt="John"></v-avatar>
                  About Us 
                </div>
                <div class="text-caption my-1 pr-4">{{ about }} <a href="">more</a></div>
                <div class="orange--text">Working Hours</div>
                <div class="text-caption">Online: <strong>Sat. 7PM  - Fri. 5PM</strong></div>
                <div class="text-caption">Office: <strong>Sun - Fri 8AM - 4PM</strong></div>
            </v-col>
            <v-col cols="4">
              <p class="text-subtitle-1 ma-1">Connect with Us</p>
              <v-btn x-small text plain color="grey" class="text-caption text-lowercase"><v-icon small color="orange darken-4">mdi-gmail</v-icon>info@synvast.co.ke</v-btn>
                <v-btn x-small text plain color="grey" class="text-caption text-lowercase"><v-icon small color="orange darken-4">mdi-phone</v-icon>0718017744</v-btn>
                <div class="orange--text">Follow Us</div>
                <v-btn small icon outlined class="mx-1 white--text" :href="connect.link" v-for="connect in follows" :key="connect">
                  <v-icon color="orange lighten-1" size="18">mdi-{{ connect.social }}</v-icon>
                </v-btn>
            </v-col>
            <v-col cols="3">
              <p class="text-subtitle-1 text-center ma-1">Electrical Products</p>
            <inertia-link class="d-block text-caption blue-grey--text lighten-2 font-weight-bold" href="product.href" v-for="product in categories" :key="product.name">
              <v-icon small class="mr-1">mdi-chevron-double-right</v-icon>E - {{ product.name }}
            </inertia-link>
            </v-col>
          </v-row>
        </v-col>
        <v-col cols="6">
          <v-row dense no-gutters>
            <v-col cols="4">
              <p class="text-subtitle-1 ma-1">Support Center</p>
              <inertia-link class="d-block text-caption text-capitalize blue-grey--text lighten-1 font-weight-bold" href="support.href" v-for="support in supports" :key="support.name">
                <v-icon small class="mr-1" color="blue-grey lighten-2">mdi-chevron-double-right</v-icon>
                {{ support.title }}
              </inertia-link>
            </v-col>            
            <v-col cols="8">
              <p class="text-subtitle-1 text-center ma-1">Partner Solutions</p>
            <v-row no-gutters>
              <v-col cols="4" v-for="solution in sites" :key="solution.name">
                <div class="text-caption orange--text"><strong>{{solution.name}}</strong></div>
                <inertia-link class="d-block text-caption blue-grey--text lighten-2 font-weight-bold" href="" v-for="partner in solution.sites" :key="partner.name">
                  <v-icon small class="mr-1">mdi-chevron-double-right</v-icon>{{partner.name}}
                </inertia-link>
              </v-col>
            </v-row>
            </v-col>
          </v-row>
        </v-col>
      </v-row>
      <div  class="grid grid-cols-12 gap-1 ">
        <div class="col-span-12 text-caption text-center">
          <strong class="orange--text">Synvast Electrical</strong> is a subsidiary of <strong class="orange--text">Synvast Engineering</strong> registered in Kenya
        </div>
        <div class="col-span-12 text-caption white--text text-center">
          <v-icon small color="orange">mdi-copyright</v-icon> 2019 - {{ new Date().getFullYear() }} —{{test}}  All Rights Reserved | Powered by <strong><a>GK Ontiri</a></strong>
        </div>
      </div>
    </v-footer>
  </div>
</template>

<style lang="scss" scoped>


</style>
