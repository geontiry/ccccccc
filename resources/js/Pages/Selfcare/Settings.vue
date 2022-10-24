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
                <v-tab>General</v-tab>
                <v-tab>Notifications</v-tab>
                <v-tab>Security</v-tab>
                <v-tab>Account</v-tab>
                <v-tab-item>
                   <v-card>
                     <v-list subheader three-line>
      <v-subheader>User Controls</v-subheader>

      <v-list-item>
        <v-list-item-content>
          <v-list-item-title>Content filtering</v-list-item-title>
          <v-list-item-subtitle>Set the content filtering level to restrict appts that can be downloaded</v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

      <v-list-item>
        <v-list-item-content>
          <v-list-item-title>Password</v-list-item-title>
          <v-list-item-subtitle>Require password for purchase or use password to restrict purchase</v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>
    </v-list>

    <v-divider></v-divider>

    <v-list
      flat
      subheader
      three-line
    >
      <v-subheader>General</v-subheader>

      <v-list-item-group
        v-model="settings"
        multiple
        active-class=""
      >
        <v-list-item>
          <template v-slot:default="{ active }">
            <v-list-item-action>
              <v-checkbox :input-value="active"></v-checkbox>
            </v-list-item-action>

            <v-list-item-content>
              <v-list-item-title>Notifications</v-list-item-title>
              <v-list-item-subtitle>Notify me about updates to apps or games that I downloaded</v-list-item-subtitle>
            </v-list-item-content>
          </template>
        </v-list-item>

        <v-list-item>
          <template v-slot:default="{ active }">
            <v-list-item-action>
              <v-checkbox :input-value="active"></v-checkbox>
            </v-list-item-action>

            <v-list-item-content>
              <v-list-item-title>Sound</v-list-item-title>
              <v-list-item-subtitle>Auto-update apps at any time. Data charges may apply</v-list-item-subtitle>
            </v-list-item-content>
          </template>
        </v-list-item>

        <v-list-item>
          <template v-slot:default="{ active }">
            <v-list-item-action>
              <v-checkbox :input-value="active"></v-checkbox>
            </v-list-item-action>

            <v-list-item-content>
              <v-list-item-title>Auto-add widgets</v-list-item-title>
              <v-list-item-subtitle>Automatically add home screen widgets when downloads complete</v-list-item-subtitle>
            </v-list-item-content>
          </template>
        </v-list-item>
      </v-list-item-group>
    </v-list>
  </v-card>
                </v-tab-item>
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
