<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    title: {type: String, required: true},
    selected: {type: String, required: false},
    tags: {type: Array, required: true},
    price: {type: Number, required: true},
    discount: {type: Number, required: true},
    priced: {type: Number, required: true},
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { }
  }
} 
</script>

<template>
  <div>
    <v-card-text>
      <p class="subheading my-1">{{ title }}</p>
        <v-chip-group v-model="selected" active-class="blue accent-4 white--text" mandatory >
          <v-chip small  v-for="tag in tags" :key="tag.id" :value="tag">{{ tag }}</v-chip>
        </v-chip-group>
        <div class="my-1 d-flex">
          <span class="text-subtitle-2">{{ discount }}% Off</span>
          <span class="text-subtitle-2 text-decoration-line-through text--disabled ml-4">KSh. <strong class="text-h6">{{ price }}</strong></span>
          <v-spacer></v-spacer>
          <span class="text-subtitle-2 primary--text ml-4">KSh. <strong class="text-h5">{{ priced }}</strong></span>
        </div>
    </v-card-text>
  </div>
</template>

<style scoped>
 
</style>