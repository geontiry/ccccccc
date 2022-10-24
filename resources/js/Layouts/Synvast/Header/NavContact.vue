<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    drawer: { type: String, required: false}
  },

  setup (props, ctx) {
    const socialMedia = ref([
      { name: 'facebook', link: 'https://www.facebook.com/SynvastEngineering'},
      { name: 'twitter', link: 'https://twitter.com/SynvastEng'},
      { name: 'linkedin', link: 'https://www.linkedin.com/company/synvast-engineering'},
      { name: 'instagram', link: 'https://www.instagram.com/synvast_engineering'},
      { name: 'youtube', link: 'https://www.youtube.com/channel/UC7nlEonliepK_v2OxSowkyA'},
    ])
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div v-if="drawer">
      <v-row dense>
        <v-col cols="2" class="d-flex flex-column justify-space-around">
          <v-btn small icon :href="media.link" v-for="media in socialMedia" :key="media.name"><v-icon small>mdi-{{ media.name}}</v-icon></v-btn>
        </v-col>
        <v-divider vertical></v-divider>
        <v-col cols="10">
          <v-btn text class="text-caption text-capitalize" color="teal lighten-4"><v-icon small>mdi-map-marker</v-icon>Nakuru, Bungoma</v-btn>
          <v-btn text class="text-caption text-capitalize" color="teal lighten-4"><v-icon small>mdi-phone-message</v-icon>0718017744</v-btn>
          <v-btn text class="text-caption text-lowercase" color="teal lighten-4"><v-icon small>mdi-gmail</v-icon>info@synvast.co.ke</v-btn>
        </v-col>
      </v-row>
    </div>
    
    <div class="d-sm-flex justify-center" v-else>
      <v-btn text class="text-caption text-capitalize" color="teal lighten-4"><v-icon small>mdi-map-marker</v-icon>Nakuru, Bungoma</v-btn>
      <v-btn text class="text-caption text-capitalize" color="teal lighten-4"><v-icon small>mdi-phone-message</v-icon>0718017744</v-btn>
      <v-btn text class="text-caption text-lowercase" color="teal lighten-4"><v-icon small>mdi-gmail</v-icon>info@synvast.co.ke</v-btn>
      <v-spacer></v-spacer>
      <v-btn small icon :href="media.link" v-for="media in socialMedia" :key="media.name"><v-icon small>mdi-{{ media.name}}</v-icon></v-btn>
    </div>
  </div>
</template>

<style scoped>
</style>