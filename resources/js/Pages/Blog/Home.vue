<script>
import BlogHeader from "@/Pages/Blog/Header.vue"
import HomeFeature from "@/Pages/Blog/Home/Feature.vue"
import HomeSlider from "@/Pages/Blog/Home/Slider.vue"
import HomeServices from "@/Pages/Blog/Home/Services.vue"
import HomeSearch from "@/Pages/Blog/Home/Search.vue"
import BlogFooter from "@/Pages/Blog/Footer.vue"
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 

export default{
  components: { BlogHeader, HomeFeature, HomeSlider, HomeServices, HomeSearch, BlogFooter },
  props: {},

  setup (props, ctx) {
    const state = reactive({        
    })
    
    return { ...toRefs(state) } 
  }
} 

// /*SOCIAL SHARE BUTTON*/
// $(document).ready(function($) {
//     $("#btnshare").on('click', function(e){ 
//         e.preventDefault();
//         $("#socshare").toggle();
//     });
// });

// $(document).ready(function(){ 
//     //SCROLL BACK TO TOP
//     $("#backtop").click(function(e){
//         e.preventDefault();
//         $("html, body").animate({ scrollTop: 0 }, 550);
//         return false;
//     });		
//     $(window).scroll(function(){
//         if ($(this).scrollTop() > 50) {
//             $("#backtop").fadeIn();} 
//         else {
//             $("#backtop").fadeOut();}
//     });	
//     //SCROLL PROGRESS CIRCLE
//     var progressPath = document.querySelector('.progress-wrap path');
//     var pathLength = progressPath.getTotalLength();
//     progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
//     progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
//     progressPath.style.strokeDashoffset = pathLength;
//     progressPath.getBoundingClientRect();
//     progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
//     var updateProgress = function () {
//         var scroll = $(window).scrollTop();
//         var height = $(document).height() - $(window).height();
//         var progress = pathLength - (scroll * pathLength / height);
//         progressPath.style.strokeDashoffset = progress;
//     }
//     updateProgress();
//     $(window).scroll(updateProgress);	
//     jQuery(window).on('scroll', function() {
//         if (jQuery(this).scrollTop() > 50) {
//             jQuery('.progress-wrap').addClass('active-progress');
//         } else {
//             jQuery('.progress-wrap').removeClass('active-progress');
//         }
//     });				
//     jQuery('.progress-wrap').on('click', function(event) {
//         event.preventDefault();
//         jQuery('html, body').animate({scrollTop: 0}, 550);
//         return false;
//     });
// });   
</script> 

<template>
  <div>
    <BlogHeader />
    <HomeFeature />
    <HomeSlider />
    <HomeServices />
    <HomeSearch />
    <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
    <BlogFooter />
  </div>
</template>

<style scoped>
/*PROGRESS*/
.progress-wrap {
    position: fixed; right: 50px; bottom: 50px; height: 46px; width: 46px; cursor: pointer; display: block; border-radius: 50px; box-shadow: inset  0 0 0 2px rgba(255,255,255,0.2); z-index: 10000; opacity: 0; visibility: hidden; transform: translateY(15px); -webkit-transition: all 200ms linear; transition: all 200ms linear;}
.progress-wrap.active-progress {
    opacity: 1;	visibility: visible; transform: translateY(0);}
.progress-wrap::after {
    position: absolute;
    content: "\f062"; font: 900 15px "Font Awesome 5 Free"; text-align: center; line-height: 46px; font-size: 24px; color: red; left: 0; top: 0; height: 46px; width: 46px; cursor: pointer; display: block; z-index: 1; -webkit-transition: all 200ms linear; transition: all 200ms linear;}
.progress-wrap:hover::after {
    opacity: 0;}
.progress-wrap::before {
    position: absolute; font-family: 'unicons'; content: '\e84b'; text-align: center; line-height: 46px; font-size: 24px; opacity: 0; background-image: linear-gradient(298deg, var(--red), var(--yellow));	-webkit-background-clip: text; -webkit-text-fill-color: transparent; left: 0; top: 0; height: 46px; width: 46px; cursor: pointer; display: block; z-index: 2; -webkit-transition: all 200ms linear; transition: all 200ms linear;}
.progress-wrap:hover::before {
    opacity: 1;}
.progress-wrap svg path { 
    fill: none;}
.progress-wrap svg.progress-circle path {
    stroke: red; stroke-width: 4; box-sizing:border-box; -webkit-transition: all 200ms linear; transition: all 200ms linear;}
/*GENERAL*/
*, *:before, *:after {
    -webkit-box-sizing: inherit;  -moz-box-sizing: inherit; box-sizing: inherit;}            
* {
    --fontsz: calc((var(--fmin) * 1px) + (var(--fmax) - var(--fmin)) * ((100vw - 320px) / (1600 - 320))) !important;
    --fontst1: "Roboto Slab";
    --fontst2: "Amarante";   
    --fontst3: "Ruluko";
    --fontst4: "Ruluko";
    --fontst5: "Ruluko";
    --fontst6: "Ruluko";}
