<script>
import SRating from "@/Components/SRating.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { SRating },
  props: {
    dense: {type: Boolean, default: false},
    color: {type: String, default: false},
    title: {type: String, required: true},
    variant: {type: String, required: false},
    variations: {type: Array, required: true},
    product_code: {type: Number, required: true},
    price: {type: Number, required: true},
    discount: {type: Number, required: true},
    priced: {type: Number, required: true},
    prices: {type: Array, required: true},
  },

  setup (props, ctx) {
    const state = reactive({  
      model: 0,      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div v-if="dense">
      <div align="right" class="mr-2 mt-3 orange--text">
        <span class="absolute ma-1">-14%</span>
        <span class=" text-caption text-decoration-line-through grey--text "><strong>KSh. 145,455</strong></span>
        <span class="text-subtitle-2">KSh. <strong class="text-subtitle-1 font-weight-bold">145,451</strong></span>       
      </div>             
    </div>
    <div v-else>
      <v-card-text>
          <div class="subheading">Select Pricing</div>
          <v-item-group mandatory v-model="model">
            <v-row no-gutters>
                <v-col v-for="price in prices" :key="price.id" cols="3" class="px-1">
                  <v-item v-slot="{ active, toggle }">
                    <v-card :color="active ? color : `${color} lighten-4`" class="d-flex align-center" dark height="65" @click="toggle">
                      <v-scroll-y-transition>
                        <v-list-item three-line class="ma-0 pa-0">
                          <v-list-item-content >
                            <v-list-item-subtitle :class="`text-subtitle-1 ${ active ? 'white--text' : 'grey--text'}` "><small>{{ price.items }} Items</small></v-list-item-subtitle>
                            <v-list-item-subtitle :class="`text-caption text-center ${ active ? 'white-text' : 'grey--text'}`">
                             <small>Save Ksh.</small> {{ Number(price.marked-price.selling).toLocaleString() }}
                            </v-list-item-subtitle>
                            <v-list-item-subtitle :class="`text-subtitle-1 ${ active ? 'white-text' : 'grey--text'}`">
                                 <v-icon small v-if="active">mdi-check-circle-outline</v-icon>
                                 <v-badge offset-x="-5" :color="`${active ? 'green' : 'green lighten-3'}`" :content="`${price.discount}% off`" class="text-subtitle-2"></v-badge>                                  
                              </v-list-item-subtitle>
                          </v-list-item-content>
                        </v-list-item>
                      </v-scroll-y-transition>
                    </v-card>
                  </v-item>
                </v-col>
              </v-row>
          </v-item-group>
          <div class="my-2 d-flex justify-end" v-for="price in prices" :key="price.id">
            <span class="text-subtitle-2 text-decoration-line-through text--disabled ml-4" v-if="price.id == model+1">KSh. <strong class="text-h6">{{ Number(price.marked).toLocaleString() }}</strong></span>
            <span :class="`text-subtitle-2 ${color}--text ml-4`"  v-if="price.id == model+1">KSh. <small class="text-h4 font-weight-bold">{{ Number(price.selling).toLocaleString() }}</small></span>
          </div>
        </v-card-text>      
    </div>
  </div>
</template>

<style scoped>
.absolute{
  top: 0; right: 0;
} 
.price{
  font-size: 10.5em;
}
</style>