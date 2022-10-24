<script>
//import AppContainer from '@/Pages/Admin/Panel.vue'
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({        
    })
    
    return { ...toRefs(state) } 
  }
} 
</script>  

<template>
  <div id="misc">
    <img class="misc-mask" height="226" :src="`/storage/assets/images/misc/misc-mask-${$vuetify.theme.dark ? 'dark' : 'light'}.png`"/>
    <v-img class="misc-tree" src="storage/assets/images/misc/tree-4.png"></v-img>
    <div class="page-title text-center px-5">
      <h2 class="text-2xl font-weight-semibold text--primary d-flex align-center justify-center">
        <span class="me-2">Page Not Found</span>
        <v-icon color="warning">mdi-alert</v-icon>
      </h2>
      <p class="text-sm">we couldn't find the page you are looking for</p>
      <div class="misc-character d-flex justify-center"><v-img max-width="700" src="/storage/assets/images/3d-characters/error.png"></v-img></div>
      <v-btn color="primary" class="mb-4">Back to home</v-btn>
    </div>
  </div>
</template>

<style lang="scss">
@import '@/materio/sass/preset/misc.scss';
</style>
