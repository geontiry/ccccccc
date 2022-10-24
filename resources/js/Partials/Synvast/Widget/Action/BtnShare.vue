<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {
    dense: {type: Boolean, required: true},
    color: { type: String, required: true },
  },

  setup (props, ctx) {
    const state = reactive({  
      copied: false,
      dialogshare: false,
      tweet: encodeURIComponent(document.querySelector('meta[property="og:description"]')).getAttribute('content'),      
    })
    
    const socialWindow = (url)=>{
      var left = (screen.width - 570) / 2;
      var top = (screen.height - 570) / 2;
      var params = "menubar=no,toolbar=no,status=no,width=570,height=570,top=" + top + ",left=" + left;
      window.open(url,"NewWindow",params);      
    }

    const socialShare = (site)=>{
      let pageUrl = encodeURIComponent(document.URL);
      let tweet = encodeURIComponent(document.querySelector('meta[property="og:description"]').getAttribute('content'));
      switch (site){
        case 'facebook': socialWindow("https://www.facebook.com/sharer.php?u=" + pageUrl); break;
        case 'twitter': socialWindow("https://twitter.com/intent/tweet?url=" + pageUrl + "&text=" + tweet + "&hashtags=css,html"); break;
        case 'linkedin': socialWindow("https://www.linkedin.com/shareArticle?mini=true&url=" + pageUrl + "&summary=TEXT&source=CSS-Tricks"); break;
        case 'instagram':  socialWindow(""); break;
        case 'gmail': window.open("mailto:?subject=" +pageUrl +"&body=http%3A%2F%2Ftekeye.uk%2F"); break;
        case 'whatsapp': socialWindow("https://api.whatsapp.com/send/?text=" +pageUrl +"&app_absent=0"); break;
        case 'telegram': socialWindow("https://t.me/share/url?url=" +pageUrl +"/&text=Hi"); break;
        case 'facebook-messenger': socialWindow("fb-messen//share/?link=" + pageUrl); break;
      }
    }

    const printShare = ()=>window.print()
    const copyShare = ()=>{
      const markup = $refs.link
      markup.focus()
      document.execCommand('selectAll', false, null)
      copied = document.execCommand('copy')
    }
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div v-if="dense">
      <v-tooltip bottom>
        <template v-slot:activator="{ on, attrs }">
          <v-speed-dial v-model="fab" direction="right" absolute  top left transition open-on-hover class="mt-16 ml-n2">
            <template v-slot:activator>
              <v-btn icon top x-small v-model="fab" :color="color" class="share" v-bind="attrs" v-on="on"><v-icon v-if="fab" dense>mdi-close</v-icon><v-icon v-else dense>mdi-share-variant</v-icon></v-btn>
            </template>
            <v-btn x-small icon color="indigo" class="ml-n3 mr-0" @click="socialShare('facebook')"><v-icon>mdi-facebook</v-icon></v-btn>
            <v-btn x-small icon color="blue" class="mx-0 text-xl" @click="socialShare('twitter')"><v-icon>mdi-twitter</v-icon></v-btn>
            <v-btn x-small icon color="cyan" class="mx-0" @click="socialShare('linkedin')"><v-icon>mdi-linkedin</v-icon></v-btn>
            <v-btn x-small icon color="red" class="mx-0" @click="socialShare('gmail')"><v-icon>mdi-gmail</v-icon></v-btn>
            <v-btn x-small icon color="green" class="mx-0" @click="socialShare('whatsapp')"><v-icon>mdi-whatsapp</v-icon></v-btn>
            <v-btn x-small icon color="blue" class="mx-0" @click="socialShare('telegram')"><v-icon>mdi-telegram</v-icon></v-btn>
            <v-btn x-small icon color="blue-grey" class="mx-0" @click="printShare()"><v-icon>mdi-printer</v-icon></v-btn>
            <v-btn x-small icon color="#98a3aa" class="mx-0" @click="copyShare()"><v-icon>mdi-content-copy</v-icon></v-btn>
          </v-speed-dial>
          </template>
          <span>Share</span>
      </v-tooltip>
    </div>
    <div v-else>
      <v-btn small icon text color="indigo" @click="socialShare('facebook')"><v-icon dense>mdi-facebook</v-icon></v-btn>              
      <v-btn small icon text color="light-blue" @click="socialShare('twitter')"><v-icon dense>mdi-twitter</v-icon></v-btn>                          
      <v-btn small icon text color="cyan" @click="socialShare('linkedin')"><v-icon dense>mdi-linkedin</v-icon></v-btn>              
      <v-btn small icon text color="red" @click="socialShare('gmail')"><v-icon dense>mdi-gmail</v-icon></v-btn>              
      <v-btn small icon text color="green" @click="socialShare('whatsapp')"><v-icon dense>mdi-whatsapp</v-icon></v-btn>              
      <v-btn small icon text color="blue" @click="socialShare('telegram')"><v-icon dense>mdi-telegram</v-icon></v-btn>              
      <v-btn small icon text color="blue-grey" @click="printShare()"><v-icon dense>mdi-printer</v-icon></v-btn>              
      <v-btn small icon text color="#98a3aa" ref="link" value="https://g.co/kgs/nkrK43" @click="copyShare()"><v-icon dense>mdi-content-copy</v-icon></v-btn>
    </div>
    <v-dialog v-model="dialogshare" width="400">
        <v-card class="elevation-16 mx-auto">
        <v-card-title>
            <span class="title font-weight-bold">Share</span><v-spacer></v-spacer>
            <v-btn class="mx-0" icon @click="dialogshare = false"><v-icon>mdi-close-circle-outline</v-icon></v-btn>
        </v-card-title>
        <v-list dense>
            <v-list-item><v-list-item-icon><v-icon dense color="indigo">mdi-facebook</v-icon></v-list-item-icon><v-list-item-title class="text-subtitle-2">Facebook</v-list-item-title></v-list-item>
            <v-list-item><v-list-item-icon><v-icon ense color="cyan">mdi-twitter</v-icon></v-list-item-icon><v-list-item-title class="text-subtitle-2">Twitter</v-list-item-title></v-list-item>
            <v-list-item><v-list-item-icon><v-icon ense color="blue">mdi-linkedin</v-icon></v-list-item-icon><v-list-item-title class="text-subtitle-2">Linkedin</v-list-item-title></v-list-item>
            <v-list-item><v-list-item-icon><v-icon dense color="red">mdi-email</v-icon></v-list-item-icon><v-list-item-title class="text-subtitle-2">Email</v-list-item-title></v-list-item>
        </v-list>
        <v-text-field ref="link" :label="copied ? 'Link copied' : 'Click to copy link for sharing'" class="pa-4" readonly value="https://g.co/kgs/nkrK43" @click="copy"></v-text-field>
        </v-card>
    </v-dialog> 
  </div>
</template>

<style lang="scss" scoped>
.share{
  margin-top: 6px;
}

</style>