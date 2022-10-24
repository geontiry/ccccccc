<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const icons = ref([ 'mdi-facebook', 'mdi-twitter', 'mdi-linkedin', 'mdi-instagram', ])

    const linksupports = ref ([
      {title: 'Brenden Account', href: route('eweb.support.account') },
      {title: 'Brenden Shopping', href: route('eweb.support.shopping') },
      {title: 'Brenden Orders', href: route('eweb.support.orders'), },
      {title: 'Brenden Partners', href: route('eweb.support.partners') },
      {title: 'Brenden FAQ', href: route('eweb.support.faq') },
      {title: 'Interested in Us', href: route('eweb.support.interest') },
      {title: 'Payment & Rewards', href: route('eweb.support.paymentoffers') },
      {title: 'Shipping & Delivery', href: route('eweb.support.shippingdelivery') },
      {title: 'Returns & Refund', href: route('eweb.support.returnrefund') }, 
    ])

    const linkproducts = ref ([
      {title:'ECommerce Websites', href: route('eweb.websites.ecommerce')},
      {title:'Corporate Websites', href: route('eweb.websites.corporate')},
      {title:'Agency Websites', href: route('eweb.websites.corporate')},
      {title:'Institution Websites', href: route('eweb.websites.institution')},
      {title:'Religious Websites', href: route('eweb.websites.institution')},
      {title:'Multimedia Websites', href: route('eweb.websites.institution')},
      {title:'Social Websites', href: route('eweb.websites.institution')},
      {title:'Dashboard Websites',  href: route('eweb.websites.personal')},
      {title:'Personal Websites',  href: route('eweb.websites.personal')}
    ])

    const linkservices = ref([
      {title:'Web Design', href: route('eweb.design')},
      {title:'Web Domain', href: route('eweb.domain')},
      {title:'Web Hosting', href: route('eweb.host')},
      {title:'Web Integration', href: route('eweb.integrate')},
      {title:'Web Learning', href: route('eweb.learn')},
      {title:'Web Hiring', href: route('eweb.hire')},
    ])

    const linksbrenden = ref([
          {title:'Brenden Web',  href: '', active: true},
          {title:'Brenden Cyber', href:'', active: true},
          {title:'Brenden Studio', href:'', active: true},
          {title:'Brenden Garden', href:'', active: true},
          {title:'Brenden Library', href:'', active: true},
          {title:'Brenden Bookshop', href:'', active: true},
          {title:'Brenden Press', href:'', active: true},
          {title:'Brenden Estate', href:'', active: true},
          {title:'Brenden Logistics', href:'', active: true},
        ])
    
    const linksgenset = ref([
          {title:'SynVast Electrical', href:'', active: true},
          {title:'SynVast Electronics', href:'', active: true},
          {title:'SynVast Automation', href:'', active: true},
          {title:'SynVast Computing', href:'', active: true},
          {title:'SynVast Construction', href:'', active: true},
          {title:'SynVast Architect', href:'', active: true},
          {title:'SynVast Automobile', href:'', active: true},
          {title:'SynVast Agriculture', href:'', active: true},
          {title:'SynVast Industrial', href:'', active: true},
        ])    
    return { linksupports, linkproducts, linkservices, linksbrenden, linksgenset } 
  }
} 
</script>

