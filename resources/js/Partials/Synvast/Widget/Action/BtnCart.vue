<script>
import CompSnack from "@/Components/CompSnack.vue";
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { CompSnack },
  props: {
    dense: { type: Boolean, required: true },
    color: { type: String, required: true },
    cartDialog: { type: Boolean, default: false },
    cartSnackbar: { type: Boolean, default: false },
    cartStatus: { type: String, required: true },
  },

  setup (props, ctx) {
    const state = reactive({  
      isLoading: false      
   })
  
  const addCart = ()=>{
      isLoading = true;
      setTimeout( isLoading = false, 15000);
      $emit('add');
    }
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div v-if="dense">
      <v-btn small :color="color" class="text-capitalize pa-1 white--text" :disabled="isLoading" :loading="isLoading" @click="addCart"><v-icon small>mdi-cart-plus</v-icon>Cart</v-btn>
    </div>
    <div v-else>
      <v-btn small :color="`${color} darken-4`" class="text-capitalize white--text" :disabled="isLoading" :loading="isLoading" @click="addCart"><v-icon dense>mdi-cart-plus</v-icon>Add Cart</v-btn>
    </div>
    <v-dialog v-model="cartDialog" hide-overlay persistent width="350">
        <v-card :color="color" dark>
            <v-card-text>Adding item to my shopping cart ...<v-progress-linear indeterminate color="white" class="mb-0"></v-progress-linear></v-card-text>
        </v-card>
    </v-dialog>
    <comp-snack :snackbar="cartSnackbar" :snackcolor="cartStatus === 'Success' ? 'success' : 'error'" :snacktext="`${cartStatus} !`"></comp-snack>
  </div>
</template>

<style lang="scss" scoped>

</style>