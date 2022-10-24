<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      headers: [
        { text: "ITEM", value: "product", width: "150", sortable: false,  },
        { text: "Quantity", value: "quantity", },
        { text: "Unit Cost", value: "price", },
        { text: "Total Cost", value: "total", },
      ],
      editedItem: {}, // empty holder for create/update ops
      dialog: false, 
      dialogDelete: false,
      search: '',
      snack: false, 
      snackColor: '', 
      snackText: '',         
    })
    // items: state => state.cart.cart_items, 
    //   count: state => state.cart.cart_count, 

    const cartRemoveItem = (item)=>{
      //$store.dispatch("cartRemoveItem", item);
      axios.delete(route('api.carts.destroy'), item)
      .then(response => {
        alert(response.data.status)
      })
      .catch((error) => { alert('error') })
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
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <v-row dense>
      <v-col cols="9">
        <v-data-table :headers="headers" :items="items" :search="search" hide-default-footer sort-by="items" class="pa-2 elevation-1 grey lighten-4">
      <!--Table Toolbar-->
      <template v-slot:top>
        <v-toolbar flat>
          <v-toolbar-title>Cart { {{ count }} Items }</v-toolbar-title>
          <v-divider class="mx-4" inset vertical></v-divider>
          <v-spacer></v-spacer>
          <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line hide-details></v-text-field>
          <v-spacer></v-spacer>
          <v-btn small icon color="orange" dark class="mr-2"><v-icon>mdi-sync-circle</v-icon></v-btn>
          <v-btn small outlined color="orange" dark class="mr-2">Empty</v-btn>
        </v-toolbar>
      </template>  
      <template v-slot:[`header.quantity`]="{ header }">
        {{ header.text.toUpperCase() }}
      </template>
      <template v-slot:[`item.product`]="{ item }">
        <v-list-item class="mt-n1 mb-n3 ml-n6" >
              <v-list-item-avatar tile class="rounded"><v-img src="https://cdn.vuetifyjs.com/images/lists/1.jpg"></v-img></v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title class="text-subtitle-1"><inertia-link>3-way Switch socket</inertia-link></v-list-item-title>
                <v-list-item-subtitle class="text-subtitle-2">Small plates, salads &amp; sandwiches - an intimate setting with 12</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
        <div class="ml-10">
          <v-chip small class="ma-1" color="primary" outlined><v-icon small>mdi-heart-box-outline</v-icon>Move to Favorites</v-chip>
            <v-chip small class="ma-1" color="success" outlined><v-icon small>mdi-comma-box-outline</v-icon>Move to Quotes</v-chip>
            <v-chip small class="ma-1" color="red" outlined @click="cartRemoveItem(item.id)"><v-icon small>mdi-delete</v-icon>Delete</v-chip>
        </div> 
      </template>
      <template v-slot:[`item.quantity`]="{ item }">
        <v-text-field dense solo flat hide-details="true" single-line full-width min='1' maxlength="4" type="number" class="text-caption mr-2 px-0" v-model="item.quantity"></v-text-field>
      </template>
      <template v-slot:[`item.price`]="{ item }">
        <strike class="text-caption grey--text">{{ item.price | ksh }}</strike>
        {{ item.price | ksh }}
        <v-chip x-small color="success" class="mt-1"> Saved {{ item.price | ksh }}</v-chip>
      </template>
      <template v-slot:[`item.total`]="{ item }">
        <div class="orange--text"><strong>{{ item.total | ksh }}</strong></div>
      </template>
      
      <!--Table Nodata Reset-->
      <template v-slot:no-data>
        <p>No data available</p>
        <v-btn color="primary" @click="loadItems">Reset</v-btn>
      </template>
    </v-data-table>

      </v-col>
      <v-col cols="3">
      <v-row dense class="pa-2">
        <v-col cols="6" class="text-subtitle-1 text-end">Total:</v-col><v-col cols="6" class="text-right text-subtitle-1">Ksh. 4530</v-col>
        <v-col cols="6" class="text-subtitle-1 text-end grey--text">Savings:</v-col><v-col cols="6" class="text-right text-subtitle-1 grey--text">Ksh. 1200</v-col>
        <v-col cols="6" class="text-subtitle-1 text-end grey--text">VAT:</v-col><v-col cols="6" class="text-right text-subtitle-1 grey--text">Ksh. 0</v-col>
        
        <v-col cols="12"><v-divider class="ml-6"></v-divider></v-col>
        <v-col cols="6" class="text-h6 text-end orange--text">Subtotal:</v-col><v-col cols="6" class="text-right text-h6 orange--text"><strong>Ksh. 15610</strong></v-col>
        <v-col cols="12" class="text-caption  text-start">
          <div><v-icon small>mdi-information</v-icon> Cost inclusive of VAT</div>
          <div><v-icon small>mdi-help-circle</v-icon> Need assistance? <a href="#">Contact us</a>.</div>
        </v-col>
      </v-row>
      <slot name="actions"></slot>
      </v-col>
    </v-row>

    <!--Table Add/Edit Modal
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
    </v-dialog>-->
    <!--CRUD Actions: Delete Modal
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
    </v-dialog>-->
    <!--CRUD Actions Notifier
    <v-snackbar v-model="snack" :timeout="3000" :color="snackColor" left>{{ snackText }}
      <template v-slot:action="{ attrs }">
        <v-btn v-bind="attrs" text @click="snack = false">Close</v-btn>
      </template>
    </v-snackbar>
            </td>
          </tr>
        </tbody>
      </template>
    </v-simple-table>-->
  </div>
</template>

<style scoped>
</style>