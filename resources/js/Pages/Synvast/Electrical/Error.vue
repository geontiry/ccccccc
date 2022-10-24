<script>
import AppSynvast from "@/Layouts/AppSynvast.vue";
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { AppSynvast },
  props: {
    status: Number,
  },

  setup (props, ctx) {
    const state = reactive({  
      meta: { title: 'Error', description: '', keywords: '', url: '', site_name: '', type: '', image: '', image_type: 'image/png', image_width: 1024, image_height: 600, },      
    })

     const title = computed(()=>{
       return {
         503: '503: Service Unavailable',
         500: '500: Server Error',
         404: '404: Page Not Found',
         403: '403: Forbidden',
         }[this.status]
    })
    const description = computed(()=> {
      return {
        503: 'Sorry, we are doing some maintenance. Please check back soon.',
        500: 'Whoops, something went wrong on our servers.',
        404: 'Sorry, the page you are looking for could not be found.',
        403: 'Sorry, you are forbidden from accessing this page.',
        }[this.status]
    })
    
    return {title, description } 
  }
} 
</script>

<template>
  <div>
    <AppSynvast :meta="meta">

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <h1>{{ title }}</h1>
        <div>{{ description }}</div>
      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>
      
       <!-- Page Slot Footer -->
      <template #footer></template>    

    </AppSynvast>
  </div>
</template> 
