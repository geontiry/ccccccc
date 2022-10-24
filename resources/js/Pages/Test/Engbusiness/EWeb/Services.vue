<template>
  <div>
    <AdmPanel>
      <!-- Page Slot Home-->
      <template #page>
        <v-tabs>
          <v-tab class="text-subtitle-2 text-capitalize">Design</v-tab>
          <v-tab class="text-subtitle-2 text-capitalize">Domain</v-tab>
          <v-tab class="text-subtitle-2 text-capitalize">Hosting</v-tab>
          <v-tab class="text-subtitle-2 text-capitalize">Integration</v-tab>
          <v-tab class="text-subtitle-2 text-capitalize">Learning</v-tab>
          <v-tab class="text-subtitle-2 text-capitalize">Hiring</v-tab>
          <v-tab-item>
            <hosting></hosting>
          </v-tab-item>
        </v-tabs>
      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>
    </AdmPanel>
  </div>
</template> 
         
    

<script>
import AdmPanel from "@/Layouts/AdmPanel.vue";
// import Hosting from "@/Pages/Admin/Engbusiness/EWeb/Services/Hosting.vue";

export default {
  components: {
    AdmPanel,
    // Hosting,
  },
};
</script>
