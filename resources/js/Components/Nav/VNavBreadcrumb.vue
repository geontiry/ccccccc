<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    title: { type: String, required: false},
  },

  setup (props, ctx) {
    const items = ref( [
        { text: 'Dashboard', disabled: false, href: 'breadcrumbs_dashboard', },
        { text: 'Link 1', disabled: false, href: 'breadcrumbs_link_1', },
        { text: 'Link 2', disabled: true, href: 'breadcrumbs_link_2', },
      ])
    
    return { items}
  }
} 
</script>

<template>
  <v-list-item two-line>
    <v-list-item-content>
        <v-list-item-title class="text-h5">{{title}}</v-list-item-title>
        <v-list-item-subtitle class="text-caption"><v-breadcrumbs class="my-n4 ml-n6" :items="items"><template v-slot:divider><v-icon>mdi-chevron-right</v-icon></template></v-breadcrumbs></v-list-item-subtitle>
    </v-list-item-content>
</v-list-item>
</template>

<style lang="scss" scoped>

</style>
