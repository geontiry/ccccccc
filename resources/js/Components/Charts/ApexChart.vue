<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    width: { type: Number, default: 400},
      height: { type: Number, default: 300},
      type: { type: String, default: true},
      series: { type: Array, required: true},
      options: { type: Object, required: false},
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { }
  }
} 
</script>

<template>
  <div>
      <apexchart :width="width" :height="height" :type="type" :options="options" :series="series"></apexchart>
  </div>
    
</template>

<style lang="scss" scoped>

</style>