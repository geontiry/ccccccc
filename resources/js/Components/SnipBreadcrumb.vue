<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    breads: { type: Boolean, default: false},
  },

  setup (props, ctx) {
    const home = ref({ text: 'Home', disabled: false, href: '', })
    const breadcrumbs = computed(()=>{
      const params = route().params
      const home= { text: 'Home', disabled: false, href: route('electrical.home'), }
      const data = Object.entries(this.$page.props.params)
      let express = 'electrical.products'
      let routeParams = []
      let links = data.map(([key, value], index) => {
        for (let i = index; i < index+1; i++) {
            express = express+'.'+key
            routeParams.push(value)
          }          
        let link = { 
          "text": value.charAt(0).toUpperCase() + value.slice(1),  
          "disabled": (index===data.length-1) ? true : false, 
         // "href": typeof params === 'object' && params != null && Object.entries(params).length !== 0 ? routeParams : route(`electrical.${value}`)
          "href": routeParams,
        };  
        return link
      })
      return [home, ...links]
    })
    
    return { home, breadcrumbs }
  }
} 
</script>

<template>
  <div>
  <div>123{{ $page.props.params }}</div>
  <div>2{{ breadcrumbs }}</div>
      <v-breadcrumbs  :items="breadcrumbs" class="ma-0 pa-1" v-if="breads === true"></v-breadcrumbs> 
  </div>
</template>

<style lang="scss" scoped>

</style>