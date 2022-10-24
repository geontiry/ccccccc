<template>
  <div>
    <p class="text-h5">Website Details</p>
    <v-tabs>
      <v-tab class="text-subtitle-2 text-capitalize">Description</v-tab>
      <v-tab class="text-subtitle-2 text-capitalize"><v-icon dense>mdi-code-not-equal-variant</v-icon>Specifications</v-tab>
      <v-tab class="text-subtitle-2 text-capitalize">Reviews</v-tab>
      <v-tab class="text-subtitle-2 text-capitalize">Changelog</v-tab>
      <v-tab class="text-subtitle-2 text-capitalize"><v-icon dense>mdi-license</v-icon>Licence</v-tab>
      <v-tab-item>
         <v-card>
           <v-subheader>Website Description</v-subheader>
         <p>Arsha is a clean and modern business Bootstrap template designed specifically for startup, apps and IT services. 
          You will be able to showcase your content on mobile devices such as smartphones, tablets and all types of devices. Arsha’s design is 
          driven by minimalist and unique sections. With this template pixel-perfect layout and neat sectioning, it will help you create a 
          professional-looking website for your business in no time.
          Arsha is built with the latest web technologies (Bootstrap framework, Sass, NodeJS, Gulp, etc.) with the care of coding quality to make 
          sure the template works with all browsers, devices with all screen sizes.</p>
        <p>Some of notable include:</p>
        <ol>
          <li>Fully responsive template</li>
          <li>Latest Bootstrap version</li>
          <li>NodeJS/NPM and Gulp version available (pro unlimited and membership users only)</li>
          <li>Clean and modern design</li>
          <li>PHP/Ajax contact form script (pro version only)</li>
          <li>Latest Bootstrap version</li>
          <li>Animation on scroll effects</li>
          <li>Clean code and easy to customize</li>
          <li>Off-canvas mobile menu</li>
          <li>Nice responsive pricing boxes</li>
          <li>Filterable portfolio page</li>
          <li>Portfolio with lightbox support</li>
          <li>SEO Optimized</li>
          <li>Responsive video, object, embed</li>
          <li>Cross Browser compatible</li>
        </ol>
        <p>The version of the Arsha Template created with the Bootstrap v5.0 Beta is also available for free download!</p>
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
        
     <v-card>
       <v-subheader>Changelog Timeline</v-subheader>
    <v-card-text class="py-0">
      <v-timeline align-top dense>
        <v-timeline-item color="pink" small>
          <v-row class="pt-1">
            <v-col cols="3"><strong>12 Dec 2020</strong></v-col>
            <v-col><strong>Version 2.3.2</strong><div class="caption">- Updated Bootstrap to version 4.5.3
  - Updated all outdated third party vendor libraries to their latest versions
  - Updated the PHP Email Form to v2.3
  - Other small fixes and improvements</div></v-col>
          </v-row>
        </v-timeline-item>
        <v-timeline-item color="teal lighten-3" small>
          <v-row class="pt-1">
            <v-col cols="3"><strong>12 Dec 2020</strong></v-col>
            <v-col><strong>Version 2.3.2</strong><div class="caption mb-2">- Updated Bootstrap to version 4.5.2
  - Updated all outdated third party vendor libraries to their latest versions-Updated all outdated third party vendor libraries to their latest versions</div></v-col>
          </v-row>
        </v-timeline-item>
        <v-timeline-item color="pink" small>
          <v-row class="pt-1">
            <v-col cols="3"><strong>12 Dec 2020</strong></v-col>
            <v-col><strong>Version 2.3.2</strong></v-col>
          </v-row>
        </v-timeline-item>
        <v-timeline-item color="teal lighten-3" small >
          <v-row class="pt-1">
            <v-col cols="3"><strong>12 Dec 2020</strong></v-col>
            <v-col><strong>Version 2.3.2</strong><div class="caption">Initial Release</div></v-col>
          </v-row>
        </v-timeline-item>
      </v-timeline>
    </v-card-text>
  </v-card>

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

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
  components: {},
  props: {},
  //mixins: [mixin],
  data: function () {
    return {
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
    }
  },
  computed: {},
  watch: {},
  methods: {}
};
</script>

<style lang="scss" scoped>

</style>