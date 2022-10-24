<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <comp-heading v-bind="page" header1></comp-heading>
        <v-tabs centered>
          <v-tab class="text-subtitle-2 text-capitalize">Webhosting</v-tab>
          <v-tab class="text-subtitle-2 text-capitalize">Reseller</v-tab>
          <v-tab-item>
            <v-card>
           <v-simple-table dense>
      <template v-slot:default>
        <thead>
          <tr>
            <th class="text-left ma-0 pa-0" ></th>
            <th class="text-center ma-0 pa-0" v-for="plan in plans" :key="plan.id">
              <v-card-text class="ma-0 pa-0">
                <p class="text-h5 my-2" href=""><strong>{{ plan.name }} Hosting</strong></p>
                <p class="text-subtitle-2 d-flex justify-space-around ma-0">
                  12% Off <span class="text-decoration-line-through text--disabled">KSh. <strong class="text-h6">1350</strong></span></p>
                <p class="primary--text">KSh. <b class="text-h4 font-weight-bold">1254</b><span>/year</span> </p>
              </v-card-text>
              <v-card-actions class="my-1 mx-0 pa-0">
                <v-btn small icon color="primary"><v-icon dense>mdi-dots-vertical</v-icon></v-btn>
                <v-btn small outlined color="primary" class="text-capitalize"><v-icon dense>mdi-file-plus-outline</v-icon>Quote</v-btn>
                <v-btn small color="primary"  class="text-capitalize"><v-icon dense>mdi-cart-plus</v-icon> Buy</v-btn>
                <v-btn small icon color="primary"><v-icon dense>mdi-arrow-right-circle</v-icon></v-btn>
              </v-card-actions>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr v-for=" newplan in newplans" :key="newplan.id">
            <td class="text-caption text--secondary font-weight-bold"><v-icon dense>mdi-arrow-right</v-icon> {{ newplan.feature }}</td>
            <td class="text-center text-subtitle-2"><Boolean v-if="typeof newplan.plan1 === 'boolean'" :value="newplan.plan1"/><span v-else>{{ newplan.plan1 }}</span></td>
            <td class="text-center text-subtitle-2"><Boolean v-if="typeof newplan.plan2 === 'boolean'" :value="newplan.plan2"/><span v-else>{{ newplan.plan2 }}</span></td>
            <td class="text-center text-subtitle-2"><Boolean v-if="typeof newplan.plan3 === 'boolean'" :value="newplan.plan3"/><span v-else>{{ newplan.plan3 }}</span></td>
            <td class="text-center text-subtitle-2"><Boolean v-if="typeof newplan.plan4 === 'boolean'" :value="newplan.plan4"/><span v-else>{{ newplan.plan4 }}</span></td>
          </tr>
        </tbody>
      </template>
    </v-simple-table>
        </v-card>
          </v-tab-item>
        </v-tabs>
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
import CompHeading from "@/Components/CompHeading.vue";
import Boolean from "@/Layouts/Brenden/Boolean.vue";


