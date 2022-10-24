<script>
import SRating from "@/Components/SRating.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { SRating },
  props: {
    dense: {type: Boolean, default: false}
  },

  setup (props, ctx) {
    const state = reactive({  
      file: [],
      status: '',
      files: [],
      readers: [],      
    })

    const addFiles = ()=>{
      files.forEach((file, f) => {
        readers[f] = new FileReader();
        readers[f].onloadend = (e) => {
          let fileData = readers[f].result
          let imgRef = $refs.file[f]
          imgRef.src = fileData
        }
        readers[f].readAsDataURL(files[f]);
      })
    }

   const  upload = ()=>{
      const config = {
        headers: {
          'content-type': 'multipart/form-data',
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
    <v-file-input dense outlined chips  show-size append-outer-icon="mdi-cloud-upload" accept="image/*" label="File input" v-model="file" @click:append-outer="upload"></v-file-input>
    {{file.name}}
    {{status}}
    <v-img :src="file.name" class="img-fluid" :title="file" width="80" height="80"></v-img>

    <v-file-input dense outlined chips  show-size counter multiple append-outer-icon="mdi-cloud-upload" accept="image/*" label="Files input"
    v-model="files" @change="addFiles" @click:append-outer="uploads"></v-file-input>
    <v-container>
      <v-row>
        <v-col cols="2" v-for="(file,f) in files" :key="f">
          <v-img :ref="'file'" src="//placehold.it/400/99cc77" class="img-fluid" :title="'file' + f" height="80" />
           <div class="text-caption">{{file.name}}</div>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<style scoped>


</style>
