<template>
  <div>
    <v-row class="mb-2">
      <v-col cols="2" v-for="partner in partners" :key="partner.name">
        <v-card hover>
          <v-img :src="partner.logo" height="60"></v-img>
        </v-card>
      </v-col>
    </v-row>
  </div>
</template>

<script>
export default {
  components: {},
  data: ()=>{
    return {
      partners:[
        {name: '', href: '', logo: '/storage/eweb/logo/brenden/client-1.png'},
        {name: '', href: '', logo: '/storage/eweb/logo/brenden/client-2.png'},
        {name: '', href: '', logo: '/storage/eweb/logo/brenden/client-3.png'},
        {name: '', href: '', logo: '/storage/eweb/logo/brenden/client-4.png'},
        {name: '', href: '', logo: '/storage/eweb/logo/brenden/client-5.png'},
        {name: '', href: '', logo: '/storage/eweb/logo/brenden/client-6.png'},
      ]
    }
  }
};
</script>
<style scoped>
 
</style>