<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    dense: {type: Boolean, required: true},
    title: {type: String, required: true},
    icon: {type: String, required: true},
    count: {type: Number, required: true},
    total: {type: Number, required: true},
    href: {type: String, required: true},
    lists: {type: Array, required: true},
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { }
  }
} 
</script>

<template>
  <div>
    <v-menu bottom left offset-y transition="scale-transition" origin="center center" :close-on-content-click="false">
      <template v-slot:activator="{ on: menu, attrs }" v-if="dense">
        <v-tooltip bottom>
          <template v-slot:activator="{ on: tooltip }">
            <v-btn text small fab dark :color="`${ count >0 ? 'orange' : 'grey'} lighten-1`" v-bind="attrs" v-on="{ ...tooltip, ...menu }">
              <v-badge top color="orange darken-4" offset-x="10" offset-y="7" :content="count" v-if="count>0"><v-icon>{{ icon }}</v-icon></v-badge>
              <v-icon v-else>{{ icon }}</v-icon>
            </v-btn>
          </template>
          <span>{{ title }}</span>
        </v-tooltip>
      </template>
      <template v-slot:activator="{ on, attrs }" v-else>
        <v-btn text small dark :color="`${ count >0 ? 'orange' : 'grey'} lighten-1`" v-bind="attrs" v-on="on" class="mx-1 my-2 px-1">
          <v-badge top color="orange darken-4" offset-x="12" offset-y="7" :content="count" v-if="count>0"><v-icon>{{ icon }}</v-icon></v-badge>
          <v-icon v-else>{{ icon }}</v-icon>
          <span>{{ title }}</span>
        </v-btn>
      </template>
      <v-card width="450">
        <v-card-text class="d-flex">          
          <span><v-icon dense color="primary">{{ icon }}</v-icon>{{ title }}: {{ count }} Items</span>
          <v-spacer></v-spacer>
          <span>Total: <strong class="primary--text">{{ total | ksh }}</strong> </span>
          <v-spacer></v-spacer>
          <v-btn small text color="primary" :href="href">View All <v-icon small>mdi-chevron-double-right</v-icon></v-btn>
        </v-card-text>
        <v-divider></v-divider>
        <v-list two-line dense  class="scroll">
          <div v-for="(item, i) in lists" :key="i">
            <v-divider class="ml-16" v-show="i !== 0"></v-divider>
          <v-list-item class="mt-n1 mb-n3" >
              <v-list-item-avatar tile class="rounded"><v-img src="https://cdn.vuetifyjs.com/images/lists/1.jpg"></v-img></v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title><inertia-link>3-way Switch socket</inertia-link></v-list-item-title>
                <v-list-item-subtitle>Small plates, salads &amp; sandwiches - an intimate setting with 12 indoor seats plus patio seating</v-list-item-subtitle>
              </v-list-item-content>
              <v-list-item-action><v-list-item-action-text><strong>{{item.quantity}}</strong></v-list-item-action-text></v-list-item-action>
            </v-list-item>
          </div>
        </v-list>
      </v-card>
    </v-menu>
  </div>
</template>

<style scoped>
.scroll{
  max-height: 250px; overflow-y: scroll;
}

</style>