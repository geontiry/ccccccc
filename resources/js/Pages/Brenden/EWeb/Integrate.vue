<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
            <integrate-heading></integrate-heading>
            <integrate-payment></integrate-payment>        
      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>
      
       <!-- Page Slot Footer -->
      <template #footer></template>    

    </app-container>
  </div>
</template> 
         
    

<script>
import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
import IntegrateHeading from "@/Pages/Brenden/EWeb/Integrate/IntegrateHeading.vue";
import IntegratePayment from "@/Pages/Brenden/EWeb/Integrate/IntegratePayment.vue";

export default {
  components: {
    AppContainer,
    IntegrateHeading,
    IntegratePayment,
    
  },
  mixins: [metainformation],
  data: () => ({
    meta: { title: 'Integration', description: '', keywords: '',  },
    }),
};
</script>
