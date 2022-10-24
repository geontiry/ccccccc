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
    <div>
        <v-alert color="#2A3B4D" dark icon="mdi-firework" dense>
            Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec,
            nisi. Vivamus quis mi. Quisque ut nisi. Maecenas malesuada.
        </v-alert>
    </div>
</template>

<style lang="scss" scoped></style>
