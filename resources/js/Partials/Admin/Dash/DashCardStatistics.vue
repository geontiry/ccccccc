<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {
    title: { type: String, required: true},
    stats: { type: Array, required: true},
  },

  setup (props, ctx) {
    const state = reactive({  
      filters: [ 'Daily', 'Weekly', 'Monthly', 'Yearly' ],      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-card>
    <v-card-title class="align-start">
      <span class="font-weight-semibold">{{ title }}</span>
      <v-spacer></v-spacer>
      <v-sheet class="">
          <v-slide-group mandatory show-arrows>
              <v-slide-item v-for="filter in filters" :key="filter" v-slot="{ active, toggle }">
                <v-chip small class="mx-1 text-capitalize" :input-value="active" active-class="primary white--text" @click="toggle">{{ filter }}</v-chip>
              </v-slide-item>
          </v-slide-group>
      </v-sheet>
      <v-btn icon small class="me-n3"><v-icon>mdi-dots-vertical</v-icon></v-btn>
    </v-card-title>
    <v-card-subtitle class="mb-1 mt-n5">
      <span class="font-weight-semibold text--primary me-1">Total 48.5% Growth</span>
      <span>😎 this month</span>
    </v-card-subtitle>
    <v-card-text>
      <div class="grid grid-cols-8 gap-3">
        <div v-for="data in stats" :key="data.title" class="d-flex align-center" >
          <v-avatar size="52" :color="data.color" rounded class="elevation-1"><v-icon dark color="white" size="32">{{ data.icon }}</v-icon></v-avatar>
          <div class="ms-1">
            <div class="text-xs">{{ data.title }}</div>
            <div class="text-lg font-weight-bold">{{ data.total }}</div>
            <v-progress-linear :color="data.color" value="15"></v-progress-linear>
          </div>
        </div>
      </div>
    </v-card-text>
  </v-card>
   
  </div>
</template>

<style lang="scss" scoped>

</style>