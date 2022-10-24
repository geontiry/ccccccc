<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {
    dialograte: false,
    rated: 0,
    loading: false,
  },

  setup (props, ctx) {
    const state = reactive({  
      
    })

    const rate = ()=>{ loading = true, setTimeout(() => (loading = false), 2000)}
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-tooltip bottom>
    <template v-slot:activator="{ on, attrs }">
      <v-btn small outlined icon><v-icon small color="#98a3aa" v-bind="attrs" v-on="on" @click.stop="dialograte = true">far fa-thumbs-up</v-icon></v-btn> 
    </template>
    <span>Review and Rate</span>
  </v-tooltip>
  <v-dialog v-model="dialograte" width="400">
    <v-card :loading="loading" class="elevation-16 mx-auto">
      <v-card-title class="headline">
        Rate Our Framework <v-spacer></v-spacer>
        <v-btn class="mx-0" icon @click="dialograte = false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
      </v-card-title>
      <v-card-text>If you enjoy using Vuetify, please take a few seconds to rate your experience with the framework. It really helps!</v-card-text>
      <v-divider></v-divider>
      <v-card-actions class="pa-4">Rate this album<v-spacer></v-spacer>
        <span class="grey--text text--lighten-2 text-subtitle-1 font-weight-bold mr-2">({{ rated }})</span>
        <v-rating background-color="grey" color="primary" dense hover size="24"  v-model="rated"></v-rating>
      </v-card-actions>
      <v-card-actions class="justify-space-between">
        <v-btn small text color="primary">No Thanks</v-btn>
        <v-btn small color="primary" @click="rate">Rate Now</v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog> 
  </div>
</template>

<style lang="scss" scoped>

</style>