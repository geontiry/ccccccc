<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {
    dense: {type: Boolean, required: true},
    color: { type: String, required: true },
  },

  setup (props, ctx) {
    const state = reactive({  
      dialog: false,
      rules: [v => v.length <= 100 || 'Max 25 characters'],      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div v-if="dense">
      <v-tooltip bottom>
        <template v-slot:activator="{ on, attrs }">
          <v-btn x-small icon absolute top left text :color="color" class="mt-11 ml-n2"><v-icon dense v-bind="attrs" v-on="on" @click.stop="dialog = true">mdi-chat-outline</v-icon></v-btn> 
        </template>
        <span>Direct Message</span>
      </v-tooltip>
    </div>
    <div v-else>
      <v-tooltip bottom>
        <template v-slot:activator="{ on, attrs }">
          <v-btn small icon><v-icon dense color="#98a3aa" v-bind="attrs" v-on="on" @click.stop="dialog = true">mdi-chat-outline</v-icon></v-btn>
        </template>
        <span>Direct Message</span>
      </v-tooltip>
      
    </div>
  <v-dialog v-model="dialog" width="400">
    <v-card class="elevation-16 mx-auto">
      <v-card-title class="headline">
        Direct Message <v-spacer></v-spacer>
        <v-btn class="mx-0" icon @click="dialog = false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
      </v-card-title>
      <v-card-text>
        Reach our DM now!
        <v-textarea outlined  dense auto-grow counter clearable clear-icon="mdi-close-circle" label="Message" rows="3" prepend-icon="mdi-comment" background-color="grey lighten-2"
        :rules="rules"></v-textarea>
        <small class="grey--text">* This message is private</small>
      </v-card-text>
      <v-card-actions class="justify-space-between">
        <v-btn small text color="primary">Cancel</v-btn>
        <v-btn small color="primary">Send Now</v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog> 
  </div>
</template>

<style lang="scss" scoped>

</style>