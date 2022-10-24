<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      
    })
    //snackbars: state => state.vuetify.snackbars,
    //test(){this.$store.dispatch('setSnackbar', {color: 'orange', text: ' hellohellohellohellohellohellohellohellov'})}
    
    return { } 
  }
} 
</script>

<template>
<div>
    <v-btn dark @click="test()">Open Snackbar</v-btn>
    <v-snackbar right rounded="pill"
      v-model="snackbar.showing"
      :timeout="snackbar.timeout"
      :color="snackbar.color"
      :style="`bottom: ${(index * 70) + 20}px`"
      v-for="(snackbar, index) in snackbars.filter(s => s.showing)"
      :key="snackbar.text + Math.random()">
            {{snackbar.text}}
            <template v-slot:action="{ attrs }">
                <v-btn icon color="pink" v-bind="attrs" @click="snackbar.showing = false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
            </template>
            <v-progress-linear absolute bottom value="20"/>
    </v-snackbar>
</div>
</template>

<style lang="scss" scoped>

</style>
