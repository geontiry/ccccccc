<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
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
    <template v-for="level1 in links">
    <v-list-item href="route(level1.href)" v-if="!level1.groups"  :key="level1.name"><v-icon>{{level1.icon}}</v-icon><v-list-item-title>{{level1.name}}</v-list-item-title></v-list-item>
    <v-list-group dense  :value="level1.active" v-else  :key="level1.name">
         <template v-slot:activator><v-list-item-title><v-icon dense>{{level1.icon}}</v-icon>{{level1.name}}</v-list-item-title></template>
         <template v-for="level2 in level1.groups">
             <v-list-item href="route(level2.href)" v-if="!level2.groups" :key="level2.name"><v-icon>{{level2.icon}}</v-icon><v-list-item-title>{{level2.name}}</v-list-item-title></v-list-item>
             <v-list-group sub-group :value="level2.active" v-else :key="level2.name">
                <template v-slot:activator><v-list-item-content><v-list-item-title class="text-caption">{{level2.name}}</v-list-item-title></v-list-item-content></template>
                <v-list-item href="route(level3.href)" class="text-caption my-0" v-for="level3 in level2.groups" :key="level3.name"><v-icon>{{level3.icon}}</v-icon small><v-list-item-title>{{level3.name}}</v-list-item-title></v-list-item>
            </v-list-group>
         </template>
    </v-list-group>
    </template>
</div>
</template>

<style scoped>

</style>
