<template>
  <div>
      <p class="text-h5">Online Payment Gateways</p>
      <v-row>
          <v-col cols="12" sm="12" md="6" v-for="payment in payments" :key="payment.name">
              <v-card hover color="#385F73" dark>
                  <v-row no-gutters>
                      <v-col cols="3">
                          <v-img class="white--text align-end grey lighten-2" height="100%" :src="payment.sorce" :aspect-ratio="1" :lazy-src="payment.sorce">
                              <template v-slot:placeholder>
                                  <v-row class="fill-height ma-0" align="center" justify="center"><v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular></v-row>
                                </template>              
                            </v-img>
                        </v-col>
                        <v-col cols="9">
                            <v-list-item three-line>
                                <v-list-item-content>
                                    <v-list-item-title class="text-h6">{{ payment.name }}</v-list-item-title>
                                    <v-list-item-subtitle class="text-body-1">Listen to your favorite artists and albums whenever and wherever, online and offline online and offline.</v-list-item-subtitle>
                                </v-list-item-content>
                            </v-list-item>
                            <v-card-text>
                                <v-row align="center" class="ml-1">
                                    <v-rating value="4.5" color="amber" dense half-increments readonly size="14"></v-rating>
                                    <div class="grey--text ml-4">4.5 (413)</div>
                                </v-row>
                                <div align="right" class="my-1 text-subtitle-2">KSh. <strong class="text-h5">2340</strong></div>                    
                            </v-card-text>
                            <v-card-actions>
                                <v-speed-dial v-model="fab" direction="top" transition open-on-hover>
                                    <template v-slot:activator>
                                        <v-btn text fab small v-model="fab"><v-icon v-if="fab" dense>mdi-close</v-icon><v-icon v-else dense>mdi-share-variant</v-icon></v-btn>
                                    </template>
                                    <v-btn fab dark x-small color="green" ><v-icon dense>mdi-facebook</v-icon></v-btn>
                                    <v-btn fab dark x-small color="indigo"><v-icon dense>mdi-twitter</v-icon></v-btn>
                                    <v-btn fab dark x-small color="red"><v-icon dense>mdi-linkedin</v-icon></v-btn>
                                </v-speed-dial>  
                                <v-btn small fab text><v-icon dense>mdi-heart-outline</v-icon></v-btn>              
                                <v-btn small fab text><v-icon dense>mdi-compare</v-icon></v-btn>              
                                <v-btn small fab text><v-icon dense>mdi-chat-outline</v-icon></v-btn>   
                                <v-btn small text outlined ><v-icon dense>mdi-file-plus-outline</v-icon> Quote</v-btn>
                                <v-btn small color="primary"><v-icon dense>mdi-cart-plus</v-icon> Buy</v-btn>
                            </v-card-actions>
                      </v-col>
                  </v-row>
                </v-card>
            </v-col>
        </v-row>    
  </div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
  components: {},
  props: {},
  data: ()=>{
      return {
          payments: [
              { name: 'MPesa Payment', cate: 'Technical', title: 'Top 10 Australian beaches', date: '2019-10-25', place: 'Whitsunday Island, Whitsunday Islands', sorce: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg'},
              { name: 'Paypal Payment', title: 'Top 10 Australian beaches', date: '2019-11-5', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/house.jpg'},
              { name: 'Stripe Payment', title: 'Top 10 Australian beaches', date: '2020-01-7', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/road.jpg'},
              { name: 'Payoneer Payment', title: 'Top 10 Australian beaches', date: '2020-01-7', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/road.jpg'},
              ],
          others: [
              { name: 'SSL Certificate', cate: 'Technical', title: 'Top 10 Australian beaches', date: '2019-10-25', place: 'Whitsunday Island, Whitsunday Islands', sorce: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg'},
              { name: 'Email Hosting', title: 'Top 10 Australian beaches', date: '2019-11-5', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/house.jpg'},
              { name: 'Bulk SMS', title: 'Top 10 Australian beaches', date: '2020-01-7', place: 'Block 14, Near Tuck Shop', sorce: 'https://cdn.vuetifyjs.com/images/cards/road.jpg'},
              ],
            }
  },
  computed: {},
  watch: {},
  methods: {}
};
</script>
<style scoped>
 
</style>