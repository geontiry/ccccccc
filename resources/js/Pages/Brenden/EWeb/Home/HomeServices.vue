<template>
  <div>
      <h2 class="text-center text-h5">Services We Offer</h2>
      <p class="text-subtitle-1">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. 
          Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        <v-row no-gutters>
          <v-col cols="2" v-for="service in services" :key="service.name" class="px-1">
            <v-list dense class="card">
              <v-list-item class="justify-center"><v-list-item-icon><v-icon> {{ service.icon }} </v-icon></v-list-item-icon></v-list-item>
              <v-list-item class="text-center" :href="service.href"><v-list-item-title class="text-body-2"> {{ service.name }} </v-list-item-title></v-list-item>
              <v-list-item>
                <v-list-item-content class="text-body-2"> {{ service.description }}</v-list-item-content>
              </v-list-item>
            </v-list> 
          </v-col>
        </v-row>    
  </div>
</template>

<script>
export default {
  components: {},
  data: ()=>{
    return {
      services:[
        {name: 'Web Design', icon: 'mdi-web', href: route('eweb.design'), description: 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.'},
        {name: 'Web Domain', icon: 'mdi-web', href: route('eweb.domain'), description: 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.'},
        {name: 'Web Hosting', icon: 'mdi-web', href: route('eweb.host'), description: 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.'},
        {name: 'Web Integration', icon: 'mdi-web', href: route('eweb.integrate'), description: 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.'},
        {name: 'Web Learning', icon: 'mdi-web', href: route('eweb.learn'), description: 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.'},
        {name: 'Web Hiring', icon: 'mdi-web', href: route('eweb.hire'), description: 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.'}
      ]
    }
  }
};
</script>
<style scoped>
.card{
  background: rgba( 2, 63, 207, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
 
</style>