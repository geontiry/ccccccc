<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
        labels: [ '12am', '3am', '6am', '9am', '12pm', '3pm', '6pm', '9pm', ],
        value: [ 200, 675, 410, 390, 310, 460, 250, 240, ],      
    })
    
    return { } 
  }
} 
</script>

<template>
<div>
    <v-card class="mt-4" max-width="400">
        <v-sheet class="v-sheet--offset mx-auto" color="cyan" elevation="12" max-width="calc(100% - 32px)">
            <v-sparkline :labels="labels" :value="value" color="white" line-width="2" padding="16"></v-sparkline>
        </v-sheet>
        <v-card-text class="pt-0">
            <div class="title font-weight-light mb-2">Customer Orders</div>
            <v-divider class="my-2"></v-divider><v-icon class="mr-2" small>mdi-clock</v-icon>
            <span class="caption grey--text font-weight-light">last order 26 minutes ago</span>
        </v-card-text>
    </v-card>
</div>
    
</template>

<style lang="scss" scoped>

</style>