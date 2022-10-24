<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const show = ref(true)
    const style = ref("success")
    const message = ref(null)

    onBeforeMounted(() => { 
        const checkOnlineStatus = async () => {
            try {
                const online = await fetch("/storage/pixel.png");
                return online.status === 200 && navigator.onLine
            } catch (err) {
                return false; // definitely offline
            }
        };

        setInterval(async () => {
        const result = await checkOnlineStatus();
        this.message = result
        //this.message = result ? "Online" : "OFFline";
        }, 3000);

        // forgot to include async load event listener in the video! 
        window.addEventListener("load", async (event) => {
           // this.message = result
            //this.message = (await checkOnlineStatus()) ? "Online" : "OFFline";
        });
    })

    onMounted(() => {
        /*setInterval(
            this.message = navigator.onLine ? "Online" : "Offline"
            ,1000);
        /*window.addEventListener("load", (event) => {
            this.message = navigator.onLine ? "Online" : "Offline";
        });
        window.addEventListener('offline', function(e) {
            //this.message = 'Network disconnected'
        });
        window.addEventListener('online', function(e) {
            // Network connected
        });*/
     })
    
    return { } 
  }
} 
</script>

<template>
    <div>
        <v-alert dense dismissible v-model="show" :type="style == 'success' ? 'green darken-4' : 'red darken-4'" border="left" elevation="2" class="my-0" v-if="!message">
            <v-card :color="style == 'success' ? 'green darken-2' : 'red'" class="pa-1 text-subtitle-2 rounded-lg"><v-icon dense>{{ style == 'success' ? 'mdi-check-circle' : 'mdi-alert-circle'}} </v-icon>{{ message }}</v-card>
        </v-alert>
    </div>
</template>