export default {
  components: {
    AppContainer,
    CompHeading,
    Boolean,
    
  },
  mixins: [metainformation],
  data: () => ({
    meta: { title: 'Hosting', description: '', keywords: '',  },
      page: {
        title: 'Web Hosting Services',
        description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas',
      },
      newplans: [
        {feature: 'Hosting Type', plan1: 'Cloud Shared', plan2: 'Cloud Shared',  plan3: 'Cloud Shared',  plan4: 'Cloud Shared', },
        {feature: 'Total Sites', plan1: '3', plan2: '30',  plan3: 'Unlimited',  plan4: 'Unlimited', },
        {feature: 'Cloud Storage', plan1: '30 GB', plan2: '50 GB',  plan3: '90GB',  plan4: 'Unlimited', },
        {feature: 'Monthly Bandwidth', plan1: 'Unlimited', plan2: 'Unlimited',  plan3: 'Unlimited',  plan4: 'Unlimited', },
        {feature: 'Monthly Visits', plan1: 'Up to 10, 000', plan2: 'Up to 50, 000',  plan3: 'Up to 200, 000',  plan4: 'Unlimited', },
        {feature: 'EMail Accounts', plan1: '30', plan2: 'Unlimited',  plan3: 'Unlimited',  plan4: 'Unlimited', },
        {feature: 'FTP Accounts', plan1: '100', plan2: '200',  plan3: 'Unlimited',  plan4: 'Unlimited', },
        {feature: 'Uptime Guarantee', plan1: '99.99 %', plan2: '99.99 %',  plan3: '99.99 %',  plan4: '99.99 %', },
        {feature: 'Free Domain Name', plan1: false, plan2: false,  plan3: true,  plan4: true, },
        {feature: 'Free Let\'s Encrypt SSL', plan1: false, plan2: false,  plan3: true,  plan4: true, },
        {feature: 'Free Daily Backup', plan1: false, plan2: true,  plan3: true,  plan4: true, },
        {feature: 'Free Sitebuilder', plan1: true, plan2: true,  plan3: true,  plan4: true, },
        {feature: 'Free Migrations', plan1: true, plan2: true,  plan3: true,  plan4: true, },
        {feature: 'Wordpress & 400+ CMS', plan1: true, plan2: true,  plan3: true,  plan4: true, },
        {feature: 'Nodejs & Python', plan1: true, plan2: true,  plan3: true,  plan4: true, },
        {feature: 'Latest mySQL', plan1: true, plan2: true,  plan3: true,  plan4: true, },
        {feature: 'Cron Jobs', plan1: true, plan2: true,  plan3: true,  plan4: true, },
        {feature: 'Immunity WAF', plan1: true, plan2: true,  plan3: true,  plan4: true, },
        {feature: 'Mod Security', plan1: true, plan2: true,  plan3: true,  plan4: true, },
        {feature: 'SSH Access', plan1: true, plan2: true,  plan3: true,  plan4: true, },
        {feature: '24/7 Customer Support', plan1: true, plan2: true,  plan3: true,  plan4: true, },
      ],
      plans: [
        {
          id: 1, 
          name: 'Bronze', 
          price: '2500',
          specs: [
            {name: 'Hosting Type', value: 'Cloud Shared'},
            {name: 'Cloud Storage', value: '50 GB'},
            {name: 'Total Sites', value: '30'},
            {name: 'Monthly Bandwidth', value: 'Unlimited'},
            {name: 'Monthly Visits', value: 'Up to 50, 000'},
            {name: 'EMail Accounts', value: 'Unlimited'},
            {name: 'FTP Accounts', value: 'Unlimited'},
            {name: 'Uptime Guarantee', value: '99.99 %'},
          ],
          features: [
            {name: 'Free Domain Name', value: 'no' },
            {name: 'Free Let\'s Encrypt SSL', value: 'yes' },
            {name: 'Free Daily Backup', value: 'yes' },
            {name: 'Free Sitebuilder', value: 'yes' },
            {name: 'Free Migrations', value: 'yes' },
            {name: 'Wordpress & 400+ CMS', value: 'no'},
            {name: 'Nodejs & Python', value: 'no'},
            {name: 'Latest mySQL', value: 'yes'},
            {name: 'Cron Jobs', value: 'yes'},
            {name: 'Immunity WAF', value: 'yes'},
            {name: 'Mod Security', value: 'yes'},
            {name: 'SSH Access', value: 'no'},
            {name: '24/7 Customer Support', value: 'yes'},
          ],
        },
        {id: 2, name: 'Silver', price: '3500'},
        {id: 3, name: 'Gold', price: '4500'},
        {id: 4, name: 'Platinum', price: '6500'},
      ],
    }),
  methods: {
    cartLoad: function(){  
      axios
      .post(route('eweb.cart'), { _token: this.csrf, ...this.formlogin, })
      .then((response) => {  })
      .catch((error) => {  });
    },
    cartAddItem: function(){  
      axios
      .post(route('eweb.cart.add'), { _token: this.csrf, ...this.formlogin, })
      .then((response) => {  })
      .catch((error) => {  });
    },
    cartAddonItem: function(){  
      axios
      .post(route('eweb.cart.add', `${item}`), { _token: this.csrf, ...this.formlogin, })
      .then((response) => {  })
      .catch((error) => {  });
    },
    cartEditItem: function(){  
      axios
      .post(route('eweb.cart.add', `${item}`), { _token: this.csrf, ...this.formlogin, })
      .then((response) => {  })
      .catch((error) => {  });
    },
    cartMoveFavorite: function(){  
      axios
      .post(route('eweb.cart.add', `${item}`), { _token: this.csrf, ...this.formlogin, })
      .then((response) => {  })
      .catch((error) => {  });
    },
    cartMoveQuote: function(){  
      axios
      .post(route('eweb.cart.add', `${item}`), { _token: this.csrf, ...this.formlogin, })
      .then((response) => {  })
      .catch((error) => {  });
    },
    cartRemoveItem: function(){  
      axios
      .post(route('eweb.cart.add', `${item}`), { _token: this.csrf, ...this.formlogin, })
      .then((response) => {  })
      .catch((error) => {  });
    },
    cartCheckout: function(){  
      axios
      .post(route('eweb.cart.add'), { _token: this.csrf, ...this.formlogin, })
      .then((response) => {  })
      .catch((error) => {  });
    },
  }
};
</script>
<style scoped>
tr>td{
  border: solid 1px #e5e7eb;
}
tr>th{
  background: rgba( 2, 63, 207, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}

</style>