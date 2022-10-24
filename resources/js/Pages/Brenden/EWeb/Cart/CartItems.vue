<template>
  <div>
    <v-card-title class="text-h5 ma-2 pa-1">Shopping Cart Review <v-spacer></v-spacer> <span class="grey--text"> {4 Items}</span></v-card-title>
    <v-simple-table fixed-header height="500px">
      <template v-slot:default>
        <thead>
          <tr>
            <th class="text-left">#</th>
            <th class="text-left">Item Description</th>
            <th class="text-left">Total Cost</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(item, index) in items" :key="item.title">
            <td>{{index+1 }}</td>
            <td>
              <div class="d-flex">
                <v-avatar tile size="52" color="blue" class="mx-1 my-2 rounded"><v-img src="https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg"></v-img></v-avatar>
                <div>
                  <v-card-title class="text-subtitle-2 ma-0 px-0 py-1 text-truncate">{{ item.title }}<v-spacer></v-spacer><span class="text-caption">@{{ item.price }}/{{ item.cycle }}</span></v-card-title>
                  <v-card-text class="ma-0 pa-0">
                    <p class="text-caption grey--text font-weight-medium ">{{ item.description }}</p>
                  </v-card-text>
                </div>
              </div>              
              <v-checkbox dense readonly input-value="true" color="primary" class="my-n6 py-n1" v-for="addon in item.addons" :key="addon.name">
                  <template v-slot:label><div class="text-subtitle-2">{{ addon.title }}<em class="text-caption">@{{ addon.price }}/{{ addon.cycle }}</em></div></template>
                </v-checkbox>
              <v-card-actions>
                <v-menu>
                  <template v-slot:activator="{ on: menu, attrs }">
                    <v-tooltip bottom>
                      <template v-slot:activator="{ on: tooltip }">
                         <v-btn x-small dark color="primary" v-bind="attrs"  v-on="{ ...tooltip, ...menu }"><v-icon small>mdi-cart-plus</v-icon><span class="hidden-xs-only">Addon</span></v-btn>
                      </template>
                      <span>Add Configuration Package</span>
                    </v-tooltip>
                  </template>
                  <v-card width="400">
                    <v-card-title>Additional Package</v-card-title>
                    <v-card-text>
                    </v-card-text>
                  </v-card>
                </v-menu>
                 <v-btn x-small color="primary" dark><v-icon small>mdi-refresh-circle</v-icon><span class="hidden-xs-only">Configure</span></v-btn>
                  <v-btn x-small color="primary" dark><v-icon small>mdi-heart</v-icon><span class="hidden-xs-only">Move</span></v-btn>
                  <v-btn x-small color="primary" dark><v-icon small>mdi-file-document</v-icon><span class="hidden-xs-only">Move</span></v-btn>
                  <v-btn x-small color="primary" dark><v-icon small>mdi-cart-minus</v-icon><span class="hidden-xs-only">Remove</span></v-btn>
              </v-card-actions>
            </td>
            <td>Ksh. {{  }}</td>
          </tr>
        </tbody>
      </template>
    </v-simple-table>
  </div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
  components: {},
  props: {},
  data: () => {
    return {
      items: [
        {
          title: 'Cloud Hosting - Gold Cloud Plan',
          description: 'Secondary line text Lorem ipsum dolor sit amet, line text Lorem ipsum dolor sit amet line text Lorem ipsum dolor sit amet',
          price: 4500,
          cycle: 'year',
          addons: [
            { title: 'Cloudoon Ready-made Sites', description: 'Secondary line text Lorem ipsum dolor sit amet, line tsum dolor sit amet', price: 250, cycle: 'quota', },
            { title: 'Installation and Setting up', description: 'Secondary line text Lorem ipsum dolor sit amet, line tsum dolor sit amet', price: 499, cycle: 'month', },
            ],
        },
        {
          title: 'Cloud Hosting - Gold Cloud Plan',
          description: 'Secondary line text Lorem ipsum dolor sit amet, line text Lorem ipsum dolor sit amet line text Lorem ipsum dolor sit amet',
          price: 1540,
          cycle: 'year',
          addons: [
            { title: 'Installation and Setting up', description: 'Secondary line text Lorem ipsum dolor sit amet, line tsum dolor sit amet', price: 499, cycle: 'month', },
          ],
        },
        {
          title: 'Cloud Hosting - Gold Cloud Plan',
          description: 'Secondary line text Lorem ipsum dolor sit amet, line text Lorem ipsum dolor sit amet line text Lorem ipsum dolor sit amet',
          price: 7512,
          cycle: 'year',
          addons: [
            { title: 'Cloudoon Ready-made Sites', description: 'Secondary line text Lorem ipsum dolor sit amet, line tsum dolor sit amet', price: 250, cycle: 'quota', },
          ]
        },
      ]
    };
  },
  watch: {},
  methods: {},
};
</script>
<style scoped>
</style>