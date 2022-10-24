<script>
import AdmTerminal from "@/Layouts/AdmTerminal.vue";
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default {
  components: { AdmTerminal,},
  props: {
    source: String
  },

  setup (props, ctx) {
    const fab = ref(null)
    const color = ref("")
    const flat = ref(null)

    onBeforeMount(() => { //was created
      const top = window.pageYOffset || 0
      if (top.value <= 60) {
        color.value = "transparent"; flat.value = true
    }
    })
    
    
    return { fab, color, flat }
  }
} 
</script>

<template>
  <div>
    <AdmTerminal :color="color" :flat="flat">
    <template #page>
      <v-main class="pt-0">
        
      </v-main>
    </template>
  </AdmTerminal>      
  </div>
</template>

<style lang="scss" scoped>
.v-main {
  background-image: url("/storage/landing/bgMain.png");
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
}
</style>