<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const currentTime = ref(null)
    const websites = ref([
      {
        name: 'Synvast Engineering',
          sites: [
            {title:'Electrical', href:'', active: true, status: true },
            {title:'Electronics', href:'', active: false, status: false },
            {title:'Automation', href:'', active: false, status: false},
            {title:'Mechanics', href:'', active: false, status: false},
            {title:'Computing', href:'', active: false, status: false},
            {title:'Construction', href:'', active: false, status: false},
            {title:'Architect', href:'', active: false, status: false},
          ]
        },
        {
          name: 'Brenden Tech',
          sites: [
            {title:'Web',  href: '', active: false, status: false},
            {title:'Cyber', href:'', active: false, status: false},
            {title:'Studio', href:'', active: false, status: false},
            {title:'Garden', href:'', active: false, status: false},
            {title:'Library', href:'', active: false, status: false},
            {title:'Bookshop', href:'', active: false, status: false},
            {title:'Press', href:'', active: false, status: false},
          ]
        },
        {
          name: 'GenSet Premier',
          sites: [
            {title:'Furniture', href:'', active: false, status: false},
            {title:'Estate', href:'', active: false, status: false},
            {title:'Interior', href:'', active: false, status: false},
            {title:'Health', href:'', active: false, status: false},
            {title:'Logistics', href:'', active: false, status: false},
            {title:'Chemicals', href:'', active: false, status: false},
            {title:'Automobile', href:'', active: false, status: false},
          ]
        },
      ],)
    
    return { currentTime, websites }
  }
} 
</script>

<template>
  <div>
    <v-card color="grey lighten-4" class="mb-1" v-for="web in websites" :key="web.name">
      <v-card-subtitle class="text-subtitle-2">{{ web.name}}</v-card-subtitle>
        <v-row dense class="ma-2">
          <v-col cols="3" v-for="site in web.sites" :key="site.title">
            <v-card :class=" [ !site.active ? 'off' : '', !site.status ? 'err' : '' ]">
              <v-row no-gutters >
                <v-col cols="6">
                  <v-img src="https://cdn.pixabay.com/photo/2020/07/12/07/47/bee-5396362_1280.jpg" class="white--text align-end" gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)" height="70">
                    <v-card-title class="text-subtitle-2 ml-n2 mb-n3">{{ site.title }}</v-card-title>
                  </v-img>
                </v-col>
                <v-col cols="6" class="pl-1">
                  <div class="text-subtitle-2">192.168.0.48</div>
                  <div class="ml-n3">
                    <v-icon large :color="site.status ? 'success' : 'error' ">mdi-circle-small</v-icon>
                    <span class="text-subtitle-2 ml-n4" :class="site.status ? 'success--text' : 'error--text'">{{ site.status ? 'ONLINE' : 'OFFLINE'}}</span>
                  </div>
                  <div>
                    <v-spacer></v-spacer>
                    <v-icon small color="primary">mdi-power</v-icon>
                  </div>
                </v-col>
              </v-row>
            </v-card>
          </v-col>
        </v-row>
    </v-card>      
  </div>
</template>

<style lang="scss" scoped>
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
