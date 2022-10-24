import Vue from 'vue'
import Vuetify from 'vuetify'
import preset from '@/materio/vuetify/default-preset/preset'
import  'vuetify/dist/vuetify.min.css'
import '@/materio/sass/styles/styles.scss'

Vue.use(Vuetify)

const opts = {
  preset,
  icons: {
    iconfont: 'mdiSvg',
  },
  theme: {
    // dark: true,
    options: {
      customProperties: true,
      variations: false,
    },
  },
}

export default new Vuetify(opts)
