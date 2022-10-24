<script>
import AdmPanel from "@/Layouts/AdmPanel.vue"
import VCardDashboardWebsite from "@/Components/Card/VCardDashboardWebsite.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { AdmPanel, VCardDashboardWebsite, },
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
        <VCardDashboardWebsite />

    </AdmPanel>
</template>