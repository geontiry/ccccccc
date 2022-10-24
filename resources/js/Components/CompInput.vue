<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    items: { type: Array, required: false},
    snackcolor: { type: String, required: false, },
    snacktext: { type: String, required: true,},
  },

  setup (props, ctx) {
    const show = ref(false)
    
    return {show }
  }
} 
</script>

<template>
  <div>
      <v-select dense outlined hide-selected :loading="loading" :color="`${!loading? 'blue-grey' : 'white'}`" label="Region" placeholder="Choose region ..." :items="items" item-value="id" item-text="name"></v-select>
  </div>
</template>

<style lang="scss" scoped>

</style>