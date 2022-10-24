<script>
import VMenuSidebar from "@/Components/Menu/VMenuSidebar.vue";
import { apiAdmin } from '@/Services/apis/admin' 
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api'
  
export default { 
  components: {VMenuSidebar },
  props: {},

  setup (props, ctx) {
    const { departments, dashboards } = apiAdmin()

    const state = reactive({
      mains: [
        { name: 'Dashboard', icon: 'mdi-account-circle', href:'admin.dashboard', active: false, },
        { name: 'Datatables', icon: 'mdi-account-circle', href:'admin.dashboard', active: false, },
        { name: 'Company', icon: 'mdi-account-circle', active: false, groups: [
            {name: 'Profile', icon: 'mdi-account-circle', href:'admin.company.profile', active: false, },
            {name: 'Structure', icon: 'mdi-account-circle', href:'admin.company.structure', active: false, },
            {name: 'Websites', icon: 'mdi-account-circle', href:'admin.company.websites', active: false, },
            {name: 'Administrator', icon: 'mdi-account-circle', href:'admin.company.administrator', active: false, },
            ],
        },
        { name: 'Apps', icon: 'mdi-account-circle', active: false, groups: [
            {name: 'Email', icon: 'mdi-account-circle', href:'admin.apps.email', active: false, },
            {name: 'POS', icon: 'mdi-account-circle', href:'admin.apps.calender', active: false, },
            {name: 'CRM', icon: 'mdi-account-circle', href:'admin.apps.calender', active: false, },
            {name: 'CMS', icon: 'mdi-account-circle', href:'admin.apps.calender', active: false, },
            {name: 'APM', icon: 'mdi-account-circle', href:'admin.apps.todo', active: false, },
            ],
        },
    ]})

    console.log(dashboards)

    return { ...toRefs(state), departments, dashboards } 
  }
} 
</script>

<template>
  <nav dense>
    <v-list-item class="brand">
      <v-list-item-avatar size="40"><a><img src="https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo" alt="John"> </a></v-list-item-avatar>
      <v-list-item-content>
        <v-list-item-title class="text-h6"><inertia-link href="route('admin.dashboard')"><strong>SGB Company</strong></inertia-link></v-list-item-title>
      </v-list-item-content>
       <v-icon class="mdi-flip-h">mdi-sort-variant</v-icon>
    </v-list-item>
    <div>{{dashboards}}</div>
    <v-divider></v-divider>
    <v-list dense nav rounded class="sidebar">
        <v-list-item class="text-sm"><v-list-item-title>Main</v-list-item-title></v-list-item>
        <VMenuSidebar :links="mains"/>
      <v-list-item class="text-sm"><v-list-item-title>Departments</v-list-item-title></v-list-item>
      <VMenuSidebar :links="departments"/>
    </v-list>
  </nav>
</template>

<style scoped>
.brand{
  height: 7vh; overflow-y: none;
}
.sidebar{
    height: 93vh;
    overflow-y: scroll; background: #34444c; border-right: 1px solid transparent; transition: all 0.2s ease-in-out 0s;
    scrollbar-color: #607D8B #CFD8DC; scrollbar-width: thin;
}
.sidebar::-webkit-scrollbar-track {
  background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 35%, black 55%, #e3e3e3 61%, #e3e3e3 100%);
}

.sidebar::-webkit-scrollbar {
	width: 10px;
}

.sidebar::-webkit-scrollbar-thumb {
	background-color: black;
  border-radius: 5px;
}

</style>
