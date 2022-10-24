<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const items = ref([
      {
          //header: "Cart Items",
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
    <v-menu bottom left offset-y transition="scale-transition" origin="center center" :close-on-content-click="false">
      <template v-slot:activator="{ on, attrs }">
        <v-btn text small dark v-bind="attrs" v-on="on" class="mx-1 px-1">
          <v-badge top color="deep-purple accent-4" offset-x="7" offset-y="6" content="5"><v-icon>mdi-cart-outline</v-icon></v-badge><span>Cart</span>
        </v-btn>
      </template>
      <v-card max-width="450">
        <v-subheader>          
          <span><v-icon dense color="primary">mdi-cart</v-icon>Cart: 4 Items</span>
          <v-spacer></v-spacer>
          <span>Total: <strong class="primary--text">KSh. 14522</strong> </span>
          <v-spacer></v-spacer>
          <v-btn small text color="primary" :href="route('eweb.cart')">View All <v-icon small>mdi-chevron-double-right</v-icon></v-btn>
        </v-subheader>
        <v-divider></v-divider>
        <v-list three-line dense  class="items">
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
.items{
  max-height: 300px; overflow-y: scroll;
}

</style>