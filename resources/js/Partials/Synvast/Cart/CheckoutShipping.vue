<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      overlay: false,
      pickupdialog: false,
      addressdialog: false,
      loading: false,
      model: {},
      locations: [],
      counties: [],
      count: [],
      color: 'orange',
      mode: 0,
      shippings:[
        { method: 'our Pickup Station', duration: 2, values: ['Cheaper', 'Quick']},
        { method: 'my Home or Door', duration: 4, values: ['Convenient',]},
      ]      
    })
    //regions: state => state.location.regions, 
    const openpickups = ()=>{
      overlay = true
      setTimeout(() => { overlay = false, pickupdialog = true }, 2000)
    }

    const openaddresses =()=>{
      overlay = true
      setTimeout(() => { overlay = false, addressdialog = true }, 2000)
    }

    const loadCounties = ()=>{
      locations = []
      count = ''
      loading = 'orange', 
      setTimeout(() => { 
        loading = false, 
        counties = $store.state.location.counties.filter(county => county.region_id === model.region && county.status ===1) 
        }, 1000) 
    }

    const loadLocations = ()=>{
       loading = 'orange', 
       setTimeout(() => { 
         loading = false, 
          locations = $store.state.location.locations.filter(county => county.county_id === model.county)
          count = locations.reduce((counter, county) => ++counter, 0)
        }, 1000) 
      }
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div class="text-subtitle-2">How do you want your order shipped?</div>
      <v-overlay opacity="0.6" :value="overlay"><v-progress-circular indeterminate color="orange darken-4" size="64"></v-progress-circular></v-overlay>
      <v-item-group mandatory v-model="mode">
        <v-row dense>
          <v-col v-for="shipping in shippings" :key="shipping.meyhod" cols="6">            
            <v-item v-slot="{ active, toggle }">
              <v-alert dense dark border="left" colored-borde elevation="2" :icon="active ? 'mdi-check-circle-outline ': 'mdi-checkbox-blank-circle-outline'" :color="active ? color : `${color} lighten-4`" :class="`${ active ? 'white--text' : 'grey--text'}` " height="80" @click="toggle">
                <div  class="text-subtitle-1 mb-n2">Ship to <strong>{{shipping.method}}</strong></div>
                <div class="py-0"><small>Ready for pick up within {{shipping.duration}} days.</small></div>
                <v-chip x-small :color="`${active ? 'green' : 'green lighten-3'}`" class="mr-1" v-for="value in shipping.values" :key="value">{{ value }}</v-chip>
              </v-alert>
            </v-item>
          </v-col>
        </v-row>
      </v-item-group>
      <v-card  color="grey lighten-4" v-if="mode===0">
        <v-card-title class="d-flex my-n2">Pickup Delivery <v-spacer></v-spacer>
        <v-btn outlined small dark color="orange" @click.stop="openpickups">Select Pickup Station</v-btn>
      </v-card-title>
        <v-list-item three-line class="my-n4">
          <v-list-item-content>
            <v-list-item-subtitle ><strong>Nairobi CBD Pickup Station</strong></v-list-item-subtitle>
            <v-list-item-title>Kencom Building, Opposite Utawala Supermarket</v-list-item-title>
            <v-list-item-subtitle>+254716285824</v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>
        <v-card-text>Shipping Fee:<strong class="orange--text">Ksh. 145</strong></v-card-text>
        <v-dialog persistent scrollable v-model="pickupdialog" width="500">
            <v-card class="elevation-16"> 
              <v-card-title class="headline">
                Pickup Stations
                <v-spacer></v-spacer>
                <v-btn class="mr-n6 mt-n8" icon @click="pickupdialog=false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
              </v-card-title>
              <v-divider></v-divider>
              <v-card-text>
                <div class="d-flex my-2">
                  Choose Location: 
                  <v-row dense>
                  <v-col cols="6"><v-select dense outlined hide-selected :loading="loading" :color="`${!loading? 'blue-grey' : 'white'}`" label="Region" placeholder="Choose region ..." :items="regions" item-value="id" item-text="name" v-model="model.region" @change="loadCounties"></v-select></v-col>
                  <v-col cols="6"><v-select dense outlined hide-selected label="County" placeholder="Choose county ..." :items="counties" item-value="id" item-text="name" v-model="model.county" v-if="model.region" @change="loadLocations"></v-select></v-col>
                </v-row>
                </div>
                <div><strong v-if="count>0">{{count}}</strong> Pickup Stations Near You</div>
              </v-card-text>
              <v-card-text>                
                <div class="scroll">
                  <v-card color="grey lighten-4" class="my-2" v-for="(station, i) in locations" :key="i">
                    <div><strong>{{ station.name }} Pickup Station</strong></div>
                    <div>Directions: Kencom Building, Opposite Utawala Supermarket</div>
                    <div>Address: PO BOX 415 - 40200, Nairobi</div>
                    <div>Customer care: 0716285824</div>
                    <div>Opening hours: Sun - Fri : 8 AM to 5 PM</div>
                    <div>Ready for pickup within 2 days</div>
                    <div>Shipping Fees: <strong class="orange--text">KSh. 450</strong></div>
                  </v-card>
                </div>
              </v-card-text>
              <v-card-actions>
                <v-btn block small dark color="orange" v-if="count>0">Select Station</v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
        </v-card>
      <v-card  color="grey lighten-4" v-if="mode===1">
        <v-card-title class="d-flex my-n2">Pickup Delivery <v-spacer></v-spacer>
        <v-btn outlined small dark color="orange" @click.stop="openaddresses">New Delivery Address</v-btn>
        <v-dialog persistent scrollable v-model="addressdialog" width="500">
            <v-card class="elevation-16"> 
              <v-card-title class="headline">
                Delivery Addresses
                <v-spacer></v-spacer>
                <v-btn class="mr-n6 mt-n8" icon @click="addressdialog=false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
              </v-card-title>
              <v-divider></v-divider>
              <v-card-text>
                <div class="d-flex">Available Delivery Addresses 
                  <v-spacer></v-spacer>
                  <v-menu bottom left offset-y transition="scale-transition" origin="center center" :close-on-content-click="false">
                <template v-slot:activator="{ on: menu, attrs }">
                  <v-btn small outlined text color="orange" v-bind="attrs"  v-on="{ ...menu }">New Address</v-btn>
                </template>
                <v-card width="450">
                  <v-card-title>Delivery Address Information</v-card-title>
                  <v-card-text>
          <v-row>
             <v-row dense>
                      <v-col cols="4"><v-select dense outlined hide-selected label="Region" placeholder="Choose region ..." :items="regions" item-value="id" item-text="name"></v-select></v-col>
                      <v-col cols="4"><v-select dense outlined hide-selected label="County" placeholder="Choose county ..." :items="counties" item-value="id" item-text="name"></v-select></v-col>
                      <v-col cols="4"><v-select dense outlined hide-selected label="Location" placeholder="Nearest Location ..." :items="counties" item-value="id" item-text="name"></v-select></v-col>
                      <v-col cols="4"><v-text-field dense outlined label="Address*" placeholder="PO BOX Number"></v-text-field></v-col>
                      <v-col cols="4"><v-text-field dense outlined label="Code*" placeholder="Postal Code Number"></v-text-field></v-col>
                      <v-col cols="4"><v-text-field dense outlined label="Town*" placeholder="Postal Town Name"></v-text-field></v-col>
                      <v-col cols="12"><v-textarea dense outlined auto-grow rows="1" label="Directions*" placeholder="Street/Estate/Building/Apartment Name"></v-textarea></v-col>
                      <v-col cols="12"><v-textarea dense outlined auto-grow rows="1" label="Additional Information" placeholder="Directions/Landmark/Floor/Shop/Room No"></v-textarea></v-col>
                      </v-row>
          </v-row>
                      <small>*indicates required field</small>
                    </v-card-text>
                    <v-card-actions>
                  <v-btn small text dark color="orange">Cancel</v-btn>
                  <v-spacer></v-spacer>
                  <v-btn small dark color="orange">Save Address</v-btn>
                </v-card-actions>
                </v-card>
            </v-menu>
                </div>
                
              </v-card-text>
              <v-card-text>                
                <div class="scroll">
                  <v-card color="grey lighten-4" class="my-2" v-for="n in 3" :key="n">
                    <v-list-item two-line class="my-n4">
                      <v-list-item-content>
                        <v-list-item-subtitle ><strong>Nairobi CBD Pickup Station</strong></v-list-item-subtitle>
                        <v-list-item-subtitle>+254716285824</v-list-item-subtitle>
                      </v-list-item-content>
                    </v-list-item>
                  </v-card>
                </div>
              </v-card-text>
              <v-card-actions>
                
              </v-card-actions>
            </v-card>
          </v-dialog>

        <v-menu bottom left offset-y transition="scale-transition" origin="center center" :close-on-content-click="false">
                <template v-slot:activator="{ on: menu, attrs }">
                  <v-btn small outlined text color="orange" v-bind="attrs"  v-on="{ ...menu }">New Delivery Address</v-btn>
                </template>
                <v-card width="450">
                  <v-card-text>
                    
                      <small>*indicates required field</small>
                    </v-card-text>
                </v-card>
            </v-menu>
        </v-card-title>
        <v-list-item three-line class="my-n4">
          <v-list-item-content>
            <v-list-item-subtitle ><strong>Geoffrey Ontiri</strong></v-list-item-subtitle>
            <v-list-item-title>Nakuru, CBD - GPO/City Market/Nation Centre, Nairobi</v-list-item-title>
            <v-list-item-subtitle>+254716285824</v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>
       <v-card-text>Shipping Fee:<strong class="orange--text">Ksh. 145</strong></v-card-text>
        </v-card>
        <v-card-text>
          <div>Additional Notes</div>
          <v-textarea dense outlined auto-grow rows="2" label="Additional Notes" placeholder="More information about the delivery of your order"></v-textarea>
        </v-card-text>
  </div>
</template>

<style scoped>
.scroll{
  max-height: 250px; 
}
</style>