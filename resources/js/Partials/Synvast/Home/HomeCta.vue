<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-row dense>
      <v-col cols="12" sm="6">
        <v-alert dark dense prominent  color="indigo darken-3">
          <div class="text-subtitle-2">What about product news, offers and updates?</div>
          <h6 class="text-h6 orange--text">Subscribe to our newsletter &amp; stay up-to-date</h6>
          <div class="grid grid-cols-12 gap-2">
            <v-text-field  dense solo solo-inverted persistent-hint label="Email" placeholder="Type your email ..." hint="We care about your data protection. Read our privacy policy" class="col-span-8"></v-text-field>
            <v-btn color="orange" class="col-span-4">Subscribe</v-btn>
          </div>
        </v-alert>
      </v-col>
      <v-col cols="12" sm="6">
        <v-alert dark dense prominent  icon="mdi-school" color="indigo darken-3">
      <v-row align="center"> 
        <v-col class="grow">
          <div class="text-h6 orange--text">Just express your interest with us!</div>
          <div class="text-body-2">Have any interest, message, concern, complain, feedback, inquiry?</div>
          <div class="text-body-1">Worry no more and let us talk...!</div>
        </v-col>
        <v-col class="shrink"><v-btn outlined color="orange">Message Us</v-btn></v-col>
      </v-row>
      <div class="caption">* Our communication will be kept confidential. Read our privacy policy</div>
    </v-alert>
      </v-col>
    </v-row>
    
  </div>
</template>

<style scoped>
 
</style>