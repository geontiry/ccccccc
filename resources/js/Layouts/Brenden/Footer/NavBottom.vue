<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const value = ref(1)
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-bottom-navigation :value="value" color="primary" fixed hide-on-scroll>
      <v-tooltip top><template v-slot:activator="{ on, attrs }"><v-btn text small fab v-bind="attrs" v-on="on"><v-badge bordered top color="red accent-4" dot offset-x="10" offset-y="6"><v-icon>mdi-truck-fast</v-icon></v-badge></v-btn></template><span>Track Order</span></v-tooltip>
      <v-tooltip top><template v-slot:activator="{ on, attrs }"><v-btn text small fab v-bind="attrs" v-on="on"><v-badge bordered top color="deep-purple accent-4" offset-x="7" offset-y="7" content="5"><v-icon>mdi-email-outline</v-icon></v-badge></v-btn></template><span>Messages</span></v-tooltip>
      <v-tooltip top><template v-slot:activator="{ on, attrs }"><v-btn text small fab v-bind="attrs" v-on="on"><v-badge bordered top color="deep-purple accent-4" offset-x="7" offset-y="7" content="5"><v-icon>mdi-compare</v-icon></v-badge></v-btn></template><span>Compare</span></v-tooltip>
      <v-tooltip top><template v-slot:activator="{ on, attrs }"><v-btn text small fab v-bind="attrs" v-on="on"><v-badge bordered top color="deep-purple accent-4" offset-x="7" offset-y="7" content="5"><v-icon>mdi-heart-flash</v-icon></v-badge></v-btn></template><span>Favorites</span></v-tooltip>
      <v-tooltip top><template v-slot:activator="{ on, attrs }"><v-btn text small fab v-bind="attrs" v-on="on"><v-badge bordered top color="deep-purple accent-4" offset-x="10" offset-y="7" content="5"><v-icon>mdi-file-document-outline</v-icon></v-badge></v-btn></template><span>Quotations</span></v-tooltip>
      <v-btn text small v-on="on" :href="route('cart')" ><v-badge bordered top color="deep-purple accent-4" offset-x="36" offset-y="6" content="5"><v-icon>mdi-cart-outline</v-icon><span>Cart</span></v-badge></v-btn>
    </v-bottom-navigation>
  </div>
</template>

<style scoped>
</style>