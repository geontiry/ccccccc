<template>
  <div>
    <p class="text-subtitle-2">Filter Websites</p>
    <p class="text-subtitle-2"><v-icon dense>mdi-filter</v-icon> By Price</p>
    <v-range-slider v-model="value" min="0" max="1000" value="200"></v-range-slider>
    <p class="text-subtitle-2"><v-icon dense>mdi-filter</v-icon> By Category</p>
    <v-checkbox v-model="checkbox" label="ECommerce" class="ma-0 pa-0"></v-checkbox>
    <v-checkbox v-model="checkbox" label="Institutional"></v-checkbox>
    <v-checkbox v-model="checkbox" label="Corporate"></v-checkbox>
    <v-checkbox v-model="checkbox" label="Personal"></v-checkbox>
    <p class="text-subtitle-2"><v-icon dense>mdi-filter</v-icon> By Rating</p>
    <v-radio-group v-model="radioGroup">
      <v-radio v-bind:value="rating" v-bind:label="rating" v-for="rating in ratings" :key="rating"></v-radio>
    </v-radio-group>
    <p class="text-subtitle-2"><v-icon dense>mdi-filter</v-icon> By Tags</p>
    <v-chip-group column multiple active-class="primary--text">
      <v-chip small v-for="tag in tags" :key="tag">{{ tag }}</v-chip>
    </v-chip-group>
  </div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
  components: {},
  props: {},
  data: ()=>{
      return {
        ratings: [ '4.5', '4.0', '3.0', '2.0', '1.0',],
        tags: [ 'Portal', 'School', 'Business', 'Portfolio', 'Drawers', 'Shopping', 'Art', 'Tech', 'Creative Writing', ],
      }
  },
  watch: {},
  methods: {}
};
</script>
<style scoped>
 
</style>