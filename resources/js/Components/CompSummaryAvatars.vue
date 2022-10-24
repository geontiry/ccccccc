<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    title: {type: String, required: true},
    avatars: {type: Object, required: true},
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { }
  }
} 
</script>

<template>
  <div>
      <p class="text-subtitle-1 mb-1">{{ title }}</p>
        <v-tooltip bottom v-for="avatar in avatars" :key="avatar.id">
          <template v-slot:activator="{ on, attrs }">
            <v-avatar size="28" class="mr-2 pa-0" v-bind="attrs" v-on="on"><img :src="avatar.img" :alt="avatar.name"></v-avatar>
          </template>
          <span>{{ avatar.name }}</span>
        </v-tooltip>
  </div>
</template>

<style scoped>
 
</style>