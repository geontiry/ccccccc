<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
      sdb: { type: Boolean, required: true},
  },

  setup (props, ctx) {
    const open = ref(false)
    const profileitems = ref([
        { icon: 'mdi-account-circle-outline', title: 'My Profile' },
        { icon: 'mdi-account-circle-outline', title: 'My Shopping' },
        { icon: 'mdi-account-circle-outline', title: 'My History' },
        { icon: 'mdi-briefcase-account-outline', title: 'My Wallet' },
        { icon: 'mdi-account-cog-outline', title: 'My Settings' },
        { icon: 'mdi-account-cog-outline', title: 'My Contact' },
    ])

    const logout = ()=>{ 
            axios.post(route('logout'))
                    .then(response => {
                        window.location.reload()
                        //this.dialoglogin = !this.dialoglogin
                })
        }
    
    return { open, profileitems, logout } 
  }
} 
</script>

<template>
  <div>
      <v-menu offset-y transition="scale-transition" bottom>
            <template v-slot:activator="{ on, attrs }">
                <v-list-item v-if="sdb">
                    <v-list-item-avatar v-bind="attrs" v-on="on"><img :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name"></v-list-item-avatar>
                    <v-list-item-content v-bind="attrs" v-on="on"><v-list-item-title>{{ $page.props.user.name }} <v-icon>mdi-chevron-down</v-icon></v-list-item-title></v-list-item-content>
                </v-list-item>
                <v-btn text small v-else v-bind="attrs" v-on="on" @click="open = !open">
                    <v-avatar size="30"><img  :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name"></v-avatar>
                    <span>{{ $page.props.user.name }} <v-icon >{{ open ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon></span>
                </v-btn>
            </template>
            <v-list dense>
                <v-list-item v-for="(profileitem, index) in profileitems"  :key="index">
                    <v-list-item-title><a :href="route('profile.show')"><v-icon>{{ profileitem.icon }}</v-icon>{{ profileitem.title }}</a></v-list-item-title>
                </v-list-item>
                <v-divider></v-divider>
                <v-list-item>
                    <v-list-item-title><a @click.stop="logout()"><v-icon>mdi-account-off-outline</v-icon>Logout</a></v-list-item-title>
                </v-list-item>
            </v-list>
        </v-menu>
  </div>
</template>

<style scoped>
 
</style>