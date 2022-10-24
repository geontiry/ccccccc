<template>
  <div>
    <AdmSelfcare>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <v-toolbar flat color="primary" dark>
            <v-toolbar-title>Brenden User Account Management</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-text-field append-icon="mdi-microphone" class="mx-4" flat hide-details label="Search" prepend-inner-icon="mdi-magnify" solo-inverted></v-text-field>
            <v-btn depressed>Logout</v-btn>
          </v-toolbar>
          <div>Dashboard</div>
          <div>Profile Indormation</div>       
      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>
      
       <!-- Page Slot Footer -->
      <template #footer></template>    

    </AdmSelfcare>
  </div>
</template> 
         
    

<script>

import AdmSelfcare from "@/Layouts/AdmSelfcare.vue";

export default {
  components: {
    AdmSelfcare,
    
  },
    data: () => ({
     
    }),
  }
</script>
