<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      overlay: false,
      billingdialog: false,
      loading: false,
      model: {},
      color: 'orange',      
    })
    //regions: state => state.location.regions, 

    const openbillings = ()=>{
      overlay = true
      setTimeout(() => {overlay = false, billingdialog = true}, 2000)
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
    <div class="text-subtitle-2">Whom do you want your order billed to?</div>
      <v-overlay opacity="0.6" :value="overlay"><v-progress-circular indeterminate color="orange darken-4" size="64"></v-progress-circular></v-overlay>
      <v-card  color="grey lighten-4">
        <v-card-title class="d-flex my-n2">Billing Details<v-spacer></v-spacer>
        <v-btn outlined small dark color="orange" @click.stop="openbillings">Specify Billing Option</v-btn>
      </v-card-title>
        <v-list-item two-line class="my-n4">
          <v-list-item-content>
            <v-list-item-subtitle ><strong>Nairobi CBD Pickup Station</strong></v-list-item-subtitle>
            <v-list-item-subtitle>+254716285824</v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>
        <v-dialog persistent scrollable v-model="billingdialog" width="500">
            <v-card class="elevation-16"> 
              <v-card-title class="headline">
                Billing Options
                <v-spacer></v-spacer>
                <v-btn class="mr-n6 mt-n8" icon @click="billingdialog=false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
              </v-card-title>
              <v-divider></v-divider>
              <v-card-text>
                <div class="d-flex">Available Billing Options 
                  <v-spacer></v-spacer>
                  <v-menu bottom left offset-y transition="scale-transition" origin="center center" :close-on-content-click="false">
                <template v-slot:activator="{ on: menu, attrs }">
                  <v-btn small outlined text color="orange" v-bind="attrs"  v-on="{ ...menu }">New Billing</v-btn>
                </template>
                <v-card width="450">
                  <v-card-title>New Billing Option</v-card-title>
                  <v-card-text>
                    <div>Personal Information</div>
          <v-row>
             <v-col cols="6"><v-text-field dense outlined label="First Name*" placeholder="First Name" value="Geoffrey"></v-text-field></v-col>
              <v-col cols="6"><v-text-field dense outlined label="Last Name*" placeholder="Last Name" value="Ontiri"></v-text-field></v-col>
          </v-row>
          <div>Contact Information</div>
          <v-row>
            <v-col cols="6"><v-text-field dense outlined counter="10" label="Primary Phone*" placeholder="07xxxxxxxx"></v-text-field></v-col>
            <v-col cols="6"><v-text-field dense outlined counter="10" label="Alternative Phone" placeholder="07xxxxxxxx"></v-text-field></v-col>
          </v-row>
                      <small>*indicates required field</small>
                    </v-card-text>
                    <v-card-actions>
                  <v-btn small text dark color="orange">Cancel</v-btn>
                  <v-spacer></v-spacer>
                  <v-btn small dark color="orange">Save Billing</v-btn>
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
        </v-card>
        <v-checkbox v-model="checkbox"><template v-slot:label><div>I agree that I read and I accept the <inertia-link>terms of use</inertia-link></div></template></v-checkbox>
  </div>
</template>

<style scoped>
.scroll{
  max-height: 250px; 
}
</style>