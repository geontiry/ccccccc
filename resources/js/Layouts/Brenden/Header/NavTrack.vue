<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const messages = ref([
      {from: 'Order Placed', message: `Sure, I'll see you later.`, time: '10:42am', color: 'deep-purple lighten-1',},
      {from: 'Order Confirmed', message: 'Yeah, sure. Does 1:00pm work?', time: '10:37am', color: 'green',},
      {from: 'Order Processed', message: 'Did you still want to grab lunch today?', time: '9:47am', color: 'deep-purple lighten-1',},
      {from: 'Order Shipped', message: 'Did you still want to grab lunch today?', time: '9:47am', color: 'deep-purple lighten-1',},
      {from: 'Order Delivered', message: 'Did you still want to grab lunch today?', time: '9:47am', color: 'deep-purple lighten-1',},
    ])
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-menu bottom left offset-y transition="scale-transition" origin="center center" :close-on-content-click="false">
      <template v-slot:activator="{ on: menu, attrs }">
        <v-tooltip bottom>
          <template v-slot:activator="{ on: tooltip }">
            <v-btn text small fab dark v-bind="attrs" v-on="{ ...tooltip, ...menu }">
              <v-badge bordered top color="red accent-4" dot offset-x="10" offset-y="6"><v-icon>mdi-truck-fast</v-icon></v-badge>
            </v-btn>
          </template>
          <span>Track Order</span>
        </v-tooltip>
      </template>
      <v-card width="400" max-height="600">
        <p>Track Order</p>
        <v-text-field v-model="first" label="Order Number" solo></v-text-field>
        <v-card-text>
          <p class="font-weight-bold mb-2">Tracking Details</p>
          <v-timeline align-top dense>
            <v-timeline-item v-for="message in messages" :key="message.time" :color="message.color" small>
              <div class="font-weight-normal d-flex"><strong>{{ message.from }}</strong><v-spacer></v-spacer> @{{ message.time }}</div>
              <div>{{ message.message }}</div>
              </v-timeline-item>
            </v-timeline>
        </v-card-text>
      </v-card>
    </v-menu>
  </div>
</template>

<style scoped>
</style>