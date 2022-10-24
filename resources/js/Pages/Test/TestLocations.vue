<script>
import SRating from "@/Components/SRating.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { SRating },
  props: {
    dense: {type: Boolean, default: false},
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
    <div>Locations</div>
    <v-row dense>
      <v-col cols="3"><v-select outlined dense hide-selected label="Region" placeholder="Choose region" :items="brands" item-value="id" item-text="name"></v-select></v-col>
      <v-col cols="3"><v-select outlined dense hide-selected label="County" placeholder="Choose county" :items="brands" item-value="id" item-text="name"></v-select></v-col>
      <v-col cols="3"><v-text-field outlined dense label="Name" placeholder="Enter location name ..."></v-text-field></v-col>
    </v-row>
  </div>
</template>

<style scoped>
 
</style>