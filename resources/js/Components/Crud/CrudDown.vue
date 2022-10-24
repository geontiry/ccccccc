<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const countries = ref([])
    const selectedcountry = ref({})
    const states = ref([])
    const selectedstate = ref({})
    const cities = ref([])

    onMounted(() => loadCountries())

    const selected = () =>{
      let country_id = this.selectedcountry
      this.loadStates(country_id);
      this.cities = [];
    }

    const selectcities = ()=>{
      let state_id = this.selectedstate
      this.loadCities(state_id);
    };

    const loadCountries = () => {
      this.countries = [];
      axios.get("/get-countries").then((response) => { this.countries = response.data.countries })
              //.map(item =>( { id: item.id, name: item.name } )
              //.map(item => item.name)
    }

    const loadStates = (item) =>{
      this.states = [];
      axios.get(`get-states/${item}`).then((response) => { this.states = response.data.states })
  }

  const loadCities = (item) =>{
      this.cities = [];
      axios.get(`get-cities/${item}`).then((response) => { this.cities = response.data.cities })
  }
    
    return { countries, selectedcountry, states, selectedstate, cities }
  }
} 
</script>

<template>
  <div class="container">
    <v-row>
      <v-col cols="3">
        <v-select :items="countries" item-value="id" item-text="name" label="Country" v-model="selectedcountry" @change="selected" outlined dense></v-select>
      </v-col>
      <v-col cols="3">
        <v-select :items="states"  item-value="id" item-text="name" label="State" v-model="selectedstate" @change="selectcities" outlined dense></v-select>
      </v-col>
      <v-col cols="3">
        <v-select :items="cities"  item-value="id" item-text="name" label="City" outlined dense></v-select>
      </v-col>
    </v-row>
  </div>
</template>