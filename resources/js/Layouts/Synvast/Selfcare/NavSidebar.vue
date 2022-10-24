<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {
    sdb: { type: Boolean, required: true},
  },

  setup (props, ctx) {
    const items = ref([
        {
          title: 'My Account', action: 'mdi-account ', active: true,
          links: [
            { title: 'Profile', href: route('selfcare.profile') },
            { title: 'Billing', href: route('selfcare.billing') },
            { title: 'Payment', href: route('selfcare.payment') },
            { title: 'Wallet', href: route('selfcare.wallet') },
          ]
        },
        {
          title: 'My Shopping', action: 'mdi-briefcase-account',
          links: [
            { title: 'Orders', href: route('selfcare.orders') },
            { title: 'Invoice' },
            { title: 'Track' },
            { title: 'Reviews', href: route('selfcare.reviews') },
          ],
        },
        {
          title: 'My Activity', action: 'mdi-shield-account',
          links: [
            { title: 'History', href: route('selfcare.history') },
            { title: 'Recent Views' },
            { title: 'Recommendations' },
          ],
        },
        {
          title: 'My Inbox', action: 'mdi-comment-account',
          links: [
            { title: 'Messages', href: route('selfcare.messages') },
            { title: 'Alerts' },
            { title: 'Newsletter' },
          ],
        },
        {
          title: 'My Listing', action: 'mdi-folder-account', href: route('selfcare.listing')
        },
        {
          title: 'My Settings', action: 'mdi-target-account', href: route('selfcare.settings')
        },
      ],)
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-list dense nav rounded>
      <template v-for="item in items">
        <v-list-group  no-action v-model="item.active" v-if="item.links" :key="item.title">
        <template v-slot:activator><v-list-item-content><v-list-item-title><v-icon dense class="mr-2">{{ item.action }}</v-icon>{{ item.title }}</v-list-item-title></v-list-item-content></template>
        <v-list-item v-for="link in item.links" :key="link.title" :href="link.href">
          <v-list-item-content><v-list-item-title v-text="link.title"></v-list-item-title></v-list-item-content>
        </v-list-item>
      </v-list-group>
      <v-list-item :href="item.href" v-else :key="item.title"><v-icon dense class="mr-2">{{ item.action }}</v-icon><v-list-item-title v-text="item.title"></v-list-item-title></v-list-item>
      </template>
      
    </v-list>
    
  </div>
</template>

<style scoped>
</style>