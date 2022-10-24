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
    <section id="ahmcarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/upload/images/afr0.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tsavo National Park - Kenya</h5>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/upload/images/afr1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tsavo National Park - Kenya</h5>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/upload/images/afr2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tsavo National Park - Kenya</h5>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/upload/images/afr3.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tsavo National Park - Kenya</h5>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/upload/images/afr4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tsavo National Park - Kenya</h5>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                </div>
            </div>
           <div class="carousel-item">
                <img src="/upload/images/afr5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tsavo National Park - Kenya</h5>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/upload/images/afr6.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tsavo National Park - Kenya</h5>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/upload/images/afr7.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tsavo National Park - Kenya</h5>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/upload/images/afr8.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tsavo National Park - Kenya</h5>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                </div>
            </div>
        </div>
        <ul class="carousel-indicators">
            <li data-target="#ahmcarousel" data-slide-to="0" class="active"><img src="/upload/images/afr0.jpeg" alt="" /></li>
            <li data-target="#ahmcarousel" data-slide-to="1"><img src="/upload/images/afr1.jpg" alt="" /></li>
            <li data-target="#ahmcarousel" data-slide-to="2"><img src="/upload/images/afr2.jpg" alt="" /></li>
            <li data-target="#ahmcarousel" data-slide-to="3"><img src="/upload/images/afr3.webp" alt="" /></li>
            <li data-target="#ahmcarousel" data-slide-to="4"><img src="/upload/images/afr4.jpg" alt=""/></li>
           <li data-target="#ahmcarousel" data-slide-to="5"><img src="/upload/images//upload/images/afr5.jpg" alt='' /></li>
            <li data-target="#ahmcarousel" data-slide-to="6"><img src="/upload/images/afr6.jpg" alt='' /></li>
            <li data-target="#ahmcarousel" data-slide-to="7"><img src="/upload/images/afr7.jpg" alt='' /></li>
            <li data-target="#ahmcarousel" data-slide-to="8"><img src="/upload/images/afr8.jpg" alt='' /></li>
        </ul>
        <a class="carousel-control-prev" href="#ahmcarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#ahmcarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span>
        </a>
    </section>
      
  </div>
</template>

<style lang="scss" scoped>
// #ahmcarousel{}
#ahmcarousel .carousel-inner img{
    height: 500px; border-radius: 8px; -webkit-filter: saturate(150%) contrast(120%) hue-rotate(10deg) drop-shadow(1px 20px 10px rgba(0, 0, 0, 0.3)); filter: saturate(150%) contrast(120%) hue-rotate(10deg) drop-shadow(1px 20px 10px rgba(0, 0, 0, 0.3));} 
#ahmcarousel .carousel-item{
    background-color: #9be010; background: radial-gradient(#e5f89e, #96e001);}
#ahmcarousel .carousel-indicators {
    position: absolute; bottom: 0; }
#ahmcarousel .carousel-indicators>li {
    height: 40px; width: 60px; }
#ahmcarousel .carousel-indicators>li>img {
    margin: 0; padding: 0; height: 40px; width: 60px; border: 2px solid #FFFFFF; border-radius: 10px; float: left }
#ahmcarousel .carousel-indicators>li.active>img {
    border: 2px solid #428BCA;}
#ahmcarousel .carousel-indicators>li:not(.active)>img {
    opacity: 0.9;}
 #ahmcarousel .carousel-caption {
     right: 15%; bottom: unset; top: 80%; -webkit-transform: translateY(-50%); transform: translateY(-50%); text-align: left;}
#ahmcarousel .carousel-caption h5 {
    font-size: 1.8em; font-weight: 300; -webkit-animation: topToBottom 1s ease-in-out .5s;  animation: topToBottom 1s ease-in-out .5s;}
#ahmcarousel .carousel-caption p {
    -webkit-animation: leftToRight 1s linear .3s; animation: leftToRight 1s linear .3s;}
@-webkit-keyframes leftToRight {
    0% {opacity: 0; -webkit-transform: translateX(-80px); transform: translateX(-80px);}
    80% {-webkit-transform: translateX(20px); transform: translateX(20px); opacity: .7;}
    100% {opacity: 1; -webkit-transform: translateX(0); transform: translateX(0);}}
@keyframes leftToRight {
    0% {opacity: 0; -webkit-transform: translateX(-80px); transform: translateX(-80px); }
    80% {opacity: .7; -webkit-transform: translateX(20px); transform: translateX(20px);}
    100% {opacity: 1; -webkit-transform: translateX(0); transform: translateX(0);}}
@-webkit-keyframes topToBottom {
    0% {opacity: 0; -webkit-transform: translateY(-50px); transform: translateY(-50px);}
    80% {-webkit-transform: translateY(10px); transform: translateY(10px); opacity: .7;}
    100% {opacity: 1; -webkit-transform: translateY(0); transform: translateY(0);}}
@keyframes topToBottom {
  0% {opacity: 0; -webkit-transform: translateY(-50px); transform: translateY(-50px);}
    80% {-webkit-transform: translateY(10px); transform: translateY(10px); opacity: .7;}
    100% {opacity: 1; -webkit-transform: translateY(0); transform: translateY(0);}}       
#ahmcarousel .carousel-control-next, #ahmcarousel .carousel-control-prev {
    top: 50%; bottom: unset; -webkit-transform: translateY(-50%); transform: translateY(-50%); width: 3%; font-size: 8em;  padding: 4px; -webkit-transition: 5s all; transition: 5s all;}
#ahmcarousel .carousel-control-next {
    border-top-left-radius: 50px; border-bottom-left-radius: 50px;}
#ahmcarousel .carousel-control-prev {
    border-top-right-radius: 50px; border-bottom-right-radius: 50px;}

</style>
