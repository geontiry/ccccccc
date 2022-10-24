<script>
import CompSnack from "@/Component/CompSnack.vue";
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { CompSnack },
  props: {},

  setup (props, ctx) {
    const dialog = ref(false)
    const snackbar = ref(false)

    watch(dialog, async (val) => {
      if (!val) return
      setTimeout(() => (this.dialog = false, this.snackbar=true), 2000)
      this.snackbar=false
    })
    
    return { dialog, snackbar }
  }
} 
</script>

<template>
  <div>
    <v-btn small text color="primary" class="white--text" :disabled="dialog" :loading="dialog" @click="dialog = true"><v-icon dense>mdi-television-play</v-icon>Demo</v-btn>
    <v-dialog v-model="dialog" hide-overlay persistent width="350">
        <v-card color="primary" dark>
            <v-card-text>Processing website live demo ...<v-progress-linear indeterminate color="white" class="mb-0"></v-progress-linear></v-card-text>
        </v-card>
    </v-dialog>
    <comp-snack :snackbar="snackbar" text="Successfully loaded live demo"></comp-snack>
  </div>
</template>

<style lang="scss" scoped>

</style>