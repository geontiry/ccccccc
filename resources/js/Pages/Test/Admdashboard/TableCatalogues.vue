<script>
import CrudTable from "@/Components/Crud/CrudTable.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { CrudTable }, 
  props: {
    dense: {type: Boolean, default: false},
  },

  setup (props, ctx) {
    const state = reactive({  
      title: [ 'Catalogues', 'Catalogue' ],
      selected: [], search: '',
      snack: false, snackColor: '', snackText: '',   
      filters: [ 'Synvast', 'Genset', 'Brenden',  ],
      headers: [
        { text: '', value: 'data-table-select', width: '30' },
        { text: "ID", value: "id", width: "80", align: 'start', },
        { text: "Name", value: "name", width: "100", sortable: false,  },
        { text: "Category", value: "category", width: "100", sortable: false,  },
        { text: "Division", value: "division", width: "100", sortable: false,  },
        { text: "Type", value: "type", width: "100", sortable: false,  },
        { text: "Site", value: "site", width: "100", sortable: false,  },
        { text: "Brand", value: "brand", width: "100", sortable: false,  },
        { text: "Action", value: "actions", width: "100", sortable: false},
      ],
      catalogues: [], brands: [], sites: [], types: [], divisions: [], categories: [], 
      editedItem: {}, // empty holder for create/update ops      
    })

    onBeforeMounted(() => { 
      catalogues = [];      
      axios.get("https://localhost/web/2.0/sites").then( (response) => { catalogues = response.data.catalogues; } )
    })

    const processDialog = (event, item)=> { 
      dialog = !dialog;
      editedItem = item || {};  
      if(dialog){
        loadBrands();
         if( editedItem.id){
           loadSites(editedItem.brand_id);
           loadTypes(editedItem.site_id);
           loadDivisions(editedItem.site_id, editedItem.type_id);
           loadCategories(editedItem.division_id);
         };
      }
      else{
        editedItem = {};
      }    
    }  

    const loadBrands = ()=> {
      brands = [];
      axios.get(route('api.brands.index')).then((response) => { brands = response.data.brands });
    }

    const loadSites = (brand_id = editedItem.brand_id)=>{
      sites = types =  divisions = categories = [];
      axios.get(route('api.sites.list', brand_id)).then((response) => { sites = response.data.sites })      
    }

    const loadTypes =()=>{
      types = divisions = categories = [];
      axios.get(route('api.types.index')).then((response) => { types = response.data.types });   
    }

    const loadDivisions=(site_id = editedItem.site_id, type_id = editedItem.type_id)=>{
      divisions = categories = [];
      axios.get(route('api.divisions.list', [site_id, type_id])).then((response) => { divisions = response.data.divisions })
    }

    const loadCategories=(division_id = editedItem.division_id)=>{
      categories = [];
      axios.get(route('api.categories.list', division_id)).then((response) => { categories = response.data.categories })      
    }
    
    // save the record
    const saveItem=(event, item)=>{
       let id = item.id, 
            method = (id) ? 'patch' : 'post', 
            url = (id) ? route('api.catalogues.update', id) : route('api.catalogues.store');
      axios[method]( url, editedItem ).then((response) => {
        if (response.data.status) {
          editedItem.id = response.data.id; // add new item to state
          dialog = !dialog; 
          snack = true;
          snackColor = 'primary';
          if (!id) { 
            catalogues.push(editedItem); 
            snackText = 'Created successfully'
          } // add the new item to items state
          else{ 
            editedItem = {}; 
            snackText = 'Updated successfully'
          }
        }
      })
      .catch((error) => { snack = true; snackColor = 'red darken-4'; snackText = (error) });
    }

    const deleteItem =(item)=>{
      let id = item.id, 
          idx = catalogues.findIndex((item) => item.id === id);
      dialogDelete = true;
      if(dialogDelete){
        if (confirm("Are you sure you want to delete this?")) {
          axios.delete(route('api.catalogues.destroy', id)).then((response) => { 
            catalogues.splice(idx, 1); snack = true; snackColor = 'primary'; snackText = 'Deleted successfully'; 
          })
          .catch((error) => { snack = true; snackColor = 'error'; snackText = (error) });
      }

      }
    }
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <crud-table :title="title" :filters="filters" :headers="headers" :items="catalogues" :editedItem="editedItem" :dialog="dialog" 
    @processDialog="processDialog" @saveItem="saveItem">
       <template #form>
         <v-row dense>
          <v-col cols="6">
            <v-select outlined dense hide-selected label="Brand" placeholder="Choose brand" :readonly="action ==='view' ? true : false"
            :items="brands" item-value="id" item-text="name" v-model="editedItem.brand_id" @change="loadSites"></v-select>
          </v-col>
          <v-col cols="6">
            <v-select outlined dense hide-selected label="Site" placeholder="Choose site" :readonly="action ==='view' ? true : false"
            :items="sites" item-value="id" item-text="name" v-model="editedItem.site_id" @change="loadTypes"></v-select>
          </v-col>
          <v-col cols="6">
            <v-select outlined dense hide-selected label="Type" placeholder="Choose type" :readonly="action ==='view' ? true : false"
            :items="types" item-value="id" item-text="name" v-model="editedItem.type_id" @change="loadDivisions"></v-select>
          </v-col>
          <v-col cols="6">
            <v-autocomplete outlined dense hide-selected label="Division" placeholder="Choose division" :readonly="action ==='view' ? true : false"
            :items="divisions"  item-value="id" item-text="name" v-model="editedItem.division_id" @change="loadCategories"></v-autocomplete>
          </v-col>
          <v-col cols="6">
            <v-autocomplete outlined dense hide-selected label="Category" placeholder="Choose category" :readonly="action ==='view' ? true : false"
            :items="categories"  item-value="id" item-text="name" v-model="editedItem.category_id"></v-autocomplete>
          </v-col>
          <v-col cols="6">
            <v-text-field outlined dense label="Name" placeholder="Enter catalogue name ..." :readonly="action ==='view' ? true : false" 
            v-model="editedItem.name"></v-text-field>
          </v-col>
        </v-row>
       </template>
    </crud-table>    
  </div>
</template>

<style scoped>
 
</style>