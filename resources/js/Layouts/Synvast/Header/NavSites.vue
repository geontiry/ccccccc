<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const synvast = ref([
        { header: 'Electrical', title: 'Brenden Web', logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo' },
        { header: 'Electronics', title: 'Brenden Cyber', logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'  },
        { header: 'Automation', title: 'Brenden Studio', logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'  },
      ])
    
    return { synvast } 
  }
} 
</script>

<template>
  <div>
    <div v-if="$vuetify.breakpoint.smAndUp">
    <v-btn small text class="text-caption text-capitalize" v-for="(item, index) in synvast" :key="index">{{ item.header }}</v-btn>
    </div>
    <v-menu bottom left v-else>
      <template v-slot:activator="{ on, attrs }">
        <v-btn dark icon class="ml-12 mt-2" v-bind="attrs" v-on="on"><v-icon>mdi-apps</v-icon></v-btn>
      </template>
      <v-list nav>
        <v-list-item v-for="(item, i) in synvast" :key="i"><v-list-item-title>{{ item.header }}</v-list-item-title></v-list-item>
      </v-list>
    </v-menu>
  </div>
</template>

<style scoped>
</style>