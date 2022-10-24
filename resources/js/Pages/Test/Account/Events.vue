<script>
import AdmPanel from "@/Layouts/AdmPanel.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { AdmPanel },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <AdmPanel>
      <!-- Page Slot Home-->
      <template #page>
        <v-breadcrumbs :items="breadcrumbitems"></v-breadcrumbs>
        <v-row>
          <v-col cols="4"></v-col>
          <v-col cols="8">
            <v-row class="fill-height">
              <v-col>
                
              </v-col>
            </v-row>
          </v-col>
        </v-row>
      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>
    </AdmPanel>
  </div>
</template> 
