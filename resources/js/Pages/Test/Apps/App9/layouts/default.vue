<template>
  <v-app dark>
    <siteHeader />
    <v-main>
      <nuxt />
      <footerTop />
    </v-main>
    <siteFooter />
    <Notification />
  </v-app>
</template>

<script>
import siteHeader from '@/Pages/Test/Apps/App9/components/siteHeader.vue'
import footerTop from '@/Pages/Test/Apps/App9/components/footerTop.vue'
import siteFooter from '@/Pages/Test/Apps/App9/components/siteFooter.vue'
export default {
  components: {
    siteHeader,
    footerTop,
    siteFooter,
  },
  head() {
    return {
      script: [
        {
          src: 'https://www.googletagmanager.com/gtag/js?id=G-0DYDMZEYDZ',
        },
      ],
    }
  },
}
</script>

<style></style>
