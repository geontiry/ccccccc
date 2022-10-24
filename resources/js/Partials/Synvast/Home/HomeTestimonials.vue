<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <div class="col-sm-12">	
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <h5>Customer <b>Testimonials</b></h5>
        <div class="row">
                    <div class="col-sm-6">
                        <div class="testimonial">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                        </div>
                        <div class="media">
                            <div class="media-left d-flex mr-3">
                                <img src="/examples/images/clients/1.jpg" alt="">										
                            </div>
                            <div class="media-body">
                                <div class="overview">
                                    <div class="name"><b>Paula Wilson</b></div>
                                    <div class="details">Media Analyst / SkyNet</div>
                                </div>										
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="testimonial">
                            <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                        </div>
                        <div class="media">
                            <div class="media-left d-flex mr-3">
                                <img src="/examples/images/clients/2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="overview">
                                    <div class="name"><b>FANCY CHEBET</b></div>
                                    <div class="details">Engineering Manager</div>
                                </div>										
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
  </div>
</template>

<style scoped>
h5 {
	color: #000; font-weight: 200; position: relative; margin: 0 0 20px 0; text-transform: uppercase; display: inline-block;}
h5::after {	
    content: ""; width: 50%; position: absolute; height: 4px; border-radius: 1px; background: #ff5555; left: 0;	bottom: -10px;}
.carousel {
	margin: 50px auto;}
.carousel .item {
    color: #999; overflow: hidden; min-height: 120px; font-size: 13px;}
.carousel .media {
	position: relative; padding: 0 0 0 20px; margin-left: 20px;}
.carousel .media img {
	width: 75px; height: 75px; display: block; border-radius: 50%; box-shadow: 0 2px 4px rgba(0,0,0,0.2); border: 2px solid #fff;}
.carousel .testimonial {
    color: #fff; position: relative; background: #9b9b9b; padding: 15px; margin: 0 0 20px 20px;}
.carousel .testimonial::before, .carousel .testimonial::after {
	content: ""; display: inline-block; position: absolute; left: 0; bottom: -20px;}
.carousel .testimonial::before {
    width: 20px; height: 20px; background: #9b9b9b; box-shadow: inset 12px 0 13px rgba(0,0,0,0.5);}
.carousel .testimonial::after {
    width: 0; height: 0; border: 10px solid transparent; border-bottom-color: #fff; border-left-color: #fff;}
.carousel .item .row > div:first-child .testimonial {
	margin: 0 20px 20px 0;}
.carousel .item .row > div:first-child .media {
	margin-left: 0;
}
.carousel .testimonial p {
	text-indent: 40px; line-height: 21px; margin: 0;}
.carousel .testimonial p::before {
	content: '\94'; color: #fff; font-weight: bold; font-size: 28px; line-height: 30px; position: absolute; left: -25px; top: 0;}
.carousel .overview {
	padding: 3px 0 0 15px;}
.carousel .overview .details {
	padding: 5px 0 8px;}
.carousel .overview b {
	text-transform: uppercase; color: #ff5555;}
.carousel .carousel-control {
	width: 30px; height: 20px; background: #666; text-shadow: none; top: 22px;}
.carousel-control i {
    font-size: 12px;}
.carousel-control.left {
	left: auto;	right: 50px;}
.carousel-control.right {
	left: auto;}
.carousel-indicators { 
    bottom: -30px;}
.carousel-indicators li, .carousel-indicators li.active {
	width: 6px; height: 6px; border-radius: 0; margin: 1px 4px;}
.carousel-indicators li {	
    background: #e2e2e2; border: 4px solid #fff;}
.carousel-indicators li.active {
	color: #fff; background: #ff5555; border: 5px double;}
.star-rating li {
	padding: 0 2px;}
.star-rating i {
	font-size: 10px; color: #ffdc12;}
 
</style>