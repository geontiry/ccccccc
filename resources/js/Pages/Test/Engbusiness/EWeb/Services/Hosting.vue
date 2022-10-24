<template>
  <div class="container">
    <v-data-table :headers="headers" :items="items" :search="search" sort-by="items" class="elevation-1" multi-sort dense>

      <!--Table Toolbar-->
      <template v-slot:top>
        <v-toolbar flat>
          <v-toolbar-title>Hosting Plans Listing</v-toolbar-title>
          <v-divider class="mx-4" inset vertical></v-divider>
          <v-spacer></v-spacer>
          <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line hide-details></v-text-field>
          <v-spacer></v-spacer>
          <v-btn small color="primary" dark @click.stop="processDialog()">New Plan</v-btn>
        </v-toolbar>
      </template>  

      <!--Table Actions-->
      <template v-slot:item.actions="{ item }">
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
          <span v-else>Create PLan</span>
        </v-card-title>
        <v-card-title class="title font-weight-regular justify-space-between">
          <span>{{ currentTitle }}</span>
          <v-avatar color="primary lighten-2" class="subheading white--text" size="24" v-text="step"></v-avatar>
        </v-card-title>
        <v-window v-model="step">
      <v-window-item :value="1">
        <v-card-text>
          <v-container>
            <v-row class="mx-1 my-0">
              <v-col cols="12" class="my-0 py-0"><v-text-field dense outlined clearable clear-icon="mdi-close-circle" label="Title" height="25px"></v-text-field></v-col>
              <v-col cols="12" class="my-0 py-0"><v-text-field dense outlined clearable clear-icon="mdi-close-circle" label="Description"></v-text-field></v-col>
              <v-col cols="12" class="my-0 py-0"><v-textarea dense outlined auto-grow clearable clear-icon="mdi-close-circle"   color="primary" label="Description" rows="2" ></v-textarea></v-col>
              <v-col cols="6" class="my-0 py-0"><v-text-field dense outlined clearable clear-icon="mdi-close-circle" label="Total Price" prefix="Ksh. "></v-text-field></v-col>
              <v-col cols="6" class="my-0 py-0"><v-text-field dense outlined clearable clear-icon="mdi-close-circle" label="Period"></v-text-field></v-col>
              <v-col cols="6" class="my-0 py-0"><v-text-field dense outlined clearable clear-icon="mdi-close-circle" label="Discount" suffix="%"></v-text-field></v-col>
              <v-col cols="6" class="my-0 py-0"><v-text-field dense outlined clearable clear-icon="mdi-close-circle" label="Net Price" prefix="Ksh. "></v-text-field></v-col>
            </v-row>

          </v-container>
          
        </v-card-text>
      </v-window-item>

      <v-window-item :value="2">
        <v-card-text>
          
        </v-card-text>
      </v-window-item>

      <v-window-item :value="3">
        <v-checkbox v-model="checkbox"><template v-slot:label>Free Hosting</template></v-checkbox>
        
      </v-window-item>
    </v-window>
        <v-divider></v-divider>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn small text :disabled="step === 1" color="blue" @click="step--">Back</v-btn>
          <v-btn small :disabled="step === 3" color="primary" depressed @click="step++">Next</v-btn>
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

<script>
export default {
  components: {},
  data() {
    return {
      step: 1,
      headers: [
        { text: "Post ID", value: "id", align: 'start', },
        { text: "Action", value: "actions", width: "120", sortable: false},
        { text: "Title", value: "title", width: "100", sortable: false,  },
        { text: "Description", value: "description", sortable: false },
        { text: "Photo", value: "photo", sortable: false },
      ],
      items: [],
      editedItem: {}, // empty holder for create/update ops
      dialog: false, dialogDelete: false,
      search: '',
      snack: false, snackColor: '', snackText: '',    
    };
  },
  computed: {
    currentTitle () {
        switch (this.step) {
          case 1: return 'Sign-up'
          case 2: return 'Create a password'
          default: return 'Account created'
        }
      },
  },
  mounted() {
    this.loadItems();
  },
  methods: {
    loadItems() {
      this.items = [];
      axios
        .get("/posts") 
        .then((response) => {
          this.items = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    processDialog(item) {
      this.editedItem = item || {};
      this.dialog = !this.dialog;
    },
    // save the record
    saveItem(item) {
       let id = item.id;
       let method = (id) ? 'patch' : 'post';
       let url = (id) ? `post/update/${id}` : `post/add`;
      axios[method](url, this.editedItem)
      .then((response) => {
        if (response.data && response.data.id) {
          this.editedItem.id = response.data.id; // add new item to state
          if (!id) {
            this.items.push(this.editedItem);  // add the new item to items state
          }
          else{
            this.editedItem = {};
          }
        }
        this.dialog = !this.dialog; this.snack = true;
        this.snackColor = (id) ? 'success' : 'primary';
        this.snackText = (id) ? 'Updated successfully' : 'Created successfully';
      })
      .catch((error) => {
        this.snack = true; this.snackColor = 'yellow'; this.snackText = (error)
      });
    },
    deleteItem(item) {
      let id = item.id;
      let idx = this.items.findIndex((item) => item.id === id);
      if (confirm("Are you sure you want to delete this?")) {
        axios
          .delete(`post/delete/${id}`)
          .then((response) => {
            this.items.splice(idx, 1);
            this.snack = true;
            this.snackColor = 'error';
            this.snackText = 'Deleted successfully';
          })
           .catch((error) => {
             this.snack = true; this.snackColor = 'error'; this.snackText = (error)
          });
      }
    },
  }
}
</script>
