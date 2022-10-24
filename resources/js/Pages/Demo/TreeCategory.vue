<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api'

export default {
  components: {},
  props: {},

  setup(props, ctx) {
    const state = reactive({
      showMenu: false,
      open: [1, 2],
      search: null,
      caseSensitive: false,
      selectionType: 'leaf',
      selection: [],
      items: [
        {
          id: 1,
          name: 'Root',
          children: [
            { id: 2, name: 'Child #1' },
            { id: 3, name: 'Child #2' },
            {
              id: 4,
              name: 'Node #3',
              children: [
                { id: 5, name: 'Grandchild #1' },
                { id: 6, name: 'Grandchild #2' },
              ],
            },
          ],
        },
      ],
    })

    const filter = computed(()=>state.caseSensitive ? (item, search, textKey) => item[textKey].indexOf(search) > -1 : undefined )

    const input = ()=>{
      showMenu.caseSensitive = true;
      confirm('Press a button!')
    }

    return { ...toRefs(state), filter, input }
  }
} 
</script> 

<template>
  <div>
    <v-row>
      <v-col cols="6">
        <v-card class="mx-auto" max-width="500">
          <v-menu bottom left offset-y transition="scale-transition" origin="center center">
            <v-text-field label="Outlined" placeholder="Placeholder" outlined @focus="input"></v-text-field>
          </v-menu>
          <v-sheet class="pa-4 primary lighten-2">
            <v-text-field v-model="search" label="Search Company Directory" dark flat solo-inverted hide-details clearable clear-icon="mdi-close-circle-outline"></v-text-field>
            <v-checkbox v-model="caseSensitive" dark hide-details label="Case sensitive search"></v-checkbox>
          </v-sheet>
          <v-card-text>
            <v-treeview dense selectable return-object selection-type="independent" :items="items" :search="search" :filter="filter" :open.sync="open" v-model="selection">
            </v-treeview>
          </v-card-text>
        </v-card>  
      </v-col>    
      <v-divider vertical></v-divider>
      <v-col class="pa-6" cols="6">
        <template v-if="!selection.length">No nodes selected.</template>
        <template v-else>
          <div v-for="node in selection" :key="node.id">{{ node.name }}</div>
        </template>
      </v-col>
    </v-row>
  </div>
</template>

<style lang="scss" scoped>
</style>
