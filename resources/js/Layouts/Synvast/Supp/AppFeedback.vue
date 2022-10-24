<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    //const a = ref(3)
    const active = ref(false)
    const reveal = ref(false)
    const subjects = ref([ 'Message', 'Concern', 'Complain', 'Partnership', 'Suggestion', 'Feedback', 'Inquiry'])
    const supports = ref(['Sales', 'Technical', 'Administration'])
    const message = ref('The Woodman set to work at once, and so sharp was his aough')
    const messages = ref([
        {
          from: 'Order Placed',
          message: `Successful.`,
          time: '10:42am',
          color: 'deep-purple lighten-1',
        },
        {
          from: 'Order Confirmed',
          message: 'Successful',
          time: '10:37am',
          color: 'green',
        },
        {
          from: 'Order Processed',
          message: 'Pending',
          time: '9:47am',
          color: 'deep-purple lighten-1',
        },
        {
          from: 'Order Shipped',
          message: 'Pending',
          time: '9:47am',
          color: 'deep-purple lighten-1',
        },
        {
          from: 'Order Delivered',
          message: 'Pending',
          time: '9:47am',
          color: 'deep-purple lighten-1',
        },
      ])

      const onClickOutside = ()=>active = false
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <!-- Page Feedback-->
    <template>
        <div class="app-feedback" @click="active = true">
            <v-btn small icon absolute top right class="mt-n11" @click="active = false" v-if="active"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
            <v-tabs vertical hide-slider height="180" :class="active ? 'show' : 'hide' " transition="slide-x-transition" v-click-outside="onClickOutside">
                <v-tab class="mx-n6 grey lighten-2"><v-tooltip left><template v-slot:activator="{ on: tooltip }"><v-badge top color="orange darken-4" dot offset-x="10" offset-y="6"><v-icon v-bind="attrs" v-on="{ ...tooltip }">mdi-truck-fast</v-icon></v-badge></template><span>Track Order</span></v-tooltip></v-tab>
                <v-tab class="mx-n6 grey lighten-2" ><v-tooltip left><template v-slot:activator="{ on: tooltip }"><v-icon v-bind="attrs" v-on="{ ...tooltip }">mdi-android-messages</v-icon></template><span>Send Message</span></v-tooltip></v-tab>
                <v-tab class="mx-n6 grey lighten-2" ><v-tooltip left><template v-slot:activator="{ on: tooltip }"><v-icon v-bind="attrs" v-on="{ ...tooltip }">mdi-bell-ring</v-icon></template><span>Email Newsletter</span></v-tooltip></v-tab>
                <v-tab class="mx-n6 grey lighten-2" ><v-tooltip left><template v-slot:activator="{ on: tooltip }"><v-icon v-bind="attrs" v-on="{ ...tooltip }">mdi-map-marker-radius</v-icon></template><span>Location Contacts</span></v-tooltip></v-tab>
                <v-tab class="mx-n6 grey lighten-2" ><v-tooltip left><template v-slot:activator="{ on: tooltip }"><v-icon v-bind="attrs" v-on="{ ...tooltip }">mdi-cloud-download</v-icon></template><span>Mobile App</span></v-tooltip></v-tab>
                <!--Feedback: Order Tracking-->
                <v-tab-item>
                    <v-alert dark dense prominent color="indigo darken-3">
                        <div class="text-h6">Track Order</div>
                        <v-row no-gutters>
                            <v-col cols="4">Order No.:</v-col>
                            <v-col cols="8"><v-text-field dense v-model="order" label="Order Number" solo></v-text-field></v-col>
                        </v-row>
                        <div class="text-subtitle-2">Tracking Details</div>
                        <v-timeline align-top dense class="ml-n8">
                            <v-timeline-item v-for="message in messages" :key="message.time" :color="message.color" small class="my-n4">
                                <div class="d-flex">
                                    <span class="text-subtitle-2">{{ message.from }}</span>
                                    <v-spacer></v-spacer> 
                                    <span class="text-caption">@{{ message.time }}</span>
                                </div>
                                <div class="text-caption"><v-icon small color="grey">mdi-check</v-icon>{{ message.message }}</div>
                            </v-timeline-item>
                        </v-timeline>
                    </v-alert>
                </v-tab-item>   
                <!--Feedback: Interest Message-->       
                <v-tab-item>
                    <v-alert dark dense prominent  icon="mdi-school" color="indigo darken-3" v-if="!reveal" class="transition-fast-in-fast-out v-card--reveal">
                        <div class="text-h6 orange--text">Just express your interest with us!</div>
                        <div class="text-subtitle-2">Have any interest, message, concern, complain, feedback, inquiry?</div>
                        <div class="text-caption">Worry no more and let us talk...!</div>
                        <v-btn outlined color="orange" @click="reveal = true">Message Us</v-btn>
                        <div class="caption">* Our communication will be kept confidential. Read our privacy policy</div>
                    </v-alert>
                    <v-expand-transition>
                        <v-card v-if="reveal" class="transition-fast-in-fast-out v-card--reveal">
                            <v-row>
                                <v-col cols="auto"><v-btn small icon color="primary" @click="reveal =false"><v-icon>mdi-arrow-left</v-icon></v-btn></v-col>
                                <v-col cols="auto">Get in Touch</v-col>
                            </v-row>
                            <v-card-text class="text-subtitle-2">
                                <v-row dense>
                                    <v-col cols="6" class="my-n2"><v-text-field dense outlined v-model="first" label="First Name"></v-text-field></v-col>
                                    <v-col cols="6" class="my-n2"><v-text-field dense outlined v-model="last" label="Last Name"></v-text-field></v-col>
                                    <v-col cols="12" class="my-n2"><v-text-field dense outlined v-model="last" label="Email"></v-text-field></v-col>
                                    <v-col cols="12" class="my-n2"><v-text-field dense outlined v-model="last" label="Phone"></v-text-field></v-col>
                                    <v-col cols="6" class="my-n2"><v-select dense outlined label="Subject" v-model="subject" :items="subjects" @change="active=true"></v-select></v-col>
                                    <v-col cols="6" class="my-n2"><v-select dense outlined label="Department" :items="supports"></v-select></v-col>
                                    <v-col cols="12" class="my-n2"><v-textarea dense outlined clearable counter auto-grow append-outer-icon="mdi-send" label="Message" 
                                    v-model="message" background-color="grey lighten-4" rows="2" clear-icon="mdi-close-circle"></v-textarea></v-col>
                                </v-row>
                            </v-card-text>
                        </v-card>
                    </v-expand-transition>
                </v-tab-item>   
                <!--Feedback: Email Newsletter--> 
                <v-tab-item>
                    <v-alert dark dense prominent  color="indigo darken-3">
                        <div class="text-subtitle-2">What about product news, offers and updates?</div>
                        <h6 class="text-h6 orange--text">Subscribe to our newsletter &amp; stay up-to-date</h6>
                        <v-text-field  dense solo solo-inverted persistent-hint label="Email" placeholder="Type your email ..." hint="We care about your data protection. Read our privacy policy"></v-text-field>
                        <v-btn color="orange">Subscribe</v-btn>
                    </v-alert>
                </v-tab-item>          
                <!--Feedback: Location Contacts--> 
                <v-tab-item>
                    <v-alert dark dense prominent  color="indigo darken-3">
                        <h6 class="text-h6 orange--text">Location Contacts</h6>
                        <div class="text-caption">Choose your location</div>
                        <v-row no-gutters>
                            <v-col cols="6" class="pr-1">
                                <v-select dense outlined label="Region" placeholder="Choose region ..." :items="regions" item-value="id" item-text="name"></v-select>
                            </v-col>
                            <v-col cols="6" class="pl-1">
                                <v-select dense outlined label="Town" placeholder="Choose town ..." :items="regions" item-value="id" item-text="name"></v-select>
                            </v-col>
                        </v-row>
                        <div class="text-subtitle-2">Contact Information</div> 
                        <div class="text-caption">Looking for careers? <inertia-link>View job openings</inertia-link></div>       
                    </v-alert>
                </v-tab-item>   
                <!--Feedback: Mobile App-->        
                <v-tab-item>
                    <v-alert dark dense prominent  color="indigo darken-3">
                        <h6 class="text-h6 orange--text">Mobile App Coming Soon</h6>
                        <div class="text-subtitle-2">Download it from:</div>
                        <v-row no-gutters>
                            <v-col cols="6"><v-img src="/storage/logo/appstore/google.png"></v-img></v-col>
                            <v-col cols="6"><v-img src="/storage/logo/appstore/apple.png"></v-img></v-col>
                        </v-row>         
                    </v-alert>
                </v-tab-item>    
            </v-tabs>
        </div>
      
    </template>
  </div>
</template>

<style lang="scss"  scoped>
.show{
    width: 24rem;
}
.hide{
    width: 2.5rem;
}
.app-feedback{
    position: fixed;
    z-index: 4;
    right: 0;
    top: 30%;
}
v-card--reveal {
  bottom: 0;
  opacity: 1 !important;
  position: absolute;
  width: 100%;
  height: 100%;
  overflow-y: scroll;
}
</style>