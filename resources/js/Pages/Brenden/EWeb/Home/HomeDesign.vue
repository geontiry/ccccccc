<template>
  <div>
      <h2 class="text-center text-h5">Website Design</h2>
       <v-tabs centered>
           <v-tab class="text-subtitle-2 text-capitalize">Standard</v-tab>
           <v-tab class="text-subtitle-2 text-capitalize">Custom</v-tab>
        </v-tabs>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. 
          Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        <v-row no-gutters>
            <v-col cols="" class="px-2"  v-for="plan in plans" v-bind:key="plan.id">
                <v-card>
                    <v-card-text>
                        <p class="text-h6 my-2"><strong>{{ plan.title }}</strong></p>
                        <p class="text-subtitle-2 ma-0 pa-0">Starting</p>
                        <p class="primary--text ma-0 pa-0 text-center"><sup>KSh.</sup> <b class="text-h4 font-weight-bold">{{ plan.amount }}</b></p>
                        <p class="text-caption ma-0 pa-1">one-time payment</p>                        
                        <v-divider class="divider rounded mb-n4"></v-divider>
                    </v-card-text>
                <v-list dense>
                    <v-list-item>
                        <v-list-item-content>
                            <v-list-item-subtitle v-for="feature in plan.features" v-bind:key="feature.name"><v-icon color="primary" dense>mdi-check</v-icon>{{ feature.name }}</v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                </v-list>
                <p class="text-caption">{{ plan.description }}</p>
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
export default {
  components: {},
  data() {
    return {
        plans: [
            {  id: '1', title: 'Standard Design', amount: '3, 999', features : [ 
                { name : 'Within 2 Days Delivery' }, 
                { name : 'Up to 5 Web Pages' },
                { name : 'Free 1 Year Domain' },
                { name : 'Free 1 Year Hosting' },
                { name : 'Free  SSL Certificate' },
                ],
                description: 'Limited features: Known locally as "SoMa", this neighborhood was home to the dot.com boom and boasts.'
            },
            {  id: '2', title: 'Standard Design', amount: '3, 999', features : [ 
                { name : 'Within 2 Days Delivery' }, 
                { name : 'Up to 5 Web Pages' },
                { name : 'Free 1 Year Domain' },
                { name : 'Free 1 Year Hosting' },
                { name : 'Free  SSL Certificate' },
                { name : 'Integrated Database' },
                ],
                description: 'Extra features: Known locally as "SoMa", this neighborhood was home to the dot.com boom and boasts.'
            },
            {  id: '3', title: 'Standard Design', amount: '3, 999', features : [ 
                { name : 'Within 2 Days Delivery' }, 
                { name : 'Up to 5 Web Pages' },
                { name : 'Free 1 Year Domain' },
                { name : 'Free 1 Year Hosting' },
                { name : 'Free  SSL Certificate' },
                { name : 'Integrated Database' },
                { name : 'Integrated Billing' },
                ],
                description: 'Complete features: Known locally as "SoMa", this neighborhood was home to the dot.com boom and boasts.'
            },
            {  id: '4', title: 'Standard Design', amount: '3, 999', features : [ 
                { name : 'Within 2 Days Delivery' }, 
                { name : 'Up to 5 Web Pages' },
                { name : 'Free 1 Year Domain' },
                { name : 'Free 1 Year Hosting' },
                { name : 'Free  SSL Certificate' },
                { name : 'Integrated Database' },
                { name : 'Integrated Analytics' },
                ],
                description: 'Advanced features: Known locally as "SoMa", this neighborhood was home to the dot.com boom and boasts.'
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