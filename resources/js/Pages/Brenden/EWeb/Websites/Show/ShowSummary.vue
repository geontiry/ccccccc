<template>
  <div>
    <v-card>
      <comp-header :title="website.title" :overview="website.overview"></comp-header>      
      <s-rating color="primary" :rating="rating" :reviews="reviews" name="Downloads" icon="mdi-download" :value="rating.downloads" more></s-rating>
      <comp-selection-tags title="Select Version" :tags="website.versions" :selected="website.cur_version" :price="website.price"  :discount="website.discount" :priced="website.priced"></comp-selection-tags>
      <v-card-actions class="justify-space-between">  
        <comp-modal-share></comp-modal-share>   
        <comp-modal-rate></comp-modal-rate>  
        <comp-modal-message></comp-modal-message>
        <comp-modal-favorite></comp-modal-favorite> 
        <comp-modal-compare></comp-modal-compare>
        <comp-modal-demo></comp-modal-demo>
        <comp-modal-quote></comp-modal-quote>
        <comp-modal-cart></comp-modal-cart>
      </v-card-actions>
      <v-card-text>   
        <p class="text-subtitle-1 mb-1">Summary</p>  
        <v-row no-gutters  class="">
          <v-col cols="auto" class="m-auto"><comp-summary-stat name="Latest Version" icon="mdi-download" :value="website.cur_version"></comp-summary-stat></v-col>
          <v-col cols="auto" class="m-auto"><comp-summary-stat name="File Size" icon="mdi-folder-download-outline" :value="website.file_size"></comp-summary-stat></v-col>
          <v-col cols="auto" class="m-auto"><comp-summary-stat name="Created" icon="mdi-clock-outline" :value="website.created"></comp-summary-stat></v-col>
          <v-col cols="auto" class="m-auto"><comp-summary-stat name="Updated" icon="mdi-update" :value="website.updated"></comp-summary-stat></v-col>
        </v-row>
        <comp-summary-avatars title="Compatible Browsers" :avatars="browsers"></comp-summary-avatars>
        <comp-summary-avatars title="Design Architecture" :avatars="techs"></comp-summary-avatars>
        <comp-summary-tags title="Recommended Uses" :tags="website.uses"></comp-summary-tags>        
      </v-card-text>
    </v-card>
  </div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
import CompHeader from "@/Components/CompHeader.vue";
import SRating from "@/Components/SRating.vue";
import CompSelectionTags from "@/Components/CompSelectionTags.vue";
/*import CompModalShare from "@/Component/CompModalShare";
import CompModalRate from "@/Component/CompModalRate";
import CompModalMessage from "@/Component/CompModalMessage";
import CompModalFavorite from "@/Component/CompModalFavorite";
import CompModalCompare from "@/Component/CompModalCompare";
import CompModalDemo from "@/Component/CompModalDemo.vue";
import CompModalQuote from "@/Component/CompModalQuote";
import CompModalCart from "@/Component/CompModalCart";*/
import CompSummaryStat from "@/Components/CompSummaryStat.vue";
import CompSummaryAvatars from "@/Components/CompSummaryAvatars.vue";
import CompSummaryTags from "@/Components/CompSummaryTags.vue";
export default {
  components: {
    CompHeader,
    SRating,
    CompSelectionTags,
    /*CompModalShare,
    CompModalRate,
    CompModalMessage,
    CompModalFavorite,
    CompModalCompare,
    CompModalDemo,
    CompModalQuote,
    CompModalCart,*/
    CompSummaryStat,
    CompSummaryAvatars,
    CompSummaryTags
  },
  props: {},
  //mixins: [mixin],
  data: function () {
    return {
      website: {
        title: 'Personal Portfolio Website',
        slug:'',
        overview: 'Our blouses are available in 8 colors. You can custom order a built-in arch support for any of the models. Et nemo qui impedit suscipit alias ea',
        price: 1250,
        discount: 12,
        priced: 1150,
        downloads: 436,
        uses: [ 'blog', 'school', 'portfolio', 'resume', 'medical', 'sports', ],
        versions: [ '1.0.0', '1.4.8', '1.6.7', '2.4.2', '3.2.4', ],
        cur_version: '3.2.4',
        file_size: '15 MB',
        created: '08 Dec 2020',
        updated: '08 Dec 2020',
      },
      reviews: [
        { title: 'Excellent', stars: 5, count: 75, percentage: 75},
        { title: 'Good', stars: 4, count: 150, percentage: 85},
        { title: 'Average', stars: 3, count: 15, percentage: 45},
        { title: 'Poor', stars: 2, count: 5, percentage: 20},
        { title: 'Bad', stars: 1, count: 2, percentage: 8},
      ],
      rating: {
        rate: 4.5,
        percentage: 75,
        reviews: 158,
        downloads: 180,
      },
      browsers: [ 
        { name: 'Google Chrome', version: '', img: '/storage/eweb/logo/browsers/chrome.png'},
        { name: 'Mozilla Firefox', version: '', img: '/storage/eweb/logo/browsers/firefox.png'},
        { name: 'Opera', version: '', img: '/storage/eweb/logo/browsers/opera.png'},
        { name: 'Microsoft Edge', version: '', img: '/storage/eweb/logo/browsers/edge.png'},
        { name: 'Internet Explorer', version: '', img: '/storage/eweb/logo/browsers/explorer.png'},
        { name: 'Apple Safari', version: '', img: '/storage/eweb/logo/browsers/safari.png'},
      ],
      techs: [ 
        { name: 'HTML', version: '5', img: '/storage/eweb/logo/languages/client_html.png'},
        { name: 'CSS', version: '3', img: '/storage/eweb/logo/languages/client_css.png'},
        { name: 'JavaScript', version: '3', img: '/storage/eweb/logo/languages/client_javascript.jpg'},
        { name: 'jQuery', version: '3.2', img: '/storage/eweb/logo/languages/client_jquery.png'},
      ],
    }
  },
  computed: {
    total() {
        return this.webs.map(web => {
            return web.reviews.reduce((sum, item) => {
                return sum += item.count;
            }, 0);
        })
    }
  },
  watch: {},
  methods: {
    
  }
};
</script>

<style lang="scss" scoped>

</style>