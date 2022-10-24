<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import moment from 'moment';
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const currentTime = ref(null)

    currentTime = moment().format("LTS");
    setInterval(() => this.updateCurrentTime(), 1 * 1000)

    onMounted(() => window.setInterval(this.render, 1000))

    const updateCurrentTime =()=> {
      currentTime = moment().format("LTS");
    }
    
    return { currentTime }
  }
} 
</script>

<template>
  <div>
    <v-card-title>
      <span>Host Center</span>
      <v-spacer></v-spacer>
      <span>{{ currentTime}}</span>
    </v-card-title>
  </div>
</template>

<style scoped>
.v-card{
  border-top: 4px solid green
}
.v-card.off{
  border-top: 4px solid red;
}
.v-card.err{
  animation: alertblink 1s ease-in-out infinite; box-ordinal-group: 0; order: -1;
}
.v-card.err:hover{
  animation: none; box-shadow: inset 0 0 0 1px #c02030, 0.25rem 0 0 0 #c02030;
}
@keyframes alertblink {
  0% {background: rgba(192, 32, 48, 0); box-shadow: inset 0 0 2rem -1rem rgba(192, 32, 48, 0), 0.05px 0 0 #c02030;}
  50% {background: rgba(192, 32, 48, 0.15); box-shadow: inset 0 0 0.5rem -0.5rem #c02030, 0.25rem 0 0 #c02030;}
  100% {background: rgba(192, 32, 48, 0); box-shadow: inset 0 0 2rem -1rem rgba(192, 32, 48, 0), 0.05px 0 0 #c02030;}
}
</style>
