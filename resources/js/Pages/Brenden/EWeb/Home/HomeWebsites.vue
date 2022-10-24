<template>
  <div>
      <h2 class="text-center text-h5">Featured Websites</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. 
        Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        <v-sheet class="mb-1">
          <v-slide-group show-arrows>
            <v-slide-item v-for="category in categories" :key="category" v-slot="{ active, toggle }">
              <v-btn small class="mx-1" :input-value="active" active-class="primary white--text" depressed rounded @click="toggle">{{ category }}</v-btn>
            </v-slide-item>
          </v-slide-group>
        </v-sheet>
      <v-row>
          <v-col cols="3">
              <v-card class="">
                  <v-img class="white--text align-end" height="200px" src="https://cdn.vuetifyjs.com/images/cards/docks.jpg">
                  <v-card-title>Top 10 Australian beaches</v-card-title>
                  </v-img>
                  <v-card-subtitle class="pb-0">Number 10</v-card-subtitle>
                  <v-card-text class="text--primary">
                      <div>Whitehaven Beach</div>
                      <div>Whitsunday Island, Whitsunday Islands</div>
                    </v-card-text>
                    <v-card-actions>
                        <v-btn color="orange" text>Share</v-btn>
                        <v-btn color="orange" text>Explore</v-btn>
                    </v-card-actions>
                  </v-card>
            </v-col>
        </v-row>
  </div>
</template>

<script>
export default {
  components: {},
  data: () => ({
    model: null,
    categories: [ 'ECommerce', 'Corporate', 'Agency', 'Institution', 'Religious', 'Multimedia', 'Social', 'Dashboard', 'Personal'],
  }),
};
</script>
<style scoped>
 
</style>