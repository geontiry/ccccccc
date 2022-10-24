<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    header: {type: Boolean, required: false},
    title: {type: String, required: false,},
    icontitle: {type: String, required: false,},
    lists: {type: Array, required: true,},
    iconlist: {type: String, required: false,},
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { }
  }
} 
</script>

<template>
  <div>
      <v-list dense>
        <v-list-item v-if="header"><v-list-item-icon><v-icon>{{ icontitle }}</v-icon></v-list-item-icon><v-list-item-title class="text-subtitle-2"> {{ title }} </v-list-item-title></v-list-item>
        <v-list-item>
        <v-list-item-content>
            <v-list-item-subtitle v-for="list in lists" :key="list.name"><v-icon dense color="primary" class="mr-1">{{ iconlist }}</v-icon> {{ list }} </v-list-item-subtitle>
        </v-list-item-content>
        </v-list-item>
    </v-list>    
  </div>
</template>

<style lang="scss" scoped>

</style>