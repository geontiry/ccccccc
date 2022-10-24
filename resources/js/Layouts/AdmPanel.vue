<script>
import AdmSidebar from "@/Layouts/Admin/AdmSidebar"
import AdmSupp from "@/Layouts/Admin/AdmSupp.vue"
import SBinaryClock from "@/Components/SBinaryClock.vue"
import NavEvents from "@/Layouts/Admin/Navbar/NavEvents.vue"
import VNavBreadcrumb from "@/Components/Nav/VNavBreadcrumb.vue";
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 
  
export default { 
  components: { SBinaryClock, AdmSidebar, NavEvents, AdmSupp, VNavBreadcrumb },
  props: {
    title: {type: String, required: false}
  },

  setup (props, ctx) {
    const state = reactive({
      toggleMini: false,
      drawer: false,
      group: null
    })
    
    const mini = computed(()=>$vuetify.breakpoint.smAndDown || state.toggleMini)

    watch(() => state.group, async (val) => state.drawer = false)
    
  // const toggleTheme = ()=> $vuetify.theme.dark = !$vuetify.theme.dark

    return { ...toRefs(state), mini, } 
  }
} 
</script>

<template>
    <v-app>
      <v-main>
        <!-- Adm Sidebar-->
        <v-navigation-drawer app floating permanent mini-variant-width="60">
        <!-- <v-navigation-drawer app floating permanent mini-variant-width="60" :expand-on-hover="toggleMini" :mini-variant.sync="mini"> -->
          <v-fab-transition><v-btn color="transparent" fab  x-small absolute top right dark class="mt-4"><v-icon small color="blue">mdi-record-circle-outline</v-icon></v-btn></v-fab-transition>
          <!-- <v-fab-transition><v-btn color="transparent" fab  x-small absolute top right dark class="mt-4" @click="toggleMini = !toggleMini"><v-icon small color="blue">mdi-record-circle-outline</v-icon></v-btn></v-fab-transition> -->
          <AdmSidebar class="fixed"></AdmSidebar>
        </v-navigation-drawer>
        <!-- Adm Header-->
              <v-app-bar color="deep-purple accent-4" src="https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg" dense dark >
              <s-binary-clock digital="true" binary="true" />
          <v-spacer></v-spacer>
          <v-text-field append-icon="mdi-microphone" class="mx-4" flat hide-details label="Search" prepend-inner-icon="mdi-magnify" solo-inverted dense></v-text-field>
          <v-spacer></v-spacer>
          <v-fade-transition mode="out-in"><v-icon :key="$vuetify.theme.dark" @click="$vuetify.theme.dark = !$vuetify.theme.dark">{{ $vuetify.theme.dark ? 'mdi-weather-sunny' : 'mdi-weather-night' }}</v-icon>
          </v-fade-transition>
          <v-tooltip bottom><template v-slot:activator="{ on, attrs }"><v-btn text small fab v-bind="attrs" v-on="on"><v-badge bordered top color="deep-purple accent-4" offset-x="10" offset-y="8" content="5"><v-icon>mdi-alert-octagon-outline</v-icon></v-badge></v-btn></template><span>Alerts</span></v-tooltip>
          <v-tooltip bottom><template v-slot:activator="{ on, attrs }"><v-btn text small fab v-bind="attrs" v-on="on"><v-badge bordered top color="deep-purple accent-4" offset-x="10" offset-y="8" content="5"><v-icon>mdi-bell-outline</v-icon></v-badge></v-btn></template><span>Notifications</span></v-tooltip>
          <v-tooltip bottom><template v-slot:activator="{ on, attrs }"><v-btn text small fab v-bind="attrs" v-on="on"><v-badge bordered top color="deep-purple accent-4" offset-x="10" offset-y="8" content="5"><v-icon>mdi-email-outline</v-icon></v-badge></v-btn></template><span>Messages</span></v-tooltip>
          <v-tooltip bottom><template v-slot:activator="{ on, attrs }">
            <v-btn text small fab v-bind="attrs" v-on="on" @click.stop="drawer = !drawer"><v-icon>mdi-dots-vertical-circle-outline</v-icon></v-btn>
            </template><span>Menu</span>
          </v-tooltip>
          <v-menu bottom left offset-y transition="scale-transition" origin="center center">
              <template v-slot:activator="{ on, attrs }">
                <v-avatar size="32" v-bind="attrs" v-on="on"><img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John"></v-avatar>
                </template>
                <v-list>
                  <v-list-item>
                    <v-list-item-avatar><v-img src="https://cdn.vuetifyjs.com/images/john.jpg"></v-img></v-list-item-avatar>
                    <v-list-item-content>
                      <v-list-item-title>Geoffrey Ontiri</v-list-item-title>
                      <v-list-item-subtitle>CEO/Founder</v-list-item-subtitle>
                    </v-list-item-content>
                    </v-list-item>
                    <v-list-item v-for="(profileitem, index) in profileitems"  :key="index">
                        <v-list-item-title><a :href="route('profile.show')"><v-icon>{{ profileitem.icon }}</v-icon>{{ profileitem.title }}</a></v-list-item-title>
                    </v-list-item>
                    <v-divider></v-divider>
                    <v-list-item>
                        <v-list-item-title><a @click.stop="logout()"><v-icon>mdi-account-off-outline</v-icon>Logout</a></v-list-item-title>
                    </v-list-item>
                </v-list>
            </v-menu>
        </v-app-bar>
        <v-navigation-drawer absolute right temporary app width="400" class="" v-model="drawer">
          <template v-slot:prepend></template>
          <v-tabs height="30">
            <v-tab class="text-subtitle-2 text-capitalize"><v-icon>mdi-apps</v-icon></v-tab>
            <v-tab class="text-subtitle-2 text-capitalize"><v-badge bordered top color="red accent-4" dot offset-x="10" offset-y="6"><v-icon>mdi-calendar-month-outline</v-icon></v-badge></v-tab>
            <v-tab class="text-subtitle-2 text-capitalize"><v-icon>mdi-truck-fast</v-icon></v-tab>
            <v-tab class="text-subtitle-2 text-capitalize"><v-icon>mdi-help-circle-outline</v-icon></v-tab>
            <v-tab class="text-subtitle-2 text-capitalize"><v-icon>mdi-cogs</v-icon></v-tab>
            <v-tab-item>Sites</v-tab-item>
            <v-tab-item>
              <v-card-title>Events</v-card-title>
              <nav-events></nav-events>
            </v-tab-item>
            <v-tab-item>Track Order</v-tab-item>
            <v-tab-item>Support Center</v-tab-item>
            <v-tab-item>Settings</v-tab-item>
          </v-tabs>
        </v-navigation-drawer>
        <!-- Adm Page-->
        <VNavBreadcrumb :title="title" />
            <slot></slot>
          <!-- Adm Supp-->
          <adm-supp></adm-supp>
        </v-main>
    </v-app>
</template>

<style style="css" scoped>
.fixed{
  position: fixed;
}
.v-list-item{
  max-width: 30em;
}
.v-tab{
  min-width: unset;
}
</style>
