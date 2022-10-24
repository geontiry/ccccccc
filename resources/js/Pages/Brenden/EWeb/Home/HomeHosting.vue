<template>
  <div>
      <h2 class="text-center text-h5">Website Hosting</h2>
      <v-tabs centered>
           <v-tab class="text-subtitle-2 text-capitalize">Webhost</v-tab>
           <v-tab class="text-subtitle-2 text-capitalize">Reseller</v-tab>
        </v-tabs>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. 
          Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    <v-row no-gutters>
        <v-col cols="" class="px-2" v-for="plan in plans" :key="plan.id">
            <v-card>
                <v-card-text class="d-flex">
                    <v-icon x-large>mdi-web</v-icon>
                    <div>
                        <p class="text-h6 my-2"><strong>{{ plan.title }} Hosting</strong></p>
                        <p class="primary--text text-center"><sup>KSh.</sup> <b class="text-h4 font-weight-bold">{{ plan.amount }}</b><span>/year</span> </p>
                        <v-divider class="divider rounded mb-n4"></v-divider>
                    </div>
                </v-card-text>
                <comp-listing :lists="plan.features" iconlist="mdi-check" class="ma-0 pa-0"></comp-listing>
                <v-card-actions class="my-1 pa-0 justify-center">
                <v-btn small icon color="primary"><v-icon dense>mdi-dots-vertical</v-icon></v-btn>
                <v-btn small outlined color="primary" class="text-capitalize"><v-icon dense>mdi-file-plus-outline</v-icon>Quote</v-btn>
                <v-btn small color="primary"  class="text-capitalize"><v-icon dense>mdi-cart-plus</v-icon> Buy</v-btn>
                <v-btn small icon color="primary"><v-icon dense>mdi-arrow-right-circle</v-icon></v-btn>
              </v-card-actions>
            </v-card>
        </v-col>
    </v-row>
  </div>
</template>

<script>
import CompListing from "@/Components/CompListing.vue";
export default {
  components: {
      CompListing,
  },
  data() {
    return {
        plans: [
            {  
                id: '1', 
                title: 'Bronze', 
                amount: '1699', 
                features : [  '5GB Linux Web Space', '5 MySQL Databases', '250Gb mo Transfer', 'C24/7 Tech Support', 'Daily Backups', ],
                featured: true,
            },
            {  
                id: '2', 
                title: 'Silver', 
                amount: '1699', 
                features : [  '5GB Linux Web Space' , '5 MySQL Databases' , '250Gb mo Transfer' , 'C24/7 Tech Support' , 'Daily Backups' , ]
            },
            {  
                id: '3', 
                title: 'Gold', 
                amount: '1699', 
                features : [ '5GB Linux Web Space' , '5 MySQL Databases' ,'250Gb mo Transfer' ,'C24/7 Tech Support' ,'Daily Backups' ,]
            },
            {  
                id: '4', 
                title: 'Platinum', 
                amount: '1699', 
                features : [ '5GB Linux Web Space' , '5 MySQL Databases' , '250Gb mo Transfer' , 'C24/7 Tech Support' , 'Daily Backups' ,]
            },
        ],
    }
  },
};
</script>
<style scoped>
.divider{
    border: solid 3px #1976d2;
}
 
</style>