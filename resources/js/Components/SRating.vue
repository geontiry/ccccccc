<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    rating: { type: Object, required: true},
      reviews: { type: Object, required: true},
      name: { type: String, required: false},
      icon: { type: String, required: true},
      value: { type: Number, required: true},
      more: { type: Boolean, required: false},
      color: { type: String, required: false},
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { }
  }
} 
</script>
<template>
  <div>
    <v-row align="center" class="ml-3 mr-3">
        <v-rating v-model="rating.rate" :color="color" dense half-increments readonly size="14"></v-rating><v-spacer></v-spacer>
        <span class="text-caption grey--text"><span :class="`${color}--text`">{{ rating.rate }}</span><small>/5.0</small>
        <span v-if="more">({{ rating.reviews }} Reviews)</span></span>
        <v-spacer></v-spacer>
        <span class="text-caption">
            <slot name="param"></slot>
            <v-icon dense :color="color">{{ icon }}</v-icon> {{ value }} {{ name}}</span>
          <v-spacer></v-spacer>
        <v-menu bottom left offset-y open-on-hover transition="scale-transition" origin="center center" :close-on-content-click="false" :value="shown">
          <template v-slot:activator="{ on, attrs }">
            <v-btn icon small flat :color="color" v-bind="attrs"  v-on="on" class="px-1 text-subtitle-2 text-capitalize" active-class="grey--text" v-if="more" @mouseover="shown = !shown">
              <v-icon>{{ shown ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
            </v-btn>
          </template>
          <v-card width="420">
            <v-card-text>
              <v-row no-gutters>
                <v-col cols="3" class="d-flex flex-column  justify-center">
                  <v-progress-circular size="85" width="8" :color="color" v-model="rating.percentage"><span class="text-h5">{{ rating.percentage }}%</span></v-progress-circular>
                </v-col>
                <v-col cols="9">
                  <v-row no-gutters class="my-0" v-for="review in reviews" :key="review.id">
                    <v-col cols="4" class="text-subtitle-2">{{ review.stars }}.0: {{ review.title }}</v-col>
                    <v-col cols="5" class="mt-2"><v-progress-linear rounded :color="color" height="5" v-model="review.percentage"></v-progress-linear></v-col>
                    <v-col cols="3" class="text-caption">{{ review.count }} Reviews</v-col>
                  </v-row>
                </v-col>
              </v-row>
            </v-card-text>            
          </v-card>      
        </v-menu>
      </v-row>
  </div>
</template>

<style lang="scss" scoped>

</style>