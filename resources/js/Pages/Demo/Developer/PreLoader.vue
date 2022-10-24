<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api'

export default {
  components: {},
  props: {},

  setup(props, ctx) {
    const state = reactive({
      overlay: true,
    })

    onMounted(() => {
      setTimeout(() => {
          state.overlay = false
        }, 3000)
        })

    return { ...toRefs(state) }
  }
} 
</script> 

<template>
  <div>
    <v-overlay :value="overlay">
      <v-progress-circular indeterminate size="100" :opacity="1" color="primary">
      <v-avatar size="80"> <img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John"></v-avatar>
      </v-progress-circular>
    </v-overlay>
  </div>
</template>

<style lang="scss" scoped>
</style>
