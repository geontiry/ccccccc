<script>
import Footer from "@/Layouts/Company/Footer.vue";
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default {
    components: {Footer },
    props: { color: String, flat: Boolean },
    setup (props, ctx) {
        const fab = ref(null)
        const color = ref("")
        const flat = ref(null)
        const isXs = ref(false)
        const items = ref([
            ["mdi-home-outline", "Home", "#hero"],
            ["mdi-information-outline", "Sobre", "#features"],
            ["mdi-download-box-outline", "Download", "#download"],
            ["mdi-currency-usd", "Preços", "#pricing"],
            ["mdi-email-outline", "Contatos", "#contact"]
        ])

        onBeforeMount(() => { //was created
            const top = window.pageYOffset || 0
            if (top.value <= 60) {
                color.value = "transparent"; flat.value = true
            }
        })

        watch(fab, (value) => {
        if (value) {
            color.value = "secondary"; flat.value = false;
        } else {
            color.value = "transparent"; flat.value = true;
        }
        });
        
        const onScroll = (e) => {
        if (typeof window === "undefined") return
        const top = window.pageYOffset || e.target.scrollTop || 0
        fab.value = top.value > 60;
        console.log(top)
        }    
        
        return { fab, color, flat, onScroll }
  }
} 
</script>

<template>
    <div>
        <v-app app>
            <v-app-bar app :color="color" :flat="flat" dark class="px-15" :class="{ expand: flat }">
                <v-toolbar-title><v-img src="/storage/landing/logo.png" max-width="50px" /></v-toolbar-title>
                <p class="text-h4 font-weight-bold">Synvast Engineering1</p>
                <v-spacer />
                <div>
                    <v-btn text @click="$vuetify.goTo('#hero')"><span class="mr-2 text-capitalize">Home</span></v-btn>
                    <v-btn text @click="$vuetify.goTo('#features')"><span class="mr-2 text-capitalize">Electrical</span></v-btn>
                    <v-btn text @click="$vuetify.goTo('#download')"><span class="mr-2 text-capitalize">Portfolio</span></v-btn>
                    <v-btn text @click="$vuetify.goTo('#pricing')"><span class="mr-2 text-capitalize">Careers</span></v-btn>
                    <v-btn rounded outlined text @click="$vuetify.goTo('#contact')"><span class="mr-2 text-capitalize">Contact</span></v-btn>
                </div>
            </v-app-bar>
            <v-main>
                <slot name="page"></slot>
            </v-main>
            <v-scale-transition>
                <v-btn fab dark fixed bottom right color="secondary" v-show="fab" @scroll="onScroll"  @click="$vuetify.goTo(0)" ><v-icon>mdi-arrow-up</v-icon></v-btn>
            </v-scale-transition>
            <Footer />
        </v-app>
    </div>
</template>

<style lang="scss" scoped>
.v-main {
  background-image: url("/storage/landing/bgMain.png");
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
}
.v-toolbar {
    transition: 0.6s;
}
.expand {
    height: 80px !important;
    padding-top: 10px;
}
</style>