<template>
  <div>
    <v-card color="grey" class="mb-1 p-0">
      <v-breadcrumbs  :items="breadcrumbs" class="ma-1 pa-1"></v-breadcrumbs>
    </v-card>
  </div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
  components: {},
  props: {},
  data: ()=>{
    return {
      breadcrumbs: [
        { text: 'Home', disabled: false, href: route('home'), },
        { text: 'Websites', disabled: false, href: route('websites'), },
        { text: 'ECommerce', disabled: false, href: route('websites.ecommerce'), },
        { text: ' Personal', disabled: true, href: '', },
      ],
    }
  },
  computed: {},
  watch: {},
  methods: {}
};
</script>
<style scoped>
 
</style>