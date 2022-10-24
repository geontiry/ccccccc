import './bootstrap'
import '../css/app.css'

// Import Framework...
import Vue from 'vue';
import PortalVue from 'portal-vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue';
import { createPinia, PiniaVuePlugin } from 'pinia'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'

//Import Plugins
import './Plugins/vue-composition-api'
import vuetify from './Plugins/vuetify'
import VueApexCharts from 'vue-apexcharts'

//Import Filters
import { ksh } from './Filters/ksh';

Vue.mixin({ methods: { route } });
Vue.use(PiniaVuePlugin)
Vue.use(InertiaPlugin);
Vue.use(PortalVue);
Vue.use(VueApexCharts)
Vue.component('apexchart', VueApexCharts)

Vue.filter('ksh', ksh)

const app = document.getElementById('app');
const pinia = createPinia()

new Vue({
    pinia, vuetify,
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                // resolveComponent: (name) => import(`./Pages/${name}.vue`).default,
                // resolvePageComponent: (name) => import(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')).default,
                resolveComponent: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
                // resolveComponent: async (name) => {
                //     let page = await resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue'));            
                //     return page;
                // },
            },
        }),
}).$mount(app);