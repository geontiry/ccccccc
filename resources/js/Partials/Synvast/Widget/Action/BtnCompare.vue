<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {
    dense: {type: Boolean, required: true},
    color: { type: String, required: true },
  },

  setup (props, ctx) {
    const state = reactive({  
      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-tooltip bottom v-if="dense">
        <template v-slot:activator="{ on, attrs }">
          <v-btn x-small icon absolute top left text :color="color" class="mt-4 ml-n2"><v-icon dense v-bind="attrs" v-on="on">mdi-compare</v-icon></v-btn> 
        </template>
        <span>Add to compare</span>
      </v-tooltip> 
      <v-tooltip bottom v-else>
        <template v-slot:activator="{ on, attrs }">
          <v-btn small icon ><v-icon dense color="#98a3aa" v-bind="attrs" v-on="on">mdi-compare</v-icon></v-btn>
        </template>
        <span>Add to compare</span>
      </v-tooltip> 
  </div>
</template>

<style lang="scss" scoped>

</style>