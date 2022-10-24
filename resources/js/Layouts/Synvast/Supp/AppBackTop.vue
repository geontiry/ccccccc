<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const fab = ref(false)
    const value = ref("")

    const onScroll = (e)=>{
        if (typeof window === 'undefined') return
        const top = window.pageYOffset ||   e.target.scrollTop || 0
        this.fab = top > 20
        }
        
    const toTop = ()=>{
        this.$vuetify.goTo(0)
      }
    
    return { } 
  }
} 
</script>

<template>
<div>
  <!-- Page Contact-->    
  <v-btn v-scroll="onScroll" v-show="fab" fab dark small fixed bottom right active-class="transparent" color="transparent" @click="toTop"><v-icon size="30" color="grey lighten-1">mdi-arrow-up</v-icon>
   <v-progress-circular :rotate="-90" :size="40" :width="3" :value="value" color="orange darken-4" class="ml-n8">{{ value }}%</v-progress-circular>  
  </v-btn>
  </div>
</template>

<style scoped>
</style>