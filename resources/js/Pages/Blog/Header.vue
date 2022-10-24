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
    <header class="aheader">
    <div class="soc">
        <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
        <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
        <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
        <a class="btn" href="#"><i class="fab fa-google"></i></a>
        <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
    </div>
    <div class="hdr">
        <a href="about.php">About</a>
        <a href="about.php">Newsletter</a>
        <a href="about.php">Pricing</a>
        <a href="about.php">Contact</a>
        <a href="about.php">Map</a>
    </div>
    <div class="srch">                    
        <form class="">
            <input type="text" name="search" placeholder="Search.."> 
        </form>
    </div>
    <div class="acc">
        <a data-toggle="modal" href="#modal-logsign" id="alogin">Login</a>
        <a data-toggle="modal" href="#modal-logsign" id="asignup">Signup</a>
    </div>
</header>
<nav class="anav navbar navbar-expand-sm navbar-dark">
    <a class="navbar-brand" href="#"><img src="favicon.jpg" alt="africa_traveller">Africa Traveller</a>
    <a class="navbar-toggler btn" style=""data-toggle="collapse" data-target="#toggle_mobile"><span class="navbar-toggler-icon"></span></a>
    <div class="collapse navbar-collapse" id="toggle_mobile">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
            <a class="nav-link" href="/destinations.php">Destinations</a>
            <a class="nav-link" href="/transport.php">Transport</a>
            <a class="nav-link" href="/accomodation.php">Accomodation</a>
            <a class="nav-link" href="/meals.php">Meals</a>
            <a class="nav-link" href="/culture-events.php">Culture &amp; Events</a>
            <a class="nav-link" href="/tips-guides.php">Tips &amp; Guides</a>
            <a class="nav-link" href="/news-updates.php">News &amp; Updates</a>
            <a class="nav-link" href="/booking.php">Booking</a>                   
        </div>
    </div>
</nav> 
      
  </div>
</template>

<style lang="scss" scoped>
.aheader{
    background: var(--bgclr1); }
.aheader>div{
     display: inline-block;}
.aheader a{
    text-decoration: none; margin: 1px; padding: 4px}
.aheader a:hover{
    background: var(--bgclr2); border-radius: 10px; color: var(--txtclr2)}
.aheader .soc a{
     margin: 1px; padding: 0; width: 25px; height: 25px; background: #f1f1f1; border-radius: 15%; box-shadow: 0 5px 15px -5px #ecf0f1; color: #3498db; text-align: center}
.aheader .soc a .fa-facebook-f {
    color: #3c5a99;}
.aheader .soc a .fa-twitter {
    color: #1da1f2;}
.aheader .soc a .fa-instagram {
    color: #e1306c;}
.aheader .soc a .fa-google {
    color: #dd4b39;}
.aheader .soc a .fa-youtube {
    color: #ff0000;} 
.aheader .hdr{
    }
.aheader .srch input[type=text] {
    width: 130px; height: 1.5em; border: 2px solid #ccc; border-radius: 4px; background-color: white; background-image: 'searchicon.png'; background-position: 10px 10px; background-repeat: no-repeat; -webkit-transition: width 0.4s ease-in-out; transition: width 0.4s ease-in-out;}
.aheader .srch input[type=text]:focus {
    width: 100%;}
.aheader .acc{
    margin-right: 1.5em; float: right}
.aheader .hdr>a:not(:last-child),.aheader .acc>a:not(:last-child) {
    margin-right: 1px; padding-right: 6px; border-right: 1px solid rgba(255, 255, 255, 0.29);}

    .anav{
    background: var(--bgclr1); -webkit-position: sticky; -moz-position: sticky; position: -webkit-sticky; position: sticky; top: 0; z-index: 20;}
.anav .navbar-brand>img{
    width: 1.5em; height: 1.5em; display: inline-block;}
.anav .collapse a{
     font-family: var(--fontst2); text-transform: uppercase;}
.anav .collapse a.active{
    color: var(--txtclr1)}
.anav .collapse a:not(.active){
    color: var(--txtclr2)}
.anav .collapse a:hover {
    background: var(--bgclr2); color: var(--txtclr3); border-radius: 5px;} 

</style>
