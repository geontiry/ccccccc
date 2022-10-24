<template>
  <div>
    <AdmSelfcare>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <v-card>
          <v-card-title> Profile Information</v-card-title>
          <v-card-text>
            <div>Update your account's profile information and email address. </div>
            <div>Name:</div>
            <div>Email</div>
          </v-card-text>
        </v-card>
        <v-card>
          <v-card-title>Update Password</v-card-title>
          <v-card-text>
            <div>Ensure your account is using a long, random password to stay secure. </div>
            <div>Current Password</div>
            <div>New Password</div>
            <div>Confirm Password</div>
          </v-card-text>
        </v-card>
        <v-card>
          <v-card-title>Delete Account </v-card-title>
          <v-card-text>
            <div>Permanently delete your account.  </div>
            <div>Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain. </div>
            <div>Delete Account</div>
          </v-card-text>
        </v-card>
        <v-card>
          <v-card-title>Browser Sessions </v-card-title>
          <v-card-text>
            <div>Manage and logout your active sessions on other browsers and devices. </div>
            <div>If necessary, you may logout of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password. </div>
            <div> Windows - Firefox 127.0.0.1, This device</div>
            <div>Logout Other Browser Sessions</div>
          </v-card-text>
        </v-card>
        <v-card>
          <v-card-title>Two Factor Authentication </v-card-title>
          <v-card-text>
            <div>Add additional security to your account using two factor authentication. </div>
            <div>You have not enabled two factor authentication. </div>
            <div>When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone's Google Authenticator application. </div>
            <div>Enable</div>
            <div>Scan the following QR code using your phone's authenticator application</div>
            <div>Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost. </div>
            <div>Regenerate Recovery Codes, Disable</div>
          </v-card-text>
        </v-card>
          <v-row dense>
            <v-col cols="4">
              <v-card>
                <v-img src="https://cdn.vuetifyjs.com/images/lists/ali.png" height="100px" dark>
                <v-row class="fill-height"> 
                  <v-card-title>
                    <v-btn dark icon><v-icon>mdi-chevron-left</v-icon></v-btn>
                    <v-spacer></v-spacer>
                    <v-btn dark icon class="mr-4"><v-icon>mdi-pencil</v-icon></v-btn>
                    <v-btn dark icon><v-icon>mdi-dots-vertical</v-icon></v-btn>
                  </v-card-title>
                  <v-spacer></v-spacer>
                  <v-card-title class="white--text pl-12 pt-12">
                    <div class="display-1 pl-12 pt-12">Geoffrey Ontiri</div>
                  </v-card-title>
                </v-row>
              </v-img>
              <v-list two-line>
                <v-list-item>
                  <v-list-item-icon><v-icon color="indigo">mdi-phone</v-icon></v-list-item-icon>
                  <v-list-item-content>
                    <v-list-item-title>(650) 555-1234</v-list-item-title>
                    <v-list-item-subtitle>Mobile</v-list-item-subtitle>
                  </v-list-item-content>
                </v-list-item>
                <v-list-item>
                  <v-list-item-action></v-list-item-action>

        <v-list-item-content>
          <v-list-item-title>(323) 555-6789</v-list-item-title>
          <v-list-item-subtitle>Work</v-list-item-subtitle>
        </v-list-item-content>

        <v-list-item-icon>
          <v-icon>mdi-message-text</v-icon>
        </v-list-item-icon>
      </v-list-item>

      <v-divider inset></v-divider>

      <v-list-item>
        <v-list-item-icon>
          <v-icon color="indigo">
            mdi-email
          </v-icon>
        </v-list-item-icon>

        <v-list-item-content>
          <v-list-item-title>aliconnors@example.com</v-list-item-title>
          <v-list-item-subtitle>Personal</v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

      <v-list-item>
        <v-list-item-action></v-list-item-action>

        <v-list-item-content>
          <v-list-item-title>ali_connors@example.com</v-list-item-title>
          <v-list-item-subtitle>Work</v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

      <v-divider inset></v-divider>

      <v-list-item>
        <v-list-item-icon>
          <v-icon color="indigo">
            mdi-map-marker
          </v-icon>
        </v-list-item-icon>

        <v-list-item-content>
          <v-list-item-title>1400 Main Street</v-list-item-title>
          <v-list-item-subtitle>Orlando, FL 79938</v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>
    </v-list>
  </v-card>
            </v-col>
            <v-col cols="8">
              <div>Dashboard</div>
            </v-col>
          </v-row>
          
          
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
