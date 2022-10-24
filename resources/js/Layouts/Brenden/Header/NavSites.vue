<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const brenden = ref( [
        { header: 'E-Web', title: 'Brenden Web', logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo' },
        { header: 'E-Cyber', title: 'Brenden Cyber', logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'  },
        { header: 'E-Studio', title: 'Brenden Studio', logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'  },
        { header: 'E-Garden', title: 'Brenden Garden', logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'  },
      ])

      const genset =ref(
        { header: 'Electrical', title: 'GenSet Electrical', logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'  },
        { header: 'Electronic', title: 'GenSet Electronic', logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'  },
        { header: 'Automation', title: 'GenSet Automation', logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'  },
        { header: 'Construction', title: 'GenSet Construction', logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'  },
      )
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-menu bottom left transition="scale-transition" origin="center center">
      <template v-slot:activator="{ on, attrs }">
        <v-btn text small fab dark color="grey" v-bind="attrs" v-on="on"><v-icon>mdi-apps</v-icon></v-btn>
      </template>
      <v-card max-width="200">
        <v-subheader>Brenden Technology</v-subheader>
        <v-row>
          <v-col cols="3" v-for="(item, index) in brenden" :key="index">
            <v-tooltip >
          <template v-slot:activator="{ on, attrs }">
            <v-card>
              <v-img height="20" :src="item.logo" v-bind="attrs" v-on="on">
              <v-card-title class="text-subtitle-2">{{ item.header }}</v-card-title>
            </v-img>
            </v-card>
          </template>
          <span class="text-caption">{{ item.title }}</span>
        </v-tooltip>
        </v-col>
          

        </v-row>
        <v-subheader>GenSet Engineering</v-subheader>
        <v-tooltip bottom v-for="(item, index) in genset" :key="index">
          <template v-slot:activator="{ on, attrs }">
            <v-btn small text class="text-capitalize" v-bind="attrs" v-on="on">
              <v-avatar size="18"><img src="https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo" alt="John"></v-avatar>
              <span class="text-subtitle-2">{{ item.header }}</span>
            </v-btn>
          </template>
          <span class="text-caption">{{ item.title }}</span>
        </v-tooltip>
      </v-card>
    </v-menu>
  </div>
</template>

<style scoped>
</style>