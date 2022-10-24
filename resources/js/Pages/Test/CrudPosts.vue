<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      headers: [
        { text: "Post ID", value: "id", align: 'start', },
        { text: "Action", value: "actions", width: "120", sortable: false},
        { text: "Title", value: "title", width: "100", sortable: false,  },
        { text: "Description", value: "description", sortable: false },
        { text: "Photo", value: "photo", sortable: false },
      ],
      items: [],
      editedItem: {}, // empty holder for create/update ops
      dialog: false, 
      dialogDelete: false,
      search: '',
      snack: false, 
      snackColor: '', 
      snackText: '',   
    })

    onMounted(() => loadItems())

    const loadItems = ()=>{
      items = [];
      axios.get("/posts") 
              .then((response) =>items = response.data)
              .catch((error) =>console.log(error))
    }

    const processDialog = (item)=>{
      editedItem = item || {};
      dialog = !dialog;
    }

    // save the record
    const saveItem = (item)=>{
       let id = item.id;
       let method = (id) ? 'patch' : 'post';
       let url = (id) ? `post/update/${id}` : `post/add`;
      axios[method](url, editedItem)
      .then((response) => {
        if (response.data && response.data.id) {
          editedItem.id = response.data.id; // add new item to state
          if (!id) {
            items.push(editedItem);  // add the new item to items state
          }
          else{
            editedItem = {};
          }
        }
        dialog = !dialog; snack = true;
        snackColor = (id) ? 'success' : 'primary';
        snackText = (id) ? 'Updated successfully' : 'Created successfully';
      })
      .catch((error) => {
        snack = true; snackColor = 'yellow'; snackText = (error) 
      });
    }
    const deleteItem = (item)=>{
      let id = item.id;
      let idx = items.findIndex((item) => item.id === id);
      if (confirm("Are you sure you want to delete this?")) {
        axios.delete(`post/delete/${id}`)
                .then((response) => {items.splice(idx, 1); snack = true; snackColor = 'error'; snackText = 'Deleted successfully';})
                .catch((error) => {snack = true; snackColor = 'error'; snackText = (error)})
      }
    }
    
    return { } 
  }
} 
</script>

<template>
  <div class="container">
    <v-data-table :headers="headers" :items="items" :search="search" sort-by="items" class="elevation-1" multi-sort dense>

      <!--Table Toolbar-->
      <template v-slot:top>
        <v-toolbar flat>
          <v-toolbar-title>Posts Listing</v-toolbar-title>
          <v-divider class="mx-4" inset vertical></v-divider>
          <v-spacer></v-spacer>
          <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line hide-details></v-text-field>
          <v-spacer></v-spacer>
          <v-btn color="primary" dark @click.stop="processDialog()">New Post</v-btn>
        </v-toolbar>
      </template>  

      <!--Table Actions-->
      <template v-slot:[`item.actions`]="{ item }">
        <v-icon dense @click="viewDialog(item)" color="primary">mdi-eye</v-icon>
        <v-icon dense @click="processDialog(item)" color="green">mdi-pencil</v-icon>
        <v-icon dense @click="deleteItem(item)" color="pink">mdi-delete</v-icon>
      </template>

      <!--Table Nodata Reset-->
      <template v-slot:no-data>
        <p>No data available</p>
        <v-btn color="primary" @click="loadItems">Reset</v-btn>
      </template>
    </v-data-table>

    <!--Table Add/Edit Modal-->
    <v-dialog v-model="dialog" max-width="500px">
      <v-card>
        <v-card-title class="headline">
          <span v-if="editedItem.id">Edit Post {{ editedItem.id }}</span>
          <span v-else>Create Post</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-row>
              <v-col cols="12"><v-text-field dense v-model="editedItem.title" label="Title"></v-text-field></v-col>
              <v-col cols="12"><v-text-field dense v-model="editedItem.description" label="Description"></v-text-field></v-col>
            </v-row>
          </v-container>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue" text @click="processDialog()">Cancel</v-btn>
          <v-btn color="blue" @click.stop="saveItem(editedItem)">Save</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <!--CRUD Actions: Delete Modal-->
    <v-dialog v-model="dialogDelete" max-width="500px">
      <v-card>
        <v-card-title class="headline">Are you sure you want to delete this item?</v-card-title>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="closeDelete">Cancel</v-btn>
          <v-btn color="blue darken-1" text @click="deleteItemConfirm">OK</v-btn>
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