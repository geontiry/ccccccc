<template>
  <div>
    <v-card class="greeting-card">
    <v-row class="ma-0 pa-0">
      <v-col cols="8">
        <v-card-title class="text-no-wrap pt-1 ps-2">
          Congratulations John! 🥳
        </v-card-title>
        <v-card-subtitle class="text-no-wrap ps-2">
          You have won Trophy
        </v-card-subtitle>
        <v-card-text class="d-flex align-center mt-2 pb-2 ps-2">
          <div>
            <p class="text-xl font-weight-semibold primary--text mb-2">
              $42.8k
            </p>

            <v-btn
              small
              color="primary"
            >
              View Sales
            </v-btn>
          </div>
        </v-card-text>
      </v-col>

      <v-col cols="4">
        <v-img
          contain
          height="180"
          width="159" alt=""
          :src="`/storage/dash/misc/triangle-${$vuetify.theme.dark ? 'dark':'light'}.png`"
          class="greeting-card-bg"
        ></v-img>
        <v-img
          contain
          height="108"
          max-width="83"
          class="greeting-card-trophy"
          src="storage/dash/misc/trophy.png"
        ></v-img>
      </v-col>
    </v-row>
  </v-card>
   
  </div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
    components: {},
    props: {
      //rating: { type: Object, required: true},
      
  },
  data: function () {
    return {
        
    }
  },
  computed: {},
  watch: {},
  methods: {}
};
</script>

<style lang="scss" scoped>
.greeting-card {
  position: relative;
  .greeting-card-bg {
    position: absolute;
    bottom: 0;
    right: 0;
  }
  .greeting-card-trophy {
    position: absolute;
    bottom: 10%;
    right: 8%;
  }
}
// rtl
.v-application {
  &.v-application--is-rtl {
    .greeting-card-bg {
      right: initial;
      left: 0;
      transform: rotateY(180deg);
    }
    .greeting-card-trophy {
      left: 8%;
      right: initial;
    }
  }
}
</style>