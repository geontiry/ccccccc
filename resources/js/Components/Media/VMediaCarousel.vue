<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    dense: {type: Boolean, default: false},
    height: {type: Number, default: false},
    images: {type: Array, default: false},
  },

  setup (props, ctx) {
    const model = ref(0)
    const cycle = ref(true)
    
    return { model, cycle }
  }
} 
</script>

<template>
  <div>
    <v-card>
      <v-hover v-slot="{ hover }" open-delay="10">
        <v-carousel :cycle="!hover" hide-delimiters hide-delimiter-background delimiter-icon="mdi-minus" :height="height" v-model="model">
          <v-carousel-item reverse-transition="fade-transition" transition="fade-transition" v-for="(image, i) in images" :key="i" :src="image"></v-carousel-item>
        </v-carousel>
      </v-hover>
      <v-sheet>
        <ul class="dots d-flex justify-center">
          <li v-for="(image,i) in images" :key="i" :class="{active:  i === model}" @click="model = i"></li>
        </ul>
      </v-sheet>
      <v-sheet :class="my-2" v-if="!dense">
        <v-slide-group center-active show-arrows v-model="model">
          <v-slide-item v-for="(image,i) in images" :key="i" v-slot="{ active, toggle }">
            <v-card class="mx-1" :input-value="active" active-class="primary white--text" depressed rounded @click="toggle">
              <v-img width="45" height="30" :gradient="active ? '' : 'to top right, rgba(100,115,201,.23), rgba(25,32,72,.6)' "  :src="image"></v-img>
            </v-card>
          </v-slide-item>
        </v-slide-group>
      </v-sheet>
    </v-card>
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