<script>
import SectionGallery from "@/Partials/Synvast/Widget/Product/SectionGallery.vue"
import SectionHeader from "@/Partials/Synvast/Widget/Product/SectionHeader.vue"
import SectionVariations from "@/Partials/Synvast/Widget/Product/SectionVariations.vue"
import SectionPricing from "@/Partials/Synvast/Widget/Product/SectionPricing.vue"
import BtnFavorite from "@/Partials/Synvast/Widget/Action/BtnFavorite.vue"
import BtnCompare from "@/Partials/Synvast/Widget/Action/BtnCompare.vue"
import BtnMessage from "@/Partials/Synvast/Widget/Action/BtnMessage.vue"
import BtnRate from "@/Partials/Synvast/Widget/Action/BtnRate.vue"
import BtnShare from "@/Partials/Synvast/Widget/Action/BtnShare.vue"
import BtnQuantity from "@/Partials/Synvast/Widget/Action/BtnQuantity.vue"
import BtnQuote from "@/Partials/Synvast/Widget/Action/BtnQuote.vue"
import BtnCart from "@/Partials/Synvast/Widget/Action/BtnCart.vue"
import SectionDetail from "@/Partials/Synvast/Widget/Product/SectionDetail.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: {
    SectionGallery, SectionHeader, SectionPricing, SectionVariations, SectionDetail,
    BtnRate, BtnFavorite, BtnCompare, BtnMessage, BtnShare, BtnQuantity, BtnQuote, BtnCart,
   },
  props: {
    dense: {type: Boolean, required: true},
    color: { type: String, required: true },
    header: {type: Boolean, required: false},
    icontitle: {type: String, required: false,},
    lists: {type: Array, required: true,},
    iconlist: {type: String, required: false,},
    product: {type: Array, required: false,},
  },

  setup (props, ctx) {
    const state = reactive({  
      quantity: 1, 
      price: 1200,
      toggle_exclusive: undefined,      
    })
    // cartDialog: state => state.cart.cartDialog, 
    //   cartStatus: state => state.cart.cartStatus, 
    //   cartSnackbar: state => state.cart.cartSnackbar, 
    const changeQuantity = (quantity)=>{
      this.quantity = quantity
    }

    const cartAddItem = ()=>{
      let item = { product_code: this.product.product_code, quantity: this.quantity, price: this.price }
      this.$store.dispatch("cartAddItem", item);
    }
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div v-if="dense">
      <v-card hover class="pa-2">
        <section-gallery dense :image="product.image" :images="product.images"></section-gallery>
        <section-header dense :title="product.title" :description="product.description"></section-header>
        <v-card-text class="pa-0">
          <comp-rating color="orange" :rating="product.rating" :reviews="product.reviews"></comp-rating>
          <section-price dense></section-price>                             
        </v-card-text>
        <v-card-actions class="justify-space-between px-0">                              
          <btn-favorite dense :color="color"></btn-favorite>
          <btn-compare dense :color="color"></btn-compare>
          <btn-message dense :color="color"></btn-message>
          <btn-share dense :color="color"></btn-share>
          <btn-quantity dense :color="color" @quantity-changed="changeQuantity($event)"></btn-quantity>
          <btn-quote dense :color="color"></btn-quote>
          <btn-cart dense :color="color" :cartDialog="cartDialog" :cartStatus="cartStatus" :cartSnackbar="cartSnackbar" @add="cartAddItem"></btn-cart>
        </v-card-actions>
      </v-card>
    </div>
    <div v-else>
      <v-card>
        <v-row>
          <v-col cols="12" sm="6">
            <section-header :title="product.title" :description="product.description"></section-header>
            <section-gallery :images="product.images"></section-gallery>
            <div>Share</div>
            <btn-share :color="color"></btn-share>
            <v-divider></v-divider>
          </v-col>
          <v-col cols="12" sm="6">
            <section-variations :color="color" title="Select Version" :variations="product.variations" :variant="product.variant" :rating="product.rating" 
            :reviews="product.reviews" :value="product.rating.downloads" :product_code="product.product_code" :stats="product.stats">
            </section-variations>
            <v-divider></v-divider>
                <section-pricing :color="color" title="Select Pricing" :prices="product.prices"  :discount="product.discount" :priced="product.priced"></section-pricing>
                <v-card-actions class="mt-n6">
                  <v-btn-toggle dense rounded v-model="toggle_exclusive">
                    <btn-rate :color="color"></btn-rate>
                    <btn-message :color="color"></btn-message>  
                    <btn-favorite :color="color"></btn-favorite>  
                    <btn-compare :color="color"></btn-compare>
                  </v-btn-toggle>               
                  <btn-quantity :color="color" @quantity-changed="changeQuantity($event)"></btn-quantity>
                  <btn-quote :color="color"></btn-quote>
                  <btn-cart :color="color" :cartDialog="cartDialog" :cartStatus="cartStatus" :cartSnackbar="cartSnackbar" @add="cartAddItem"></btn-cart>
                  </v-card-actions>     
          </v-col>
          <v-col cols="12" sm="6">
            <section-detail :values="product.values"></section-detail>
          </v-col>
        </v-row>
        <v-card>
          <v-card-title>Related Products</v-card-title>
          <v-card-subtitle>Frequently Bought Together</v-card-subtitle>
          <v-card-subtitle>Similar Brand Products</v-card-subtitle>
          <v-card-subtitle>Recently Viewed Products</v-card-subtitle>
        </v-card>
    </v-card>
    </div>
  </div>
</template>

<style lang="css"  scoped>
/*$text-field-solo-dense-control-min-height: 12px;*/



</style>