<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {
    dense: {type: Boolean, required: true},
    color: { type: String, required: true },
  },

  setup (props, ctx) {
    const state = reactive({ 
      saved: false,       
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div v-if="dense">
      <v-tooltip bottom>
        <template v-slot:activator="{ on, attrs }">
          <v-btn x-small icon absolute top left text :color="color" class="mt-n3 ml-n2" @click="saved = !saved">
            <v-icon dense v-bind="attrs" v-on="on">{{ saved ? 'mdi-heart' : 'mdi-heart-outline' }}</v-icon>
          </v-btn>  
        </template>
        <span>{{ saved ? 'Remove Favorite' : 'Add Favorite' }}</span>
      </v-tooltip>
    </div>
    <div v-else>
      <v-tooltip bottom>
        <template v-slot:activator="{ on, attrs }">
          <v-btn small icon @click="saved = !saved"><v-icon dense :color="`${saved ? color : '#98a3aa'}`" v-bind="attrs" v-on="on">{{ saved ? 'mdi-heart' : 'mdi-heart-outline' }}</v-icon></v-btn> 
        </template>
        <span>{{ saved ? 'Remove Favorite' : 'Add Favorite' }}</span>
      </v-tooltip>

            
    </div>
  </div>
</template>

<style lang="scss" scoped>

</style>