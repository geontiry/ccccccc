<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    snackbar: { type: Boolean, required: false},
    snackcolor: { type: String, required: false, },
    snacktext: { type: String, required: true,},
  },

  setup (props, ctx) {
    const show = ref(false)
    
    return { }
  }
} 
</script>

<template>
  <div>
      <v-snackbar v-model="snackbar" :timeout="3000" :color="snackcolor" right>{{ snacktext }}
      <template v-slot:action="{ attrs }">
        <v-btn icon v-bind="attrs" text @click="snackbar = false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
      </template>
    </v-snackbar>
  </div>
</template>

<style lang="scss" scoped>

</style>