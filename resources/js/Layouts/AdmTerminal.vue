<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({
        drawer: null,
        mini: false,
        selectedItem: 0,
        isXs: false,
        items: [ 
            ["mdi-home-outline", "Home", "#hero"],
            ["mdi-information-outline", "POS", "#features"], 
            ["mdi-download-box-outline", "CRM", "#download"],
            ["mdi-currency-usd", "Preços", "#pricing"],
            ["mdi-email-outline", "Contatos", "#contact"]
        ],
        links: [
        { title: 'Click Me' },
        { title: 'Click Me' },
        { title: 'Click Me' },
        { title: 'Click Me 2' },
      ],
      })
    const onResize = () => isXs = window.innerWidth < 850
    
    onMounted(() => { onResize(); window.addEventListener("resize", this.onResize, { passive: true })})
    
    watch(isXs, async (val) => {if (!value && drawer) { drawer = false}})
    
    return { } 
  }
} 
</script>

<template>
    <div>
        <!-- App.vue -->
        <v-app  :style="{ background: $vuetify.theme.themes.dark.background }">
            <v-navigation-drawer app dark permanent v-model="drawer" src="/storage/landing/bgDrawer.jpg" :mini-variant.sync="mini" mini-variant-width="110">
                <v-list>
                    <v-list-item>
                        <v-list-item-avatar>
                            <img src="/storage/landing/logo.png" alt="Logo"/>
                        </v-list-item-avatar>
                        <v-list-item-content>
                            <v-list-item-title class="title">Calango</v-list-item-title>
                            <v-list-item-subtitle>WEB</v-list-item-subtitle>
                        </v-list-item-content>
                         <v-btn icon @click.stop="mini = !mini"><v-icon>mdi-chevron-left</v-icon></v-btn>
                    </v-list-item>
                </v-list>

                <v-divider />
                <v-card flat color="#151515" class="rounded-xl mx-4 py-10">
                <v-list flat dense class="" dark>
                    <v-list-item-group v-model="selectedItem">
                    <v-list-item v-for="([icon, text, link], i) in items" :key="i" link active-class="border" v-slot="{ active }" :ripple="false">
                    <v-list-item-icon class="justify-center"><v-icon v-text="icon" :color="active ? 'white' : 'grey lighten-1'"></v-icon></v-list-item-icon>
                        <v-list-item-content><v-list-item-title class="subtitile-1">{{ text }}</v-list-item-title></v-list-item-content></v-list-item>
                    </v-list-item-group>
                </v-list>
                </v-card>
                <div style=" position: absolute; bottom: 20px; margin-left: auto; margin-right: auto; left: 0; right: 0; text-align: center;">
      <v-avatar size="40"><v-img src="https://cdn.vuetifyjs.com/images/lists/1.jpg" class="image"></v-img></v-avatar>
    </div>
            </v-navigation-drawer>

            <v-app-bar app dark :color="color" :flat="flat"  :class="{ expand: flat }" color="#6A76AB" height="55" prominent src="https://picsum.photos/1920/1080?random" fade-img-on-scroll>
            <template v-slot:img="{ props }"><v-img v-bind="props" gradient="to top right, rgba(100,115,201,.7), rgba(25,32,72,.7)"></v-img></template>
            <v-toolbar-title>POS Terminal</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn icon><v-icon>mdi-magnify</v-icon></v-btn>
            <v-btn icon><v-icon>mdi-heart</v-icon></v-btn>
            <v-menu bottom left>
              <template v-slot:activator="{ on, attrs }">
                <v-btn icon color="yellow" v-bind="attrs" v-on="on"><v-icon>mdi-dots-vertical</v-icon></v-btn>
                </template>
                <v-list><v-list-item v-for="(item, i) in links" :key="i"><v-list-item-title>{{ item.title }}</v-list-item-title></v-list-item></v-list>
              </v-menu>
              <template v-slot:extension>
                <v-tabs align-with-title>
                  <v-tab>Cash Orders</v-tab>
                  <v-tab>Client Orders</v-tab>
                  <v-tab>Online Orders</v-tab>
                  </v-tabs>
                </template>
              </v-app-bar>
            <!-- App Page-->
            <slot name="page"></slot>
        </v-app>
    </div>
</template>

<style scoped>
.v-toolbar {
    transition: 0.6s;
}

.expand {
    height: 80px !important;
    padding-top: 10px;
}
</style>

<style>
.border {
  margin: 0px 8px;
  background: #6f0dff;
  border-radius: 15px;
  text-decoration: none;
  /* width: 60px;
  height: 60px; */
}
/* .v-list-item-group .v-list-item--active {
  color: white !important;
}
.v-list-item__content {
  padding: 20px 0 !important;
}
.image {
  border: 1px solid white;
} */
</style>
