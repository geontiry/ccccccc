<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>     
        <section>
    <h1>Register Domain </h1>
    <p>Find your new domain name. Enter your name or keywords below to check availability.</p>     
    <form class="frmdomain">
        <label class="form-label">Enter a Domain:</label>
        <input type="text" class="dm form-control form-control-sm" placeholder="e.g. example.com">
        <input type="submit"  class="btn btn-primary" value="Search">
    </form>
    <div>
        <div class="domain">
            <i class="far">&#xf058;</i>
            <p>Congratulations! dafrican.com is available!</p>
        </div>
        <div class="row">
            <div class="col">
                <span>Ksh. 1250/Yr</span>
                <a href="#" class="btn btn-sm btn-primary">Buy</a>
            </div>
            <div class="col">
                <span>Ksh. 1250/Yr</span>
                <a href="#" class="btn btn-sm btn-primary">Renew</a>
            </div>
            <div class="col">
                <span>Ksh. 1250/Yr</span>
                <a href="#" class="btn btn-sm btn-primary">Transfer</a>
            </div>
        </div>
    </div>
    <h3>Similar Domains</h3>
    <div></div>
    <h3>Suggested Domains</h3>
    <div></div>
    <h3>All Domains</h3>    
    <div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="tblhd">
                    <th>Domain</th>
                    <th>Buy</th>
                    <th>Renew</th>
                    <th>Transfer</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>.com</td>
                    <td>Ksh. 2500/Year</td>
                    <td>Ksh. 1500/Year</td>
                    <td>Ksh. 3500/Year</td>
                    <td>Buy</td>
                </tr>
            </tbody>
        </table>
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
      meta: { title: 'Domain', description: '', keywords: '',  },
    }),
};
</script>
