<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      countries: [], selectedcountry: {},
      states: [], selectedstate: {},
      cities: [],      
    })

    onMounted(() =>loadCountries())

    const selected =()=>{
      let country_id = selectedcountry
      loadStates(country_id);
      cities = [];
    }

    const selectcities = ()=>{
      let state_id = selectedstate
      loadCities(state_id);
    }

    const loadCountries = ()=> {
      countries = [];
      axios.get("/get-countries").then((response) => { countries = response.data.countries })
              //.map(item =>( { id: item.id, name: item.name } )
              //.map(item => item.name)
    }

    const loadStates = (item)=>{
      states = [];
      axios.get(`get-states/${item}`).then((response) => { states = response.data.states })
    }

    const loadCities = (item)=>{
        cities = [];
        axios.get(`get-cities/${item}`).then((response) => { cities = response.data.cities })
    }
    
    return { } 
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