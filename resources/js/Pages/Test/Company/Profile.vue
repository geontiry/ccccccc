<script>
import AdmPanel from "@/Layouts/AdmPanel.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { AdmPanel },
  props: {
      module: { type: String, required: true },
  },

  setup (props, ctx) {
    const state = reactive({  
      
    })
    
    return { } 
  }
} 
</script>

<template>
    <AdmPanel :mod="module">
        <div>Company Portfolio</div>

    </AdmPanel>
</template>

<style scoped>

</style>
