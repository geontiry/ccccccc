<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const items = ref([
       {
          header: "Compare Items",
        },
        {
          action: "15 min",
          avatar: "https://cdn.vuetifyjs.com/images/lists/1.jpg",
          title: "Brunch this weekend?",
          subtitle: `<span class="text--primary">Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?`,
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "2 hr",
          avatar: "https://cdn.vuetifyjs.com/images/lists/2.jpg",
          title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
          subtitle: `<span class="text--primary">to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend.`,
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "12 hr",
          avatar: "https://cdn.vuetifyjs.com/images/lists/3.jpg",
          title: "Oui oui",
          subtitle:
            '<span class="text--primary">Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?',
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "8 hr",
          avatar: "https://cdn.vuetifyjs.com/images/lists/4.jpg",
          title: "Birthday gift",
          subtitle:
            '<span class="text--primary">Trevor Hansen</span> &mdash; Have any ideas about what we should get Heidi for her birthday?',
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "2 sec",
          avatar: "https://cdn.vuetifyjs.com/images/lists/5.jpg",
          title: "Recipe to try",
          subtitle:
            '<span class="text--primary">Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.',
        },
    ])
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-menu bottom left offset-y transition="scale-transition" origin="center center">
      <template v-slot:activator="{ on: menu, attrs }">
        <v-tooltip bottom>
          <template v-slot:activator="{ on: tooltip }">
            <v-btn text small fab dark v-bind="attrs" v-on="{ ...tooltip, ...menu }">
              <v-badge bordered top color="deep-purple accent-4" offset-x="7" offset-y="7" content="5"><v-icon>mdi-compare</v-icon></v-badge>
            </v-btn>
          </template>
          <span>Compare</span>
        </v-tooltip>
      </template>
      <v-card max-width="450" max-height="300">
        <v-list three-line dense>
          <template v-for="(item, index) in items">
            <v-subheader v-if="item.header" :key="item.header" v-text="item.header" ></v-subheader>
            <v-divider v-else-if="item.divider" :key="index" :inset="item.inset" ></v-divider>
            <v-list-item v-else :key="item.title">
              <v-list-item-avatar><v-img :src="item.avatar"></v-img></v-list-item-avatar>
              <v-list-item-content><v-list-item-title v-html="item.title"></v-list-item-title><v-list-item-subtitle v-html="item.subtitle" ></v-list-item-subtitle></v-list-item-content>
              <v-list-item-action><v-list-item-action-text v-text="item.action"></v-list-item-action-text></v-list-item-action>
            </v-list-item>
          </template>
        </v-list>
      </v-card>
    </v-menu>
  </div>
</template>

<style scoped>
</style>