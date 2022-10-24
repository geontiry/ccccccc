<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    title: {type: Array, required: false},
    filters: {type: Array, required: false},
    headers: {type: Array, required: false},
    items: {type: Array, required: false},
    editedItem: {type: Object, required: false},
    dialog: {type: Boolean, default: false},
    dialogDelete: {type: Boolean, default: false},
    processDialog: {type: Function},
    saveItem: {type: Function},
  },
  emits: ['processDialog', 'saveItem'],

  setup (props, ctx) {
    const selected =ref([])
    const search = ref('')
    const snack = ref(false)
    const snackColor = ref('') 
    const snackText = ref('')

    onMounted(() => { 
      $emit('processDialog', item)
      $emit('saveItem', editedItem)
    })
    watch(dialog, async (val) => {
      if (!val) return setTimeout(() => (dialog = false), 4000)
    })
    
    return { selected, search, snack, snackColor, snackText  }
  }
} 
</script>

<template>
  <div class="container">
    <v-data-table multi-sort dense show-select class="elevation-1" :single-select="false" :headers="headers" :items="items" :search="search" sort-by="items" item-key="id" v-model="selected">

      <!--Table Toolbar-->
      <template v-slot:top>
        <v-toolbar flat>
          <v-toolbar-title class="text-h6 primary--text">{{ title[0]}}</v-toolbar-title>
          <v-divider class="mx-4" inset vertical></v-divider>
          <v-spacer></v-spacer>
          <v-text-field dense v-model="search" append-icon="mdi-magnify" label="Search" single-line hide-details></v-text-field>
          <v-spacer></v-spacer>
          <v-btn small dark color="primary" class="text-capitalize" @click.stop="processDialog"><v-icon small>mdi-pencil-plus-outline</v-icon> New {{ title[1]}}</v-btn>
        </v-toolbar>
        <v-container class="my-2">
          <v-row>
          <v-sheet class="mb-1">
          <v-slide-group multiple show-arrows>
            <v-slide-item v-for="filter in filters" :key="filter" v-slot="{ active, toggle }">
              <v-btn small class="mx-1 text-capitalize" :input-value="active" active-class="primary white--text" depressed rounded @click="toggle"><v-icon small>mdi-filter</v-icon> {{ filter }}</v-btn>
            </v-slide-item>
          </v-slide-group>
        </v-sheet>
        <v-spacer></v-spacer>
        <v-btn-toggle dense color="primary" class="mx-3"> 
          <v-btn small><v-icon dense color="primary">mdi-table-column</v-icon></v-btn>
          <v-btn small><v-icon dense>mdi-sync</v-icon></v-btn>
          <v-btn small><v-icon dense>mdi-fullscreen</v-icon></v-btn>
          <v-btn small><v-icon dense>mdi-arrow-expand</v-icon></v-btn>
          <v-btn small><v-icon dense>mdi-share-all</v-icon></v-btn>
        </v-btn-toggle>
      </v-row>
    </v-container>
  </template>  

      <!--Table Select -->
      <template v-slot:[`header.data-table-select`]="{ on: onSlot, props }">
        <span>Select</span>
        <v-tooltip bottom>
          <template #activator="{ attr, on: onTooltip }">
            <v-simple-checkbox  v-bind="{ ...props, ...attr }" v-on="{ ...onSlot, ...onTooltip }"></v-simple-checkbox>
            </template>
            <span>Select</span>
          </v-tooltip>
        </template> 

      <!--Table Actions-->
      <template v-slot:[`item.actions`]="{ item }">
        <v-icon dense @click="processDialog(item, action='view')" color="primary">mdi-eye</v-icon>
        <v-icon dense @click="processDialog(item, action='edit')" color="green">mdi-pencil</v-icon>
        <v-icon dense @click="deleteItem(item)" color="pink">mdi-delete</v-icon>
      </template>

      <!--Table Nodata Reset-->
      <template v-slot:no-data>
        <div class="text-subtitle-2 my-4"><v-icon dense>mdi-alert-circle-outline</v-icon> No data available ... Try again</div>
        <v-btn small dark color="primary" class="text-capitalize mb-4" @click="loadItems"><v-icon small>mdi-reload</v-icon> Reload</v-btn>
      </template>
    </v-data-table>

    <!--Table Add/Edit Modal-->
    <v-dialog v-model="dialog" max-width="500px">
      <v-card>
        <v-card-title class="text-h6 primary--text d-flex">
          <span v-if="editedItem.id">{{ action ==='view' ? 'View' : 'Update' }} Catalogue #{{ editedItem.id }} </span>
          <v-spacer v-if="editedItem.id"></v-spacer>
          <v-icon v-if="editedItem.id">mdi-chevron-left</v-icon>
          <v-icon v-if="editedItem.id">mdi-chevron-right</v-icon>
          <span v-else>Create Catalogue</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <slot name="form"></slot>
          </v-container>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn small text dark color="blue" class="text-capitalize" @click="dialog = !dialog"><v-icon small>mdi-restore</v-icon> Cancel</v-btn>
          <v-btn small dark color="blue" class="text-capitalize" v-if="action !== 'view'" @click.stop="saveItem"><v-icon small>mdi-content-save-outline</v-icon> Save</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    
    <!--CRUD Actions: Delete Modal-->
    <v-dialog v-model="dialogDelete" max-width="500px">
      <v-card>
        <v-card-title class="headline">Are you sure you want to delete this item?</v-card-title>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn small color="blue darken-1" text @click="closeDelete">Cancel</v-btn>
          <v-btn small color="blue darken-1" text @click="deleteItemConfirm">OK</v-btn>
          <v-spacer></v-spacer>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <!--CRUD Actions Notifier-->
    <v-snackbar v-model="snack" :timeout="3000" :color="snackColor" left>{{ snackText }}
      <template v-slot:action="{ attrs }">
        <v-btn v-bind="attrs" text @click="snack = false">Close</v-btn>
      </template>
    </v-snackbar>
  </div>
</template>