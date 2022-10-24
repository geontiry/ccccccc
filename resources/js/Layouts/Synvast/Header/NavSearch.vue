<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const isLoading = ref(false)
    const items = ref([])
    const model = ref(null)
    const search = ref(null)
    const tab = ref(null)

    watch(model, async (val) => tab = val != null ? 0 : null)
    watch(search, async (val) => {
      // Items have already been loaded
        if (this.items.length > 0) return

        this.isLoading = true

        // Lazily load input items
        fetch('https://api.coingecko.com/api/v3/coins/list')
          .then(res => res.clone().json())
          .then(res => { this.items = res })
          .catch(err => { console.log(err) })
          .finally(() => (this.isLoading = false))
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <!--<v-text-field full-width flat hide-details placeholder=" " solo-inverted dense ></v-text-field>-->
    <v-btn small icon class="hidden-sm-and-up"><v-icon dense>mdi-magnify</v-icon></v-btn>
    <v-autocomplete dense clearable dark solo solo-inverted full-width hide-details hide-selected  :loading="isLoading" prepend-inner-icon="mdi-magnify"  class="hidden-xs-only"
    label="Search products, brands and categories" :items="items" item-text="name" item-value="symbol" :search-input.sync="search" v-model="model">
      <template v-slot:no-data>
        <v-list-item><v-list-item-title>Search for your favorite <strong>Cryptocurrency</strong></v-list-item-title></v-list-item>
      </template>
      <template v-slot:selection="{ attr, on, item, selected }">
        <v-chip v-bind="attr" :input-value="selected" color="blue-grey" class="white--text" v-on="on"><v-icon left>mdi-bitcoin</v-icon>
          <span v-text="item.name"></span>
        </v-chip>
      </template>
      <template v-slot:item="{ item }">
        <v-list-item-avatar color="indigo" class="text-h5 font-weight-light white--text">{{ item.name.charAt(0) }}</v-list-item-avatar>
        <v-list-item-content>
          <v-list-item-title v-text="item.name"></v-list-item-title>
          <v-list-item-subtitle v-text="item.symbol"></v-list-item-subtitle>
        </v-list-item-content>
        <v-list-item-action><v-icon>mdi-bitcoin</v-icon></v-list-item-action>
      </template>
    </v-autocomplete>
  </div>
</template>

<style scoped>
p,h2 {
  margin: 0;
}

.box {
  max-width: 400px;
  margin: 0 auto;
  border: 1px solid red;
  padding: 1em;
}

.count {
  font-size: 40px;
  text-align: right;
  padding: 0.25em 0.5em;
  background-color: #333;
  color: #fff;
  margin-top: 20px;
}

.mode {
  margin-top: 12px;
}

.control {
  position: relative;
}
.reset {
  position: absolute;
  right: 0;
  bottom: 0;
}
</style>