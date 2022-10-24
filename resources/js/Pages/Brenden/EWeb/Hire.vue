<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <section class="expert">
    <div class="title">
        <h2>Web Expertise</h2>
        <p class="trunc">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>
    <div class="row g-2">
        <div class="col-6">
            <div class="course">
                <img src="src/team/team-1.jpg" class="img-fluid" alt="">
                <div class="info">
                    <h4>Web Developer</h4>
                    <span>Chief Executive Officer</span>
                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                    <div class="mod">
                        <a href=""><i class="ri-twitter-fill"></i></a>
                        <a href=""><i class="ri-facebook-fill"></i></a>
                        <a href=""><i class="ri-instagram-fill"></i></a>
                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="course">
                <img src="src/team/team-2.jpg" class="img-fluid" alt="">
                <div class="info">
                    <h4>Web Designer</h4>
                    <span>Product Manager</span>
                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                    <div class="mod">
                        <a href=""><i class="ri-twitter-fill"></i></a>
                        <a href=""><i class="ri-facebook-fill"></i></a>
                        <a href=""><i class="ri-instagram-fill"></i></a>
                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="course">
                <img src="src/team/team-3.jpg" class="img-fluid" alt="">
                <div class="info">
                    <h4>Web Administrator</h4>
                    <span>CTO</span>
                    <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                    <div class="mod">
                        <a href=""><i class="ri-twitter-fill"></i></a>
                        <a href=""><i class="ri-facebook-fill"></i></a>
                        <a href=""><i class="ri-instagram-fill"></i></a>
                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="course">
                <img src="src/team/team-4.jpg" class="img-fluid" alt="">
                <div class="info">
                    <h4>Database Administrator</h4>
                    <span>Accountant</span>
                    <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                    <div class="mod">
                        <a href=""><i class="ri-twitter-fill"></i></a>
                        <a href=""><i class="ri-facebook-fill"></i></a>
                        <a href=""><i class="ri-instagram-fill"></i></a>
                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        
      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>
      
       <!-- Page Slot Footer -->
      <template #footer></template>    

    </app-container>
  </div>
</template> 
         
    

<script>
import AppContainer from "@/Layouts/Brenden/AppContainer.vue";

export default {
  components: {
    AppContainer,
    
  },
  mixins: [metainformation],
  data: () => ({
      meta: { title: 'Hiring', description: '', keywords: '',  },
    }),
};
</script>
