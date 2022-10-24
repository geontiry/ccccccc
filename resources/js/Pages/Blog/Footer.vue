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
    <footer class="afooter">
    <div class="ftr row">
        <div class="col-8 col-sm-8 col-md-4">
            <h5>AFRICA TRAVELLER</h5>
            <div class="abt">
                <p>best African Safari Tours, Trips, Travel & Vacations. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <p>CONNECT <span>with</span> US</p>
                <div class="soc">
                    <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn" href="#"><i class="fab fa-google"></i></a>
                    <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class=" col-4 col-sm-4 col-md-2">
            <h5>QUICK LINKS</h5>
            <div class="lnk">
                <a href="#">About</a><hr>
                <a href="#">Newsletter</a><hr>
                <a href="#">Pricing</a><hr>
                <a href="#">Contact</a><hr>                        
                <a href="#">Travel Map</a><hr>                        
                <a href="#">Travel Agents</a><hr>
                <a href="#">Affiliates</a><hr> 
                <a href="#">Help Center</a><hr>                                               
                <a href="#">FAQ</a>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-3">
            <h5>RECENT POSTS</h5>
            <div class="pst">
                <p><a href="#"><img src="/upload/services/tour_guide.jpg">Lorem Ipsum is simply dummy text of the printing</a></p>
                <p><a href="#"><img src="/upload/services/tour_guide.jpg">Lorem Ipsum is simply dummy text of the printing</a></p>
                <p><a href="#"><img src="/upload/services/tour_guide.jpg">Lorem Ipsum is simply dummy text of the printing</a></p> 
                <p><a href="#"><img src="/upload/services/tour_guide.jpg">Lorem Ipsum is simply dummy text of the printing</a></p> 
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-3">
            <h5>DESTINATIONS</h5>
            <div class="dst">
                <a href="#">National and Marine Parks <span class="badge">8</span></a><hr>
                <a href="#">Museums &amp; Monuments <span class="badge">11</span></a><hr>
                <a href="#">Conservancies <span class="badge">7</span></a><hr>
                <a href="#">Festivities &amp; Rock Art <span class="badge">10</span></a><hr>
                <a href="destinations/cities&coasts.php">Cities &amp; Coasts <span class="badge">26</span></a><hr>
                <a href="#">Forests &amp; Wilderness <span class="badge">14</span></a><hr>
                <a href="#">Rivers, Lakes &amp; Seas <span class="badge">31</span></a><hr>
                <a href="#">Mountains, Highlands &amp; Valleys <span class="badge">17</span></a><hr>
                <a href="#">Other Popular Sites <span class="badge">4</span></a>
            </div>
        </div>
    </div>
    <hr>
    <div class="dev">
        <p>                    
            © 2020 @ Africa Travel Inc. All rights reserved.
            <span class="tc"><a href="#">Cookie Policy</a> | <a href="#">Privacy Policy</a> | <a href="#">Terms &amp; Conditions</a></span>
        </p>
        <p>Designed by <a href="#">Geontiry</a></p>
    </div>
</footer>
      
  </div>
</template>

<style lang="scss" scoped>
.afooter{
    background: var(--bgclr1);  }
.afooter a{
    color: #ffffff; text-decoration: none}
.afooter *{
    color: #7ac5cd;}
.afooter a:hover{
    color: #4d7cff;}
.afooter .pst p{
    border-bottom: 1px solid rgba(99, 99, 99, 0.2);}
.afooter .pst img{
    width: 2.5em; height: 2.5em; border-radius: 10%; display: inline-block; float: left;}
.afooter .badge{
    background: #d1011c; border-radius: 50%; float: right}
.ahmservice .det img{ 
    margin: 1px;  width: 4.5em; height: 4.5em; border-radius: 50%; display: inline-block; float: left;}
.ahmplan .det img{ 
    margin: 5px;  width: 4.5em; height: 4.5em; border-radius: 50%; display: inline-block; float: left;}

/*SOCIAL*/
.afooter .soc {
    margin: 2px}
.afooter .soc a {
    margin: 2px; padding: 4px; display: inline-block; width: 30px; height: 30px; background: #f1f1f1; border-radius: 30%; box-shadow: 0 5px 15px -5px #ecf0f1; color: #3498db; overflow: hidden; position: relative; text-align: center}
.afooter .soc a:hover, .soc a:hover i {
    transform: scale(1.2); color: #f1f1f1;}
.afooter .soc a::before {
    content: ""; position: absolute; width: 120%; height: 120%; background: #3498db; transform: rotate(45deg); left: -110%; top: 90%;}
.afooter .soc a:hover::before {
    animation: aaa 0.7s 1; top: -10%; left: -10%;}
.afooter .soc i {
    transition: 0.2s linear;}
.afooter .fa-facebook-f {
    color: #3c5a99;}
.afooter .fa-twitter {
    color: #1da1f2;}
.afooter .fa-instagram {
    color: #e1306c;}
.afooter .fa-google {
    color: #dd4b39;}
.afooter .fa-youtube {
    color: #ff0000;}            
@keyframes aaa {
    0% {left: -110%; top: 90%;}
    50% {left: 10%; top: -30%;}
    100% {left: -10%; top: -10%;}}
/*DEVELOPER*/
.tc{float: right}

</style>
