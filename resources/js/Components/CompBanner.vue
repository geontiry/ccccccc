<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const show = ref(true)
    const style = computed(()=>$page.props.jetstream.flash?.bannerStyle || 'success')
    const message = computed(()=>$page.props.jetstream.flash?.banner || '')
    
    return { show, style, message }
  }
} 
</script>

<template>
    <div>
        <v-alert dense dismissible v-model="show" :type="style == 'success' ? 'green darken-4' : 'red darken-4'" border="left" elevation="2" class="my-0" v-if="message">
            <v-card :color="style == 'success' ? 'green darken-2' : 'red'" class="pa-1 text-subtitle-2 rounded-lg"><v-icon dense>{{ style == 'success' ? 'mdi-check-circle' : 'mdi-alert-circle'}} </v-icon>{{ message }}</v-card>
        </v-alert>
    </div>
</template>
