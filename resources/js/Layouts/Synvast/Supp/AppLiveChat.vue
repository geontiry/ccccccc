<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const shown =  ref(false)
    const reveal = ref(false)
    const selection = ref([])
    const listitems = ref['Foo', 'Bar', 'Fizz', 'Buzz']          
    const items = ref([        
        {
          action: "15 min",
          avatar: "https://cdn.vuetifyjs.com/images/lists/1.jpg",
          title: "Geoffrey Ontiri",
          subtitle: `I'll be in your neighborhood doing errands this weekend. Do you want to hang out?`,
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "2 hr",
          avatar: "https://cdn.vuetifyjs.com/images/lists/2.jpg",
          title: 'Scott, Jennifer',
          subtitle: `Wish I could come, but I'm out of town this weekend.`,
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "12 hr",
          avatar: "https://cdn.vuetifyjs.com/images/lists/3.jpg",
          title: "Sandra Adams",
          subtitle:
            'Do you have Paris recommendations? Have you ever been?',
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "8 hr",
          avatar: "https://cdn.vuetifyjs.com/images/lists/4.jpg",
          title: "Trevor Hansen",
          subtitle:
            'Have any ideas about what we should get Heidi for her birthday?',
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "2 sec",
          avatar: "https://cdn.vuetifyjs.com/images/lists/5.jpg",
          title: "Britta Holt",
          subtitle:
            'We should eat this: Grate, Squash, Corn, and tomatillo Tacos.',
        },
        {
          action: "2 hr",
          avatar: "https://cdn.vuetifyjs.com/images/lists/2.jpg",
          title: 'Scott, Jennifer',
          subtitle: `Wish I could come, but I'm out of town this weekend.`,
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "12 hr",
          avatar: "https://cdn.vuetifyjs.com/images/lists/3.jpg",
          title: "Sandra Adams",
          subtitle:
            'Do you have Paris recommendations? Have you ever been?',
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "8 hr",
          avatar: "https://cdn.vuetifyjs.com/images/lists/4.jpg",
          title: "Trevor Hansen",
          subtitle:
            'Have any ideas about what we should get Heidi for her birthday?',
        },
        {
          divider: true,
          inset: true,
        },
        {
          action: "2 sec",
          avatar: "https://cdn.vuetifyjs.com/images/lists/5.jpg",
          title: "Britta Holt",
          subtitle:
            'We should eat this: Grate, Squash, Corn, and tomatillo Tacos.',
        },
       
      ])
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-menu top left offset-y transition="scale-transition" origin="center center" max-width="320" :close-on-content-click="false" :value="shown">
      <template v-slot:activator="{ on: menu, attrs }">
        <v-tooltip left>
          <template v-slot:activator="{ on: tooltip }">
            <v-btn x-small outlined fab dark fixed bottom left color="orange" v-bind="attrs" v-on="{ ...tooltip, ...menu }" @click="shown = !shown">
              <v-badge left color="orange darken-4" offset-x="4" offset-y="12" content="5"><v-icon>{{ shown ? 'mdi-progress-close' : 'mdi-chat' }}</v-icon></v-badge>
              </v-btn>
          </template>
          <span>{{ shown ? 'Close Chat' : 'Live Chat' }}</span>
        </v-tooltip>
      </template>
      <v-toolbar dense dark :color="selection.length ? 'primary darken-4' : 'primary'" >
        <v-btn icon small v-if="!selection.length && reveal" @click="reveal = false"><v-icon dense>mdi-arrow-left</v-icon></v-btn>
        <v-btn icon small v-if="selection.length"  @click="selection = []"><v-icon dense>mdi-close</v-icon></v-btn>
        <v-spacer v-if="selection.length"></v-spacer>
        <v-checkbox dense indeterminate hide-details v-if="selection.length"></v-checkbox>
        <v-badge v-if="!selection.length" bottom color="green" dot offset-x="10" offset-y="10" class="mr-1">
          <v-avatar size="32"><v-img src="https://cdn.vuetifyjs.com/images/lists/2.jpg"></v-img></v-avatar>
        </v-badge>
        <v-toolbar-title>{{ selection.length ? `${selection.length} Selected` : !reveal ? 'Live Chat' : '' }}</v-toolbar-title>
        <v-list-item two-line v-if="!selection.length && reveal" class="ma-0 pa-0">
          <v-list-item-content><v-list-item-title>Geontiry</v-list-item-title><v-list-item-subtitle>Online</v-list-item-subtitle></v-list-item-content>
        </v-list-item>
        <v-spacer></v-spacer>
        <v-scale-transition><v-btn v-if="selection.length" key="export" icon small><v-icon dense>mdi-export-variant</v-icon></v-btn></v-scale-transition>
        <v-scale-transition><v-btn v-if="selection.length" key="delete" icon small><v-icon dense>mdi-delete</v-icon></v-btn></v-scale-transition>
        <v-scale-transition><v-btn v-if="selection.length" key="more" icon small><v-icon dense>mdi-dots-vertical</v-icon></v-btn></v-scale-transition>
        <v-icon dense class="m-1" v-if="!selection.length">mdi-pencil-outline</v-icon>
        <v-icon dense class="m-1" v-if="!selection.length">mdi-arrow-expand</v-icon>
        <v-icon dense class="m-1" v-if="!selection.length" @click="shown=null">mdi-window-minimize</v-icon>
      </v-toolbar>
        <v-card>        
        <v-card-text class="ma-0 pa-1">
          <v-select v-model="selection" :items="listitems" multiple label="Select an option"></v-select>
          <v-autocomplete chips solo clearable hide-details hide-selected item-text="name" item-value="symbol" label="Search messages ..." prepend-inner-icon="mdi-magnify" 
          append-icon="mdi-tune" v-model="model" :items="items" :loading="isLoading" :search-input.sync="search" class="my-1">
          <template v-slot:no-data>
            <v-list-item><v-list-item-title>No messages found!</v-list-item-title></v-list-item>
          </template>
          <template v-slot:selection="{ attr, on, item, selected }">
            <v-chip v-bind="attr" :input-value="selected" color="blue-grey" class="white--text" v-on="on"><v-icon left>mdi-bitcoin</v-icon><span v-text="item.name"></span></v-chip>
          </template>
          <template v-slot:item="{ item }">
            <v-list-item-avatar color="indigo" class="headline font-weight-light white--text">{{ item.name.charAt(0) }}</v-list-item-avatar>
            <v-list-item-content>
              <v-list-item-title v-text="item.name"></v-list-item-title>
              <v-list-item-subtitle v-text="item.symbol"></v-list-item-subtitle>
            </v-list-item-content>
            <v-list-item-action><v-icon>mdi-bitcoin</v-icon></v-list-item-action>
          </template>
        </v-autocomplete>
        <v-list two-line dense  class="card-content">
          <template v-for="(item, index) in items">
            <v-divider class="my-0 py-0" v-if="item.divider" :key="index" :inset="item.inset" ></v-divider>
            <v-list-item class="ma-0 pa-0" v-else :key="item.title" @click="reveal = true">
              <v-list-item-avatar class="my-0 mx-1"><v-img :src="item.avatar"></v-img></v-list-item-avatar>
              <v-list-item-content class="my-0 py-0">
                <v-list-item-title>
                  {{ item.title }} 
                  <span class="text-subtitle-2 grey--text ">(4)</span>
                  <span class="text--lighten-1 float-right">{{ item.action }}</span>
                </v-list-item-title>
                <v-list-item-subtitle>{{ item.subtitle }}</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </template>
        </v-list>
      </v-card-text>
        <v-expand-transition>
          <v-card v-if="reveal" class="transition-fast-in-fast-out v-card--reveal" style="height: 100%;">
            <v-card-text class="text-subtitle-2">
              <v-select v-model="selection" :items="listitems" multiple label="Select an option"></v-select>
              <div class="chat">
                <p class="out"><v-icon dense>mdi-check-all</v-icon> Hi, how are you? The Woodman set to work at once, and so sharp was his axe that the tree was soon chopped</p>
                <p><v-icon dense>mdi-check</v-icon>Hi, I'm fine!!!</p>
                <p><v-icon dense>mdi-check</v-icon>Hi, I'm fine!!!</p>
                <p><v-icon dense>mdi-check</v-icon>Hi, I'm fine!!!</p>
                <p><v-icon dense>mdi-check</v-icon>Hi, I'm fine!!!</p>
                <p><v-icon dense>mdi-check</v-icon>Hi, I'm fine!!!</p>
              </div>
               <v-textarea dense outlined clearable counter auto-grow label="Message" value="The Woodman set to work at once, and so sharp was his axe that the tree was soon chopped nearly through."
                background-color="grey lighten-4" rows="2" clear-icon="mdi-close-circle"></v-textarea>
              <v-card-actions class="justify-space-around">
                <v-btn small icon><v-icon  dense>mdi-emoticon</v-icon></v-btn>               
                <v-btn small icon><v-icon dense>mdi-microphone</v-icon></v-btn>               
                <v-btn small icon><v-icon dense>mdi-attachment</v-icon></v-btn>               
                <v-btn small icon><v-icon dense>mdi-camera</v-icon></v-btn>
                <v-btn small fab color="primary"><v-icon dense>mdi-send</v-icon></v-btn>
            </v-card-actions>
          </v-card-text>
        </v-card>
      </v-expand-transition>
    </v-card>
  </v-menu>
</div>
</template>

<style scoped>
.card-content{
  height: 250px; overflow-y: scroll; background-image: 'https://cloud.githubusercontent.com/assets/398893/15136779/4e765036-1639-11e6-9201-67e728e86f39.jpg';
}

.v-card--reveal {
  bottom: 0;
  opacity: 1 !important;
  position: absolute;
  width: 100%;
  height: 100%;
  overflow-y: scroll;
}
.chat{
  display: flex; flex-direction: column;
}
.chat .out{
  float: right; max-width: 75%; height: auto; padding: 3px; background: silver; border-radius: 6px;
}

</style>