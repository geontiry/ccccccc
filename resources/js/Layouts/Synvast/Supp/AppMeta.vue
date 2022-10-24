<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api' 
  
export default { 
  components: { },
  props: {
      meta: {type: Object, required: false}
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { } 
  }
} 
</script>

<template>
<Head>
    <!--Required meta tags-->
    <link rel="canonical" href="https://synvast.co.ke/" />
    <title>{{ meta.title ? `${meta.title} | Synvast Electrical` : 'Synvast Electrical' }}</title>
    <meta name="keywords" content="...">
    <meta name="description" content="...">
    <meta name=”robots” content="follow, index">
    <!--Facebook integration-->
    <meta property="og:type" content="article" />
    <meta property="og:url" content="libvar.dev">
    <meta property="og:title" content="libvar.dev">
    <meta property="og:image" content="">
    <meta name="og:image:type" content="image/png">
    <meta name="og:image:width" content="1024">
    <meta name="og:image:height" content="600">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="Minimalist system for ...">
    <!--Twitter integration-->
    <meta name="twitter:url" content="Minimalist system for blah blah blah">
    <meta name="twitter:title" content="dev.to/nyxtom">
    <meta name="twitter:description" content="dev.to/nyxtom">
    <meta name="twitter:image" content="https://static.libvar.dev/logo-card-light.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@nyxtom">
    <meta name="twitter:creator" content="@USERNAME">
    <!--Favicons-->        
    <link rel="shortcut icon" type="image/png/x-icon" sizes="16x16"  href="favicon.ico">
    <link rel="shortcut icon" type="image/png/x-icon" sizes="32x32"  href="favicon.ico">
    <link rel="shortcut icon" type="image/png/x-icon" sizes="96x96"  href="favicon.ico">
    <link rel="shortcut apple-touch-icon" type="image/x-icon"  href="favicon.ico">
    <slot />
</Head>
</template>

<style lang="scss" scoped>

 
</style>