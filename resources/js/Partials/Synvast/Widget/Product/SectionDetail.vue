<script>
import CompSummaryAvatars from "@/Components/CompSummaryAvatars.vue";
import CompSummaryTags from "@/Components/CompSummaryTags.vue";
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { CompSummaryAvatars, CompSummaryTags },
  props: {
    values: {type: Object, default: false},
  },

  setup (props, ctx) {
    const state = reactive({  
      promotions: [ 'Flashsale', 'Clearance', 'Vouchers', ],
      regions: [ 'Nairobi', 'Naivasha', 'Nakuru', 'Eldoret', 'Bungoma'],
      items: [
        {
          header: "Customer Reviews",
        },
        {
          action: "15 min",
          avatar: "https://cdn.vuetifyjs.com/images/lists/1.jpg",
          title: "Brunch this weekend?",
          subtitle: `<span class="text--primary">Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?`,
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "2 hr",
          avatar: "https://cdn.vuetifyjs.com/images/lists/2.jpg",
          title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
          subtitle: `<span class="text--primary">to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend.`,
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "12 hr",
          avatar: "https://cdn.vuetifyjs.com/images/lists/3.jpg",
          title: "Oui oui",
          subtitle:
            '<span class="text--primary">Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?',
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "8 hr",
          avatar: "https://cdn.vuetifyjs.com/images/lists/4.jpg",
          title: "Birthday gift",
          subtitle:
            '<span class="text--primary">Trevor Hansen</span> &mdash; Have any ideas about what we should get Heidi for her birthday?',
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "2 sec",
          avatar: "https://cdn.vuetifyjs.com/images/lists/5.jpg",
          title: "Recipe to try",
          subtitle:
            '<span class="text--primary">Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.',
        },
      ],
      licence: {
        name: 'Apache License 2.0',
        description: 'A permissive license whose main conditions require preservation of copyright and license notices. Contributors provide an express grant of patent rights. Licensed works, modifications, and larger works may be distributed under different terms and without source code.',
        permissions: [ 'Commercial use', 'Modification', 'Distribution', 'Patent use ', 'Private use '],
        limitations: [ ' Trademark use ', 'Liability', ' Warranty' ],
        conditions: [ 'License and copyright notice ', 'State changes ' ],
      },
      specs: {
        authethication: [ 'Commercial use', 'Modification', 'Distribution', 'Patent use ', 'Private use '],
        forms: [ ' Trademark use ', 'Liability', ' Warranty' ],
        modules: [ 'License and copyright notice ', 'State changes ' ],
      },
      browsers: [ 
        { name: 'Google Chrome', version: '', img: '/storage/eweb/logo/browsers/chrome.png'},
        { name: 'Mozilla Firefox', version: '', img: '/storage/eweb/logo/browsers/firefox.png'},
        { name: 'Opera', version: '', img: '/storage/eweb/logo/browsers/opera.png'},
        { name: 'Microsoft Edge', version: '', img: '/storage/eweb/logo/browsers/edge.png'},
        { name: 'Internet Explorer', version: '', img: '/storage/eweb/logo/browsers/explorer.png'},
        { name: 'Apple Safari', version: '', img: '/storage/eweb/logo/browsers/safari.png'},
      ],
      techs: [ 
        { name: 'HTML', version: '5', img: '/storage/eweb/logo/languages/client_html.png'},
        { name: 'CSS', version: '3', img: '/storage/eweb/logo/languages/client_css.png'},
        { name: 'JavaScript', version: '3', img: '/storage/eweb/logo/languages/client_javascript.jpg'},
        { name: 'jQuery', version: '3.2', img: '/storage/eweb/logo/languages/client_jquery.png'},
      ],
      uses: [ 'blog', 'school', 'portfolio', 'resume', 'medical', 'sports', ],  
      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-tabs>
      <v-tab class="text-subtitle-2 text-capitalize">Summary</v-tab>
      <v-tab class="text-subtitle-2 text-capitalize">Specifications</v-tab>
      <v-tab class="text-subtitle-2 text-capitalize">Support</v-tab>
      <v-tab class="text-subtitle-2 text-capitalize">Reviews</v-tab>
      <v-tab class="text-subtitle-2 text-capitalize">Package</v-tab>
      <v-tab-item>
         <v-card>
      <v-card-text>
      <p class="text-subtitle-2 my-1 py-0"><v-icon>mdi-web</v-icon> Payment &amp; Offers</p>
      <p class="text-caption my-1 py-0">Payment Methods:</p>
      <v-avatar size="32" class="rounded"><img src="/storage/logo/payment/cash.png"></v-avatar>
      <v-avatar size="32" class="rounded"><img src="/storage/logo/payment/mpesa.png"></v-avatar>      
      <v-avatar size="32" class="rounded"><img src="/storage/logo/payment/equity.png"></v-avatar>
      <v-avatar size="32" class="rounded"><img src="/storage/logo/payment/kcb.png"></v-avatar>
      <v-avatar size="32" class="rounded"><img src="/storage/logo/payment/visa.png"></v-avatar>
      <v-avatar size="32" class="rounded"><img src="/storage/logo/payment/mastercard.png"></v-avatar>
      <v-avatar size="32" class="rounded"><img src="/storage/logo/payment/paypal.png"></v-avatar>
      <v-avatar size="32" class="rounded"><img src="/storage/logo/payment/payoneer.png"></v-avatar>
      <comp-summary-tags class="mb-2" title="Promotions" :tags="promotions"></comp-summary-tags>
      <v-divider></v-divider>
      <p class="text-subtitle-2 my-1 py-0"><v-icon>mdi-web</v-icon>Shipping &amp; Delivery</p>
       <p class="text-caption">Shipping regions: Nairobi, Naivasha, Nakuru, Eldoret, Bungoma</p>
       <p class="text-caption">Choose your location</p>
        <v-row no-gutters>
          <v-col cols="6" class="pr-1">
            <v-select dense outlined label="Region" placeholder="Choose region ..." :items="regions" item-value="id" item-text="name"></v-select>
          </v-col>
          <v-col cols="6" class="pl-1">
             <v-select dense outlined label="Town" placeholder="Choose town ..." :items="regions" item-value="id" item-text="name"></v-select>
            </v-col>
        </v-row>
        <p class="text-caption">Door Delivery</p>
        <p class="text-caption">Pickup Station</p>
      <v-divider></v-divider>
      <p class="text-subtitle-2 ma-0 pa-1"><v-icon>mdi-web</v-icon>Returns &amp; Refund</p>
      <v-list dense class="mt-n3 pa-0">
        <v-list-item class="ma-0 pa-1">
          <v-list-item-content>
            <v-list-item-subtitle class="text-caption">
              <v-icon small color="primary">mdi-check-circle-outline</v-icon>In 7 days return accepted<sup><v-icon x-small>mdi-help-circle-outline</v-icon></sup>
            </v-list-item-subtitle>
            <v-list-item-subtitle class="text-caption">
              <v-icon small color="primary">mdi-check-circle-outline</v-icon>Buyer meets return costs<sup><v-icon x-small>mdi-help-circle-outline</v-icon></sup>
            </v-list-item-subtitle>
            <v-list-item-subtitle class="text-caption">
              <v-icon small color="primary">mdi-check-circle-outline</v-icon>100% refund on good condition<sup><v-icon x-small>mdi-help-circle-outline</v-icon></sup>
            </v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-card-text>
    <comp-summary-tags title="Recommended Uses" :tags="uses"></comp-summary-tags>
    <comp-summary-avatars title="Similar Brands" :avatars="values"></comp-summary-avatars>
         </v-card>
      </v-tab-item>
      <v-tab-item>
        <v-card>
          <v-card-title class="headline">Design Specifications</v-card-title>
          <v-subheader class="text-h6">Design Components</v-subheader>
          <v-card-text>
          <v-list dense>
            <v-row no-gutters>
                <v-col cols="3">
                    <v-list-item><v-list-item-subtitle class="text-subtitle-2">Authentication</v-list-item-subtitle></v-list-item>
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-subtitle v-for="permission in licence.permissions" :key="permission"><v-icon color="primary" dense>mdi-check-circle-outline</v-icon>{{ permission }}</v-list-item-subtitle></v-list-item-content>
                </v-list-item>
                </v-col>
                <v-col cols="3">
                    <v-list-item><v-list-item-subtitle class="text-subtitle-2">Forms</v-list-item-subtitle></v-list-item>
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-subtitle v-for="limitation in licence.limitations" :key="limitation"><v-icon color="primary" dense>mdi-close-circle-outline</v-icon>{{ limitation }}</v-list-item-subtitle></v-list-item-content>
                </v-list-item>
                </v-col>
                <v-col cols="6">
                    <v-list-item><v-list-item-subtitle class="text-subtitle-2">Modules</v-list-item-subtitle></v-list-item>
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-subtitle v-for="condition in licence.conditions" :key="condition"><v-icon color="primary" dense>mdi-information-outline</v-icon>{{ condition }}</v-list-item-subtitle></v-list-item-content>
                </v-list-item>
                </v-col>
            </v-row>
        </v-list>
          </v-card-text>
          <v-subheader class="text-h6">Compatible Browsers</v-subheader>
          <v-subheader class="text-h6">Design Architecture</v-subheader>          
        </v-card>
      </v-tab-item>
      <v-tab-item>

      </v-tab-item>
      <v-tab-item>
        <v-card>
          <v-list three-line dense>
          <template v-for="(item, index) in items">
            <v-subheader v-if="item.header" :key="item.header" v-text="item.header"></v-subheader>
            <v-divider v-else-if="item.divider" :key="index" :inset="item.inset" ></v-divider>
            <v-list-item v-else :key="item.title">
              <v-list-item-avatar><v-img :src="item.avatar"></v-img></v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title v-html="item.title"></v-list-item-title>
                <v-list-item-subtitle v-html="item.subtitle" ></v-list-item-subtitle>
              </v-list-item-content>
              <v-list-item-action><v-list-item-action-text v-text="item.action"></v-list-item-action-text></v-list-item-action>
            </v-list-item>
          </template>
        </v-list>
        </v-card>
      </v-tab-item>
      <v-tab-item>
        <p>Box Contents</p>
      </v-tab-item>
      <v-tab-item>
        <v-card>
          <v-subheader class="text-h6">Licence Information</v-subheader>
          <v-card-text>
            <p class="text-subtitle-1">{{ licence.name }}</p>
          <p class="text-body-2">{{ licence.description }}</p>
          <v-list dense>
            <v-row no-gutters>
                <v-col cols="3">
                    <v-list-item><v-list-item-subtitle class="text-subtitle-2">Permissions</v-list-item-subtitle></v-list-item>
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-subtitle v-for="permission in licence.permissions" :key="permission"><v-icon color="primary" dense>mdi-check-circle-outline</v-icon>{{ permission }}</v-list-item-subtitle></v-list-item-content>
                </v-list-item>
                </v-col>
                <v-col cols="3">
                    <v-list-item><v-list-item-subtitle class="text-subtitle-2">Limitations</v-list-item-subtitle></v-list-item>
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-subtitle v-for="limitation in licence.limitations" :key="limitation"><v-icon color="primary" dense>mdi-close-circle-outline</v-icon>{{ limitation }}</v-list-item-subtitle></v-list-item-content>
                </v-list-item>
                </v-col>
                <v-col cols="6">
                    <v-list-item><v-list-item-subtitle class="text-subtitle-2">Conditions</v-list-item-subtitle></v-list-item>
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-subtitle v-for="condition in licence.conditions" :key="condition"><v-icon color="primary" dense>mdi-information-outline</v-icon>{{ condition }}</v-list-item-subtitle></v-list-item-content>
                </v-list-item>
                </v-col>
            </v-row>
        </v-list>
        <p class="text-caption">This is not legal advice. Learn more about terms and conditions. </p>
          </v-card-text>
        </v-card>
      </v-tab-item>
    </v-tabs>  
  </div>
</template>

<style lang="scss" scoped>

</style>