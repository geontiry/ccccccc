<script>
import SRating from "@/Components/SRating.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { SRating },
  props: {
    dense: {type: Boolean, default: false},
  },

  setup (props, ctx) {
    const state = reactive({  
      id: 46,
      file: undefined,
      success: true,
      status: '',
      files: [],
      readers: [],
    })

    const add = ()=>{
      $refs.fileInput.$el.querySelector("input").click();
      let imgs = event.target.files;
      for(let i = 0; i<imgs.length; i++)
      {
        files.push(file[i]);
      }
    }

    const remove = (key)=>{
      files.splice( key, 1 );
      preview();
    }

    const preview = ()=>{
      files.forEach((file, key) => {
        if ( /\.(jpe?g|png|gif)$/i.test( file.name ) ){
          readers[key] = new FileReader();
          readers[key].onloadend = (e) => {
            let fileData = readers[key].result
            let imgRef = $refs.file[key]
            imgRef.src = fileData
          }
          readers[key].readAsDataURL(files[key]);
        }
      })
    }

    const upload = ()=>{
      if (!files.length) {
        alert('Please select a file')
        return;
      }
      const config = {
        headers: {
          'content-type': 'multipart/form-data',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
      }

      let formData = new FormData();
      formData.append('file', file);
      axios.post( '/upload', formData)
      .then((response) => { 
        status = response.data.status; 
        //file = [];         
        //alert('ok') 
      })
      .catch((error) => { status = response.data.status; alert('error') });
    }

    const deleteFile = ()=>{
      axios.delete( '/delete', id)
      .then((response) => { 
        status = response.data.status; 
        //file = [];         
        alert('ok') 
      })
      .catch((error) => { status = response.data.status; alert('error') });
    }

    const uploads = ()=>{
      let formData = new FormData();
      formData.append('file', file);     
    }
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div>Locations</div>
    <v-btn small color="primary" @click="deleteFile"><v-icon>mdi-link-variant-plus</v-icon>Delete</v-btn>
    <v-file-input dense outlined show-size counter multiple accept="image/*" label="Files input" ref="fileInput"
        v-model="files" @change="preview">
        <template v-slot:selection="{ index, text }">
          <v-chip v-if="index < 3" color="deep-purple accent-4" dark label small>{{ text }}</v-chip>
          <span v-else-if="index === 3" class="text-caption overline grey--text text--darken-3 mx-2">+{{ files.length - 3 }} File(s)</span>
        </template>
        <template v-slot:append-outer>
          <v-btn small icon color="primary" @click="add"><v-icon>mdi-link-variant-plus</v-icon></v-btn>
          <v-btn small icon color="primary" @click="uploads"><v-icon>{{ success ? 'mdi-upload-multiple' : 'mdi-reload' }}</v-icon></v-btn>
        </template>
    </v-file-input>
    <v-card max-width="500" v-if="files.length">
      <v-row dense cols="2" class="my-1" v-for="(file, key) in files" :key="key">
        <v-col cols="3"><v-img :ref="'file'" src="//placehold.it/400/99cc77" class="rounded" :title="'file' + key" height="60" /></v-col>
        <v-col cols="9">
          <div class="d-flex">
            <span class="text-subtitle-2 text-truncate">{{file.name}}</span>
            <v-spacer></v-spacer>
            <v-icon dense @click="remove(key)">mdi-close</v-icon></div>
          <v-card-actions>
            <v-btn small icon color="primary"><v-icon>{{ success ? 'mdi-upload' : 'mdi-reload' }}</v-icon></v-btn>
            <v-spacer></v-spacer>
            <v-progress-linear color="deep-purple accent-4" indeterminate rounded height="6"></v-progress-linear>
            <v-spacer></v-spacer>
          </v-card-actions>
        </v-col>
      </v-row>
    </v-card>
  </div>
</template>

<style scoped>

 
</style>