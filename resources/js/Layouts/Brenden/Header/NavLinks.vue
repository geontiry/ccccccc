<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    sdb: { type: Boolean, required: true},
  },

  setup (props, ctx) {
    const items = ref( [
        { link: route("eweb.home"), icon: "mdi-home-outline", title: "Home" },
        { link: route("eweb.about"), icon: "mdi-bank-outline", title: "About" },
        { link: route("eweb.websites"), icon: "mdi-web", title: "Websites" },
        { link: route("eweb.design"), icon: "mdi-monitor-cellphone-star", title: "Design", },
        { link: route("eweb.domain"), icon: "mdi-television-stop", title: "Domain" },
        { link: route("eweb.host"), icon: "mdi-desktop-tower-monitor", title: "Host", },
        { link: route("eweb.integrate"), icon: "mdi-monitor-screenshot", title: "Integrate", },
        { link: route("eweb.learn"), icon: "mdi-monitor-dashboard", title: "Learn" },
        { link: route("eweb.hire"), icon: "mdi-smart-card-reader-outline", title: "Hire", },
      ])    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-list dense v-if="sdb">
      <v-list-item-group v-model="group" active-class="deep-purple--text text--accent-4">                      
      <v-list-item  :href="item.link" v-for="item in items" :key="item.title">
          <v-list-item-icon><v-icon>{{ item.icon }}</v-icon></v-list-item-icon>
          <v-list-item-content><v-list-item-title>{{ item.title }}</v-list-item-title></v-list-item-content>
          </v-list-item>
      </v-list-item-group>
  </v-list>
    <v-btn text small flat v-else v-on="on" :href="item.link" v-for="item in items" :key="item.title" class="pl-2 pr-2" active-class="grey--text"><v-icon dense>{{ item.icon }}</v-icon> {{ item.title }}</v-btn>
  </div>
</template>

<style scoped>
</style>