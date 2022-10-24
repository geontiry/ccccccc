<template>
  <div>
    <v-carousel cycle hide-delimiter-background delimiter-icon="mdi-minus" height="400">
    <v-carousel-item reverse-transition="fade-transition" transition="fade-transition" v-for="(image,i) in images" :key="i" :src="image.src"></v-carousel-item>
    </v-carousel>
    
  </div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
  components: {},
  props: {},
  //mixins: [mixin],
  data: function () {
    return {
      images: [
          { src: '/storage/eweb/websites/ecommerce/personal1.png', },
          { src: '/storage/eweb/websites/ecommerce/personal2.png', },
          { src: '/storage/eweb/websites/ecommerce/personal3.png', },
          { src: '/storage/eweb/websites/ecommerce/personal4.png', },
          { src: '/storage/eweb/websites/ecommerce/personal5.png', },
        ],
    }
  },
  computed: {},
  watch: {},
  methods: {}
};
</script>

<style lang="scss" scoped>

</style>