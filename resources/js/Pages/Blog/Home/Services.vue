<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({        
    })
    
    return { ...toRefs(state) } 
  }
} 
</script> 

<template>
  <div>
    <section class="ahmservice card">
    <div class="row g-2">
        <div class="col-3">
            <div class="det medobj alert alert-info">
                <img class="objl" src="upload/images/afr1.jpg">
                <div class="med">
                    <h5>Destinations</h5>
                    <p>We guide you through your travel destinations</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="det medobj alert alert-info">
                <img class="objl" src="upload/images/afr1.jpg">
                <div class="">
                    <h5>Transport</h5>
                    <p>We guide you through your trip</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="det medobj alert alert-info">
                <img class="objl" src="upload/images/afr1.jpg">
                <div class="">
                    <h5>Accomodation</h5>
                    <p>We guide you through travel accomodations</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="det medobj alert alert-info">
                <img class="objl" src="upload/images/afr1.jpg">
                <div class="">
                    <h5>Meals</h5>
                    <p>We guide you through your meals</p>
                </div>
            </div>
        </div>   
        <div class="col-3">
            <div class="det medobj alert alert-info">
                <img class="objl" src="upload/images/afr1.jpg">
                <div class="">
                    <h5>Culture &amp; Events</h5>
                    <p>We guide you through your travel destinations</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="det medobj alert alert-info">
                <img class="objl" src="upload/images/afr1.jpg">
                <div class="">
                    <h5>Tips &amp; Guides</h5>
                    <p>We guide you through your trip</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="det medobj alert alert-info">
                <img class="objl" src="upload/images/afr1.jpg">
                <div class="">
                    <h5>News &amp; Updates</h5>
                    <p>We guide you through travel accomodations</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="det medobj alert alert-info">
                <img class="objl" src="upload/images/afr1.jpg">
                <div class="">
                    <h5>Bookings</h5>
                    <p>We guide you through your bookings of flights/transport, hotel accomodations and entry reservations</p>
                </div>
            </div>
        </div>        
    </div>
</section>
      
  </div>
</template>

<style lang="scss" scoped>

</style>
