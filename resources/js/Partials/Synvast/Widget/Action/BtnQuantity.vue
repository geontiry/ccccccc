<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {
    dense: {type: Boolean, default: false},
    quantity: {type: Number, default: 1},
  },

  setup (props, ctx) {
    const state = reactive({  
      
    })
  const reset = ()=>alert('Reset')
  const cartQuantity = (quantity)=>$emit("quantity-changed", quantity)
  
  return { } 
  }
} 
</script>

<template>
  <div>
    <div v-if="dense">
      <v-text-field dense solo flat hide-details="true" single-line full-width min='1' maxlength="4" type="number" class="text-caption mr-2 px-0 qty" v-model="quantity" @click="cartQuantity(quantity)" @keyup="cartQuantity(quantity)"></v-text-field>             
    </div>
    <div v-else>
      <v-text-field dense outlined solo hide-details sigle-line min='1' maxlength="4" type="number" label="Quantity" v-model="quantity" @click="cartQuantity(quantity)" @keyup="cartQuantity(quantity)"> 
        <template v-slot:append-outer><v-btn x-small icon class="ml-n4 mt-n6" @click="reset()"><v-icon>mdi-sync</v-icon></v-btn></template>
      </v-text-field>      
    </div>
  </div>
</template>

<style scoped>
/*.v-text-field >>> input {*/
.qty >>> input {
    font-size: 0.8em; border-radius: 5px; text-align: center; 
  }
.qty >>> input:not(:focus){
    border: solid 1px lightgray; 
  } 
</style>