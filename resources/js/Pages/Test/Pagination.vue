<template>
  <div>
      <v-text-field solo label="Search" placeholder="Enter text to search..." v-model="search"></v-text-field>
      <v-list-item two-line v-for="user in users.data" :key="user.id">
      <v-list-item-content>
        <v-list-item-title>{{user.name}}</v-list-item-title>
        <v-list-item-subtitle>{{user.email}}</v-list-item-subtitle>
      </v-list-item-content>
    </v-list-item>
    <div class="text-center">
    <v-pagination v-model="page" :length="length" :total-visible="7"></v-pagination>
  </div>

  </div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
    components: {},
    props: {
      users: { type: Object, required: true},
      filters: { type: Object, required: false},
  },
  data: function () {
    return {
        search: this.filters.search,
        page: this.users.current_page,
        length: this.users.last_page
    }
  },
  computed: {},
  watch: {
      search:function(value){
          this.$inertia.get('https://test.localhost/pagination', {search: value}, {preserveState: true, replace: true})
    },
      page:function(value){
          this.$inertia.get('https://test.localhost/pagination', {search: this.search, page: value})
    }
  },
  methods: {}
};
</script>

<style lang="scss" scoped>

</style>