<template>
  <div>
    <v-footer padlss class="indigo">
      <v-row no-gutters class="white--text">
          <v-col cols="12" sm="6" md="4">
            <p class="text-subtitle-1 text-center ma-1"><v-avatar size="28"><img src="https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo" alt="John"></v-avatar>About Brenden Web</p>
            <v-row>
              <v-col cols="6">
                <p  class="text-caption my-1">Brenden Web is a amen quem nulla quae legam nulla quae legam <a href="#">more</a></p>
                  <v-btn x-small icon><v-icon color="white">mdi-facebook</v-icon></v-btn>
                  <v-btn x-small icon><v-icon color="white">mdi-twitter</v-icon></v-btn>
                  <v-btn x-small icon><v-icon color="white">mdi-linkedin</v-icon></v-btn>
                  <v-btn x-small icon><v-icon color="white">mdi-instagram</v-icon></v-btn>
                  <v-btn x-small icon><v-icon color="white">mdi-youtube</v-icon></v-btn>
                <p class="text-subtitle-1 ma-0">Our Newsletter</p>
                <v-text-field  dense persistent-hint label="Email" append-icon="mdi-send" hint="Subscribe &amp; stay up-to-date"></v-text-field>
                <p class="text-subtitle-1 ma-0">Our Mobile App</p>
                <v-row no-gutters>
                  <v-col cols="6"><v-img src="/storage/eweb/logo/appstore/google.png"></v-img></v-col>
                  <v-col cols="6"><v-img src="/storage/eweb/logo/appstore/apple.png"></v-img></v-col>
                  </v-row>
              </v-col>
              <v-col cols="6">
                <p class="text-subtitle-2 ma-1">Customer Support</p>
                <v-list-item-subtitle v-for="linksupport in linksupports" :key="linksupport.name"><v-icon dense color="primary" class="pr-2">mdi-chevron-double-right</v-icon><a class="white--text" :href="linksupport.href">{{ linksupport.title }}</a></v-list-item-subtitle>   
              </v-col>
            </v-row>          
          </v-col>
          <v-col cols="12" sm="6" md="4" class="links">
            <p class="text-subtitle-1 text-center ma-1">Our Web Solutions</p>
            <v-row>
              <v-col cols="6">
                <p class="text-subtitle-2 ma-1"> E-Web Products</p>
                <v-list-item-subtitle v-for="linkproduct in linkproducts" :key="linkproduct.name"><v-icon dense color="primary" class="pr-2">mdi-chevron-double-right</v-icon><a class="white--text" :href="linkproduct.href">{{ linkproduct.title }}</a></v-list-item-subtitle>
              </v-col>
              <v-col cols="6">
                <p class="text-subtitle-2 ma-1"> E-Web Services</p>
                <v-list-item-subtitle v-for="linkservice in linkservices" :key="linkservice.name"><v-icon dense color="primary" class="pr-2">mdi-chevron-double-right</v-icon><a class="white--text" :href="linkservice.href">{{ linkservice.title }}</a></v-list-item-subtitle>
              </v-col>
            </v-row>          
          </v-col>
          <v-col cols="12" sm="6" md="4" class="links">
            <p class="text-subtitle-1 text-center ma-1">Our Partner Solutions</p>
            <v-row>
              <v-col cols="6">
                <p class="text-subtitle-2 ma-1">Brenden Technology</p>
                <v-list-item-subtitle v-for="linkbrenden in linksbrenden" :key="linkbrenden.name" v-show="linkbrenden.active"><v-icon dense color="primary" class="pr-2">mdi-chevron-double-right</v-icon><a class="white--text" :href="linkbrenden.href">{{ linkbrenden.title }}</a></v-list-item-subtitle>
              </v-col>
              <v-col cols="6">
                <p class="text-subtitle-2 ma-1">SynVast Engineering</p>
                <v-list-item-subtitle v-for="linkgenset in linksgenset" :key="linkgenset.name" v-show="linkgenset.active"><v-icon dense color="primary" class="pr-2">mdi-chevron-double-right</v-icon><a class="white--text" :href="linkgenset.href">{{ linkgenset.title }}</a></v-list-item-subtitle>
              </v-col>
            </v-row>          
          </v-col>
        </v-row>
        <v-row class="white--text">
          <v-col cols="12" class="text-center">
            <v-divider class="ma-0"></v-divider>
            <p class="text-caption ma-1">
               <a :href="route('eweb.support.privacy')">Privacy Policy</a> | <a :href="route('eweb.support.cookies')">Cookies Policy</a>  | <a :href="route('eweb.support.terms')">Terms of Service</a>
              </p>
              <p class="text-caption"><strong>Brenden Web</strong> is a subsidiary of <strong>Brenden Tech</strong> registered in Kenya</p>
              <p class="text-caption"><v-icon small>mdi-copyright</v-icon> 2019 - {{ new Date().getFullYear() }} —  All Rights Reserved | Powered by <strong><a :href="route('eweb.home')">Brenden Web</a></strong></p>
          </v-col>
          
        </v-row>
    </v-footer>
  </div>
</template>

<style scoped>
 
</style>