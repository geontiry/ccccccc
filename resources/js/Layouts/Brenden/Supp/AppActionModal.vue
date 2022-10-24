<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const fab = ref(false)
    const dialog = ref(false)

    const onScroll = (e)=>{
        if (typeof window === 'undefined') return
        const top = window.pageYOffset ||   e.target.scrollTop || 0
        fab = top > 20
    }

    const toTop = ()=>$vuetify.goTo(0)
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <!-- Page Contact-->
  <v-btn text fab dark fixed bottom left color="primary" @click="dialog = !dialog"><v-icon>mdi-android-messages</v-icon>Contact</v-btn>
  <v-btn v-scroll="onScroll" v-show="fab" fab small dark fixed bottom right color="primary" @click="toTop"><v-icon>mdi-chevron-up</v-icon></v-btn>
  <v-dialog v-model="dialog" max-width="600px" class="formContact">
    <v-row dense>
      <v-col cols="4">
        <span class="icon-address"><strong class="title">Find Us</strong>
        <hr>415-40200 Kisii<br>GS3 Tech Plaza RM1</span>
        <v-divider></v-divider>  
        <span class=" icon-phone"><strong>Call Us</strong><hr>0716285824<br>0716285824</span>
        <v-divider></v-divider>  
        <span class="icon-mail"><strong>Mail Us</strong><hr>info@gensetr.com<br>eweb@gensetr.com</span>
        <v-divider></v-divider>
        <span class="icon-chat"><strong>Chat Us</strong></span><hr>
        <div class="soc">
            <a href="#" class="btn icon-message"></a>
            <a href="#" class="btn icon-whatsapp"></a>
            <a href="#" class="btn icon-telegram"></a>
            <a href="#" class="btn icon-messenger"></a>
        </div>
        <v-divider></v-divider>
        <span class="icon-follow"><strong>Follow Us</strong></span><hr>
          <div class="soc">
              <a href="#" class="btn icon-facebook"></a>
              <a href="#" class="btn icon-instagram"></a>
              <a href="#" class="btn icon-twitter"></a>
              <a href="#" class="btn icon-linkedin"></a>
              <a href="#" class="btn icon-youtube"></a>
          </div>
          <v-divider></v-divider>  
      </v-col>
      <v-col cols="8">
        <v-card>
          <v-card-text>
        <v-text-field label="File name"></v-text-field><small class="grey--text">* This doesn't actually save.</small>
      </v-card-text>
      <v-card-actions>
        <v-spacer></v-spacer>
        <v-btn text color="primary" @click="dialog = false"> Submit</v-btn>
      </v-card-actions>
    </v-card>
      </v-col>
    </v-row>
    
  </v-dialog>
  </div>
</template>

<style scoped>
.formContact{
  position: relative;
}
</style>