:root{
    --bgclr1: #032A63; --bgclr2: #0A4192; --bgclr3: #06357A; --bgclr4: #011E48; --bgclr5: #001027;
    --txtclr1: #ffffff; --txtclr2: #7ac5cd; --txtclr3: #525b6e; --txtclr4: #B5A269; --txtclr5: hsla(32 50% 50% / .99);}
html {
    -webkit-box-sizing: border-box;  -moz-box-sizing: border-box; box-sizing: border-box; background: #eee}
body{
    background: #eee;
    font-family: var(--fontst1);
    line-height: calc(1.2 + (2.4 - 1.2) * ((100vw - 300px)/(1600 - 300))) !important;
    font-size: var(--fontsz); --fmax: 15; --fmin: 12; color: var(--txtclr)} 
body > *:not(:first-child){
    margin: 1.0em 0 1.5em 0; padding: 0.5em}
h1 {
    font: 500 var(--fontsz) var(--fontst2);  --fmax: 45; --fmin: 25; color: var(--txtclr5)}
h2 {
    font-size: var(--fontsz); --fmax: 40; --fmin: 22; font-family: var(--fontst3); color: var(--txtclr4)}
h3 {
    font-size: var(--fontsz); --fmax: 35; --fmin: 20;}
h4 {
    font-size: var(--fontsz); --fmax: 30; --fmin: 18;}
h5 {
    font-size: var(--fontsz); --fmax: 25; --fmin: 16;}
h6 {
    font-size: var(--fontsz); --fmax: 20; --fmin: 14;}
p {
    font-size: var(--fontsz); --fmax: 15; --fmin: 12;}
hr{
    margin: 1px; padding: 1px;}

    /*SNIPPETS*/
    /*BUTTONS*/
.btn{
    margin: 0.4rem; padding: 0.5rem; border: 1px solid #adb5bd; border-radius: 7px; font-weight: 700; color: #677993; letter-spacing: 1.3px; cursor: pointer;}
.btn.active{
    background-color: var(--bgclr1); color: #fff; box-shadow: 2px 2px 25px -7px #4c4c4c; }
.btn:hover{
    color: var(--txtclr2)}
.btn:active{
    -webkit-transform: scale(0.97); transform: scale(0.97);}
.btnbook{
    margin: 0.2rem; padding: 0.5rem; border: 1px solid var(--bgclr1); border-radius: 7px; font-weight: 700; color: var(txtclr3); letter-spacing: 1.3px; cursor: pointer; text-decoration: none}
.btnbook:hover{
    background-color: var(--bgclr1); color: #fff; box-shadow: 2px 2px 25px -7px #4c4c4c;}
.btnexpl{
    margin: 0.2rem; padding: 0.5rem; border: 1px solid #adb5bd; border-radius: 7px; font-weight: 700; letter-spacing: 1.3px; cursor: pointer; background-color: var(--bgclr1); color: #fff; box-shadow: 2px 2px 25px -7px #4c4c4c; text-decoration: none}
.btnexpl:hover{background: var(--txtclr2) }
.btnonoff{
    margin: 0.2rem; padding: 4px 18px; border: 1px solid var(--bgclr1); border-radius: 12px; font-weight: 700; color: var(txtclr3); letter-spacing: 1.3px; cursor: pointer; text-decoration: none}
.btnoff:hover{
    background-color: var(--bgclr1); color: #fff; box-shadow: 2px 2px 25px -7px #4c4c4c;}
.btnon{
    margin: 0.2rem; padding: 4px 18px; border: 1px solid #adb5bd; border-radius: 20px; font-weight: 700; letter-spacing: 1.3px; cursor: pointer; background-color: var(--bgclr1); color: #fff; box-shadow: 2px 2px 25px -7px #4c4c4c; text-decoration: none}
.btnon:hover{background: var(--txtclr2) }
/*MEDIA OBJECT*/
.medobj {
    display: flex; align-items: flex-start;}
.medobj .objl{
    order: -1;}
.medobj .objr{
    order: 1;}
.medobj .med {
    flex: 1;}
/*TRUNCATE*/
.trunc {
    overflow: hidden; white-space: nowrap; text-overflow: ellipsis; }
.trunc1{
    overflow: hidden; white-space: nowrap; text-overflow: ellipsis; resize: horizontal;}
.trunc2 {
    overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;}
.trunc3 {
    overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;}
/*SOCIAL SHARE*/
.ashare a{
    margin: 1px; padding: 0; width: 25px; height: 25px; border-radius: 50%; box-shadow: 0 5px 15px -5px #ecf0f1; text-align: center}
.ashare a:hover, .ashare a:focus{
    -webkit-transform: scale(1.2);  -moz-transform: scale(1.2); -ms-transform: scale(1.2); -o-transform: scale(1.2); transform: scale(1.2); background: transparent}
.ashare a .fa-facebook-f {
    color: #3c5a99;}
.ashare a .fa-twitter {
    color: #1da1f2;}
.ashare a .fa-instagram {
    color: #e1306c;}
.ashare a .fa-google {
    color: #dd4b39;}
.ashare a .fa-youtube {
    color: #ff0000;} 
.ashare a .fa-share-alt {
    color: #3498db}
.ashare .soc{
    display: none}
.ashare #btnshare{
    transition: all 0.3s ease;}

</style>
