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
          <v-card>
              <v-tabs dark background-color="deep-purple accent-4" show-arrows centered icons-and-text>
                <v-tab>Cart</v-tab>
                <v-tab>Quotes</v-tab>
                <v-tab>Favorites</v-tab>
                <v-tab>Compare</v-tab>
                <v-tab-item></v-tab-item>
                <v-tab-item>
                  <div>Notification Conditions</div>
                  <div>Please select all the conditions for when you'd like to receive a notification</div>
                  <div>Email Preferences</div>
                  <div class="text-subtitle-2">Emain me when ...</div>
                  <div>Mobile Preferences</div>
                  <div>Newsletter Preferences</div>
                </v-tab-item>
                <v-tab-item>
                  <v-card>
                    <div>Change Password</div>
                    <v-text-field dense outlined label="Password" placeholder=""></v-text-field>
                    <v-text-field dense outlined label="Confirm" placeholder=""></v-text-field>
                    <inertia-link>Forgot Password?</inertia-link>
                    <v-btn small dark color="primary">Update Password</v-btn>
                    <div>Two-Factor Authentication</div>
                  </v-card>
                </v-tab-item>
                <v-tab-item>
                  <div>Deactivate Account</div>
                </v-tab-item>
              </v-tabs>
            </v-card>     
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
