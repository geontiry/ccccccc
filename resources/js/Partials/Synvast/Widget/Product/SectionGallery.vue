<script>
import VMediaCarousel from "@/Components/Media/VMediaCarousel.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { VMediaCarousel },
  props: {
    dense: {type: Boolean, default: false},
    image: {type: String, default: false},
    images: {type: Array, default: false},
  },

  setup (props, ctx) {
    const state = reactive({ 
      model: 0,
      cycle: true, 
      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div v-if="dense">
      <inertia-link :href="route(`electrical.products.division.category.listing.catalogue.product`, ['lights', 'led', 'tubes', '2-way-tubes', '25-mm'])">
        <v-img height="120" aspect-ratio="1" lazy-src="" :src="image" class="white--text align-end grey lighten-2">
        <template v-slot:placeholder>
          <v-row class="fill-height ma-0" align="center" justify="center"><v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular></v-row>
        </template>
      </v-img>
      </inertia-link>
    </div>
    <div class="px-4" v-else>
      <VMediaCarousel height="240" :images ="images" />
    </div>
  </div>
</template>

<style lang="scss" scoped>
 .dots {
  position: relative;
  display: block;
  width: 100%;
  text-align: center;
  bottom: 14px;

  li {
    width: 7px;
    height: 7px;
    border-radius: 5px;
    background: orangered;
    opacity: 0.6;
    display: inline-block;
    margin: 0 3px;
    cursor: pointer;
    transition: opacity 0.4s ease-in-out,width 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    &.active {
      width: 40px;
      opacity: 1;
    }
    &::hover{
      cursor: pointer;
    }
  }
}

</style>
