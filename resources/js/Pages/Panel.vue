<script>
import AdmPanel from "@/Layouts/AdmPanel.vue"
import CrudTable from "@/Partials/Admin/CrudTable.vue"
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 

export default { 
    components: { AdmPanel, CrudTable },
    props: {
      dense: {type: Boolean, default: false},
    },

  setup (props, ctx) {
    const state = reactive({
      title: [ 'Catalogues', 'Catalogue' ],
      filters: [ 'Synvast', 'Genset', 'Brenden',  ],
      selected: [], 
      search: '',
      snack: false, 
      snackColor: '', 
      snackText: '',   
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
      catalogues: [
        {id: 1, name: "Name", category: "Category", division: "Division", type: "Type", site: "Site", brand: "Brand"}
      ]
    })
    
    return { ...toRefs(state) } 
  } 
} 
</script> 

<template>
<AdmPanel title="Test Panel">
  <crud-table :title="title" :filters="filters" :headers="headers" :items="catalogues"></crud-table>
  <!-- <crud-table :title="title" :filters="filters" :headers="headers" :items="catalogues" :editedItem="editedItem" :dialog="dialog" 
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
    </crud-table>   -->
</AdmPanel>
</template>

<style lang="scss" scoped>

</style>
