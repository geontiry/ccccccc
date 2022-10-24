<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
        filters: [ 'Day', 'Week', 'Month', 'Year' ],
        date: new Date().toISOString().substr(0, 10),
        menu: false,
        counts: [
            { name: 'Placed', amount: 4512 },
            { name: 'Confirmed', amount: 4512 },
            { name: 'Processed', amount: 4512 },
            { name: 'Shipped', amount: 4512 },
            { name: 'Delivered', amount: 4512 },
            { name: 'Received', amount: 4512 },
            { name: 'Received', amount: 4512 },
            { name: 'Returned', amount: 4512 },
            { name: 'Refunded', amount: 4512 },
        ]      
    })
    
    return { } 
  }
} 
</script>

<template>
<div>
    <v-container>
        <v-row class="mt-2">
            <span>Customer Orders</span>
            <v-spacer></v-spacer>
            <v-sheet class="">
                <v-slide-group mandatory show-arrows>
                    <v-slide-item v-for="filter in filters" :key="filter" v-slot="{ active, toggle }">
                        <v-btn small class="mx-1 text-capitalize" :input-value="active" active-class="primary white--text" depressed rounded @click="toggle"> {{ filter }}</v-btn>
                    </v-slide-item>
                </v-slide-group>
            </v-sheet>
            <v-menu ref="menu" v-model="menu" :close-on-content-click="false" :return-value.sync="date" transition="scale-transition">
                <template v-slot:activator="{ on, attrs }">
                    <v-text-field dense readonly solo solo-inverted hide-details prepend-icon="mdi-calendar" v-model="date" v-bind="attrs" v-on="on"></v-text-field>
                </template>
                <v-date-picker no-title range v-model="date" @input="menu = false"></v-date-picker>
      </v-menu>
        </v-row>
    </v-container>
    <div class="grid grid-cols-9 gap-2">
        <v-card hover color="grey lighten-1" class="mt-2 pa-n2 border" v-for="count in counts" :key="count">
            <v-card-title class="text-h6 primary--text"><strong>{{ count.amount }}</strong></v-card-title>
            <v-card-subtitle class="text-subtitle-2 blue-grey--text"><v-icon small class="mr-1">mdi-truck</v-icon><small>{{ count.name }}</small></v-card-subtitle>
        </v-card>
    </div>
</div>
</template>

<style lang="scss" scoped>
.border{
    border-top: 2px solid blue; 
}

</style>