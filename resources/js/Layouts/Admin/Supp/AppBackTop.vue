<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const fab = ref(false)

    const onScroll= (e)=>{
        if (typeof window === 'undefined') return
        const top = window.pageYOffset ||   e.target.scrollTop || 0
        fab = top > 20
        }

      const toTop= ()=> $vuetify.goTo(0)
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <!-- Page Contact-->
  <v-btn v-scroll="onScroll" v-show="fab" fab small dark fixed bottom right color="primary" @click="toTop"><v-icon>mdi-chevron-up</v-icon></v-btn>
  </div>
</template>

<style scoped>
</style>