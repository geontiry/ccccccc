<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
        tracks: [ 
            { 
                title: 'Orders', icon: '',
                comps: [ 
                    { linker: 'Geontiry', action: 'created an account', time: '12.14 PM'},
                    { linker: 'Geontiry', action: 'created an account', time: '12.14 PM'},
                    { linker: 'Geontiry', action: 'created an account', time: '12.14 PM'},
                    { linker: 'Geontiry', action: 'created an account', time: '12.14 PM'},
                    { linker: 'Geontiry', action: 'created an account', time: '12.14 PM'},
                    { linker: 'Geontiry', action: 'created an account', time: '12.14 PM'},
                    { linker: 'Geontiry', action: 'created an account', time: '12.14 PM'},
                    { linker: 'Geontiry', action: 'created an account', time: '12.14 PM'},
                ]
            },
            { title: 'Placed', }, 
            { title: 'Confirmed', }, 
            { title: 'Processed', }, 
            { title: 'Shipped', }, 
            { title: 'Delivered', }, 
            { title: 'Received', }, 
            { title: 'Returned', }, 
            { title: 'Refunded', }, 
        ]
      
    })
    
    return { } 
  }
} 
</script>

<template>
<div>
    <v-card max-width="400" class="py-1">
        <v-tabs show-arrows height="30">
        <v-tab class="text-caption text-capitalize" v-for="track in tracks" :key="track.title"><strong>{{ track.title }}</strong></v-tab>
        <v-tab-item v-for="n in 10" :key="n">
            <v-card>
            <v-list dense class="track">
                <v-list-item class="my-n3"  v-for="n in 6" :key="n">
                <v-list-item-content><v-list-item-subtitle><inertia-link>Geontiry</inertia-link> created an account</v-list-item-subtitle></v-list-item-content>
                <v-list-item-action><v-list-item-action-text>12.14 PM</v-list-item-action-text></v-list-item-action>
                </v-list-item>
            </v-list>
            </v-card>
        </v-tab-item>
        </v-tabs>
    </v-card>
</div>
    
</template>

<style lang="scss" scoped>
.track{
  height: 8em; overflow-y: scroll;
}

</style>