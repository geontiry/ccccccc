<template>
  <div>
    <v-app-bar color="deep-purple accent-4" dense extended dark src="https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg">
    <v-app-bar-nav-icon @click.stop="drawer = !drawer" class="hidden-sm-and-up"></v-app-bar-nav-icon>
    <v-avatar size="36" class="hidden-xs-only"><a :href="route('home')"><img src="https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo" alt="John"> </a></v-avatar>
    <v-app-bar-title class="hidden-xs-only"><a  :href="route('home')" class="white--text">Brenden Web</a></v-app-bar-title>
    <v-spacer></v-spacer>
    <v-text-field append-icon="mdi-microphone" flat hide-details label="Search" prepend-inner-icon="mdi-magnify" solo-inverted dense>
        <v-avatar size="36" slot="prepend" class="hidden-sm-and-up"><a :href="route('home')"><img src="https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo" alt="John"> </a></v-avatar>
        <v-app-bar-title slot="" class="hidden-sm-and-up"><a  :href="route('home')" class="white--text">Brenden Web</a></v-app-bar-title>
    </v-text-field>
    <v-spacer class="hidden-xs-only"></v-spacer> 
    <nav-auth class="hidden-xs-only"></nav-auth>
    <nav-track class="hidden-xs-only">></nav-track>
    <nav-support class="hidden-xs-only">></nav-support>
    <nav-sites></nav-sites>
    <!-- Nav Bar-->
    <template v-slot:extension>
        <nav-links class="hidden-xs-only"></nav-links>
        <v-spacer class="hidden-xs-only"></v-spacer><nav-support class="hidden-sm-and-up"></nav-support>                
        <v-spacer class="hidden-sm-and-up"></v-spacer><nav-track class="hidden-sm-and-up"></nav-track>
        <v-spacer class="hidden-sm-and-up"></v-spacer><nav-messages></nav-messages>
        <v-spacer class="hidden-sm-and-up"></v-spacer><nav-compare></nav-compare>
        <v-spacer class="hidden-sm-and-up"></v-spacer><nav-favorites></nav-favorites>
        <v-spacer class="hidden-sm-and-up"></v-spacer><nav-quotations></nav-quotations>
        <v-spacer class="hidden-sm-and-up"></v-spacer><nav-cart></nav-cart>
    </template>
</v-app-bar>
        <v-navigation-drawer v-model="drawer" absolute left temporary app>
            <template v-slot:prepend>
                <v-menu offset-y transition="scale-transition" bottom  v-if="$page.props.user">
                    <template v-slot:activator="{ on, attrs }">
                        <v-list-item>
                            <v-list-item-avatar v-bind="attrs" v-on="on"><img :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name"></v-list-item-avatar>
                            <v-list-item-content v-bind="attrs" v-on="on"><v-list-item-title>{{ $page.props.user.name }} <v-icon>mdi-chevron-down</v-icon></v-list-item-title></v-list-item-content>
                        </v-list-item>
                    </template>
                    <v-list>
                <v-list-item v-for="(profileitem, index) in profileitems"  :key="index">
                    <v-list-item-title><a :href="route('profile.show')"><v-icon>{{ profileitem.icon }}</v-icon>{{ profileitem.title }}</a></v-list-item-title>
                </v-list-item>
                <v-divider></v-divider>
                <v-list-item>
                    <v-list-item-title><a @click.stop="logout()"><v-icon>mdi-power</v-icon>Logout</a></v-list-item-title>
                </v-list-item>
            </v-list>
        </v-menu> 
        <template v-else>
            <v-list-item class="justify-space-around ">
                <v-btn color="primary" dark rounded small @click.stop="openLogin()"><v-icon left>mdi-account-circle</v-icon><span>Login</span></v-btn>
                <v-btn color="primary" dark rounded small @click.stop="openSignup()"><v-icon left>mdi-account-plus</v-icon><span>Signup</span></v-btn>
            </v-list-item>
            </template>
            </template>    
            <v-divider></v-divider>
            <v-list nav dense>
                <v-list-item-group v-model="group" active-class="deep-purple--text text--accent-4">                      
                <v-list-item v-for="item in items" :key="item.title">
                    <v-list-item-icon><v-icon>{{ item.icon }}</v-icon></v-list-item-icon>
                    <v-list-item-content><v-list-item-title>{{ item.title }}</v-list-item-title></v-list-item-content>
                    </v-list-item>
                </v-list-item-group>
            </v-list>
             <v-divider></v-divider>
            <span><v-icon>mdi-map-marker</v-icon>Nakuru</span><br>
            <span><v-icon>mdi-phone-message</v-icon>0716285824</span><br>
            <span><v-icon>mdi-gmail</v-icon>info@brendentech.co.ke</span>     
            <v-divider></v-divider>
            <v-btn text small fab v-on="on" href="/"><v-icon>mdi-facebook</v-icon></v-btn>
            <v-btn text small fab v-on="on" href="/"><v-icon>mdi-twitter</v-icon></v-btn>
            <v-btn text small fab v-on="on" href="/"><v-icon>mdi-linkedin</v-icon></v-btn>
            <v-btn text small fab v-on="on" href="/"><v-icon>mdi-instagram</v-icon></v-btn>
        </v-navigation-drawer> 
  </div>
</template>

<script>
import NavAuth from "@/Layouts/Brenden/Header/NavAuth.vue";
import NavTrack from "@/Layouts/Brenden/Header/NavTrack.vue";
import NavSupport from "@/Layouts/Brenden/Header/NavSupport.vue";
import NavSites from "@/Layouts/Brenden/Header/NavSites.vue";
import NavLinks from "@/Layouts/Brenden/Header/NavLinks.vue";
import NavMessages from "@/Layouts/Brenden/Header/NavMessages";
import NavCompare from "@/Layouts/Brenden/Header/NavCompare.vue";
import NavFavorites from "@/Layouts/Brenden/Header/NavFavorites.vue";
import NavQuotations from "@/Layouts/Brenden/Header/NavQuotations";
import NavCart from "@/Layouts/Brenden/Header/NavCart.vue";
export default {
    props: {},
    components: {
        NavAuth,
        NavTrack,
        NavSupport,
        NavSites,
        NavLinks,
        NavMessages,
        NavCompare,
        NavFavorites,
        NavQuotations,
        NavCart,
    },
    data: ()=>{
      return {
        drawer: false, group: null, 
        items: [
            { link: route('home'), icon: 'mdi-home-outline', title: 'Home'},
            { link: route('about'), icon: 'mdi-bank-outline', title: 'About', },
            { link: route('websites'), icon: 'mdi-web', title: 'Websites', },
            { link: route('design'), icon: 'mdi-monitor-cellphone-star', title: 'Design', },
            { link: route('domain'), icon: 'mdi-television-stop', title: 'Domain', },
            { link: route('host'), icon: 'mdi-desktop-tower-monitor', title: 'Host', },
            { link: route('integrate'), icon: 'mdi-monitor-screenshot', title: 'Integrate', },
            { link: route('learn'), icon: 'mdi-monitor-dashboard', title: 'Learn', },
            { link: route('hire'), icon: 'mdi-smart-card-reader-outline', title: 'Hire', },
        ],
    }
    },
    watch: {
        group () {
            this.drawer = false
        },
    },
    methods: {
        
  },

};
</script>

<style scoped>
</style>