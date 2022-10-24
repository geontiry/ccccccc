<script>
//import AppContainer from '@/Pages/Admin/Panel.vue'
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({        
    })
    
    return { ...toRefs(state), } 
  }
} 
</script> 

<template>
  <v-fade-transition mode="out-in">
    <v-icon :key="$vuetify.theme.dark" @click="$vuetify.theme.dark = !$vuetify.theme.dark">{{ $vuetify.theme.dark ? "mdi-weather-sunny" : "mdi-weather-night" }}</v-icon>
  </v-fade-transition>
</template>

<style>
</style>
