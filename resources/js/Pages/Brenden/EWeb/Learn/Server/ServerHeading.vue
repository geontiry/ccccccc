<template>
  <div>
    <h1 class="text-center text-h4">Web Server-Side Learning</h1>
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
        { text: 'Home', disabled: false, href: route('eweb.home'), },
        { text: 'Web Learning', disabled: false, href: route('eweb.learn'), },
        { text: 'Server Side', disabled: true, href: '', },
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