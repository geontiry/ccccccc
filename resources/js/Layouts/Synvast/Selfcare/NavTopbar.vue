<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {
    sdb: { type: Boolean, required: true},
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-toolbar flat color="primary" dark>
    <v-list-item two-line>
        <v-list-item-avatar><img src="https://randomuser.me/api/portraits/women/81.jpg"></v-list-item-avatar>
        <v-list-item-content><v-list-item-title>Hi Geoffrey!</v-list-item-title><v-list-item-subtitle>Welcome to Synvast</v-list-item-subtitle></v-list-item-content>
    </v-list-item>
    <v-spacer></v-spacer>
    <v-btn dark depressed color="primary">Logout</v-btn>
    </v-toolbar>
    
  </div>
</template>

<style scoped>
</style>