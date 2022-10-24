<template>
  <div>
    <v-card color="#1F7087" class="pa-4 mb-1">
      <v-carousel cycle hide-delimiter-background delimiter-icon="mdi-minus" height="400">
    <v-carousel-item reverse-transition="fade-transition" transition="fade-transition" v-for="(image,i) in images" :key="i">
       <v-row class="align-center d-flex">
        <v-col cols="12" sm="6" class="d-flex flex-column justify-center pt-4 pt-lg-0 order-2 order-lg-1">
          <h1 class="text-h3 white--text" >We Deliver Better Web Solutions For Your Needs</h1>
            <p class="text-h6 font-weight-regular grey--text">We are team of talented web designers and developers making awesome and secure websites with latest web technology</p>
            <div class="d-flex">
              <v-btn large rounded color="teal darken-4" class="m-2 text-capitalize white--text">Get Started</v-btn>
              <v-btn large rounded text color="white" class="m-2 text-capitalize  white--text"><v-icon left>mdi-play-circle-outline</v-icon><span>Watch Video</span></v-btn>
            </div>
        </v-col>
        <v-col cols="12" sm="6" class="order-1 order-lg-2">
          <img :src="image.src" class="d-block animated" alt="">
        </v-col>
      </v-row>
    </v-carousel-item>
    </v-carousel>
     
    </v-card>
  </div>
</template>

<script>
export default {
  components: {},
  data: function () {
    return {
      images: [
          { src: '/storage/eweb/home/hero1.jpg', },
          { src: '/storage/eweb/websites/ecommerce/personal2.png', },
          { src: '/storage/eweb/websites/ecommerce/personal3.png', },
          { src: '/storage/eweb/websites/ecommerce/personal4.png', },
          { src: '/storage/eweb/websites/ecommerce/personal5.png', },
        ],
    }
  },
};
</script>
<style scoped>
</style>