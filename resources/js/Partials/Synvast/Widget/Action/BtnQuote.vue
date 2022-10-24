<script>
import CompSnack from "@/Components/CompSnack.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { CompSnack },
  props: {
    dense: { type: Boolean, required: true },
    color: { type: String, required: true },
  },

  setup (props, ctx) {
    const state = reactive({  
      quoted: false,
      dialog: false,
      snackbar: false,      
    })

    watch(dialog, async (val) => {
      if (!val) return
      setTimeout(() => (dialog = false, snackbar=true), 2000)
      snackbar=false
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div v-if="dense">
      <v-btn small text outlined :color="color" class="text-capitalize pa-1 mr-1 ml-n3" :disabled="dialog" :loading="dialog" @click="(dialog = true, quoted = !quoted)">
        <v-icon small>{{ quoted ? 'mdi-file-document' : 'mdi-file-plus-outline' }}</v-icon>Quote
      </v-btn>
    </div>
    <div v-else>
      <v-btn small outlined :color="`${color} darken-4`" class="text-capitalize white--text mr-2"><v-icon dense>mdi-file-document</v-icon>Add Quote</v-btn>
    </div>
    <v-dialog v-model="dialog" hide-overlay persistent width="350">
        <v-card :color="color" dark>
            <v-card-text>Adding item to my quotation requests ...<v-progress-linear indeterminate color="white" class="mb-0"></v-progress-linear></v-card-text>
        </v-card>
    </v-dialog>
    <comp-snack :snackbar="snackbar" text="Successfully added to quotations"></comp-snack>
  </div>
</template>

<style lang="scss" scoped>

</style>