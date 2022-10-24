<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const snack = ref(false)
    const snackColor = ref("")
    const snackText = ref("")
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-snackbar v-model="snack" :timeout="3000" :color="snackColor" left>{{ snackText }}
      <template v-slot:action="{ attrs }">
        <v-btn v-bind="attrs" text @click="snack = false">Close</v-btn>
      </template>
    </v-snackbar>
  </div>
</template>

<style scoped>
</style>