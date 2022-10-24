<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    title: {type: String, required: true},
    icon: {type: String, required: true},
    links: {type: Array, required: true},
  },

  setup (props, ctx) {
    //const a = ref(3)
        
    return { }
  }
} 
</script>

<template>
  <div>
    <v-menu bottom left offset-y transition="scale-transition" origin="center center">
      <template v-slot:activator="{ on: menu, attrs }">
        <v-tooltip bottom>
          <template v-slot:activator="{ on: tooltip }">
            <v-btn text small fab dark v-bind="attrs" v-on="{ ...tooltip, ...menu }"><v-icon>{{ icon }}</v-icon></v-btn>
          </template>
          <span>{{ title }}</span>
        </v-tooltip>
      </template>
      <v-list dense nav>
        <v-list-item class="my-n2" v-for="(item, index) in links" :key="index" :href="item.href">          
          <v-list-item-title><v-icon color="primary" dense>mdi-help-circle-outline</v-icon> {{ item.title }}</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>
  </div>
</template>

<style scoped>
</style>