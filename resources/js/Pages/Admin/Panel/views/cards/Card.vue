<script>
//import AppContainer from '@/Pages/Admin/Panel.vue'
import CardBasic from './CardBasic.vue'
import CardNavigation from './CardNavigation.vue'
import CardSolid from './CardSolid.vue'
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 

export default{
  components: { 
    CardBasic,
    CardNavigation,
    CardSolid,
  },
  props: {},

  setup (props, ctx) {
    const state = reactive({        
    })
    
    return { ...toRefs(state) } 
  }
} 
</script>  

<template>
  <div>
    <p class="text-2xl mb-6">Basic Cards</p>
    <card-basic></card-basic>
    <p class="text-2xl mt-14 mb-6">Navigation Cards</p>
    <card-navigation></card-navigation>
    <p class="text-2xl mt-14 mb-6">Solid Cards</p>
    <card-solid></card-solid>
  </div>
</template>
