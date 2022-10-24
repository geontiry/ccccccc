<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    //const a = ref(3)
    
    return { } 
  }
} 
</script>

<template>
  <div class="d-flex">
    <v-list-item two-line class="brand" :class="$vuetify.breakpoint.smAndUp ? 'ma-n3': ''">
      <v-list-item-avatar tile class="rounded mr-1" :size="$vuetify.breakpoint.xsOnly ? 34 : 36"><inertia-link :href="route('electrical.home')"><img src="https://pbs.twimg.com/profile_images/1414106143971061760/5VMM5knC_400x400.jpg"></inertia-link></v-list-item-avatar>
      <v-list-item-content>
        <v-list-item-title :class="$vuetify.breakpoint.xsOnly ? 'text-subtitle-1' : 'text-h6'" href=""><inertia-link class="white--text"  :href="route('electrical.home')"><strong>Synvast Electrical</strong></inertia-link></v-list-item-title>
        <v-list-item-subtitle class="name text-caption">Original <v-icon color="orange darken-4" size="7">mdi-checkbox-blank-circle</v-icon> Quality <v-icon color="orange darken-4" size="7">mdi-checkbox-blank-circle</v-icon> Best Price</v-list-item-subtitle>
      </v-list-item-content>
    </v-list-item> 
  </div>
</template>

<style scoped>
.name{
  width: 3em;
}
</style>