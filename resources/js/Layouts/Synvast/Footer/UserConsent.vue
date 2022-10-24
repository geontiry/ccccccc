<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const consents = ref({ functionality: false, preference: true, analytic: false, advertising: false,})

    const cookies = []     
    axios.get("/api/cookies").then( (response) => { this.catalogues = response.data.catalogues; })

    const saveItem = (event, item)=>{
       let id = item.id, 
            method = (id) ? 'patch' : 'post', 
            url = (id) ? route('api.catalogues.update', id) : route('api.catalogues.store');
      axios[method]( url, this.editedItem ).then((response) => {
        if (response.data.status) {
          this.editedItem.id = response.data.id; // add new item to state
          this.dialog = !this.dialog; 
          this.snack = true;
          this.snackColor = 'primary';
          if (!id) { 
            this.catalogues.push(this.editedItem); 
            this.snackText = 'Created successfully'
          } // add the new item to items state
          else{ 
            this.editedItem = {}; 
            this.snackText = 'Updated successfully'
          }
        }
      })
      .catch((error) => { this.snack = true; this.snackColor = 'red darken-4'; this.snackText = (error) });
    }
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-bottom-sheet inset persistent v-model="consents.functionality">
      <v-alert dark dense prominent  color="indigo darken-3" height="220px">
          <div class="text-subtitle-2">We care about your privacy</div>
          <h6 class="text-h6 orange--text">Synvast Website uses cookies to improve your experience</h6>
          <div class="text-caption">We use cookies to improve your shopping experience.</div>
          <div  class="text-caption">For an optimal performance we recommend you enable all the coolies. Alternatively, you can customize and choose those you wish to be used. You may withdraw your consents at any time. To learn more view our <inertia-link>Cookies Policy</inertia-link>, <inertia-link>Privacy Policy</inertia-link> and <inertia-link>Terms of Service</inertia-link></div>
          <v-divider></v-divider>
          <v-row dense class="my-n4">
            <v-col cols="3">
              <v-checkbox dense v-model="consents.functionality" readonly>
                <template v-slot:label>
                  <v-container class="d-block ma-0 pa-0 text-caption"><div>Core Functionality (required)</div><inertia-link>Read more</inertia-link></v-container>
                </template>
              </v-checkbox>
            </v-col>
            <v-col cols="3">
              <v-checkbox dense v-model="consents.preference">
                <template v-slot:label>
                  <v-container class="d-block ma-0 pa-0 text-caption"><div>Preferences &amp; Personalisation</div><inertia-link>Read more</inertia-link></v-container>
                </template>
              </v-checkbox>
            </v-col>
            <v-col cols="3">
              <v-checkbox dense v-model="consents.analytic">
                <template v-slot:label>
                  <v-container class="d-block ma-0 pa-0 text-caption"><div>Analytics &amp; Performace</div><inertia-link>Read more</inertia-link></v-container>
                </template>
              </v-checkbox>
            </v-col>
            <v-col cols="3">
              <v-checkbox dense v-model="consents.advertising">
                <template v-slot:label>
                  <v-container class="d-block ma-0 pa-0 text-caption"><div>Advertising</div><inertia-link>Read more</inertia-link></v-container>
                </template>
              </v-checkbox>
            </v-col>
          </v-row>    
          <v-card-actions class="justify-end mt-n6">
            <v-btn small outlined color="orange darken-4" @click="consents = !consents">Continue</v-btn>
            <v-btn small color="orange darken-4" @click="consents = !consents">Accept All</v-btn>
          </v-card-actions>      
        </v-alert>
    </v-bottom-sheet>
  </div>
</template>

<style lang="scss" scoped>
</style>