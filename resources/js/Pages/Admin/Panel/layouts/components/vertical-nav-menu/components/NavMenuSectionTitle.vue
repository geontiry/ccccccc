<script>
//import AppContainer from '@/Pages/Admin/Panel.vue'
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 

export default{
  components: { },
  props: {
    title: { type: String, required: true,},
  },

  setup (props, ctx) {
    const state = reactive({        
    })
    
    return { ...toRefs(state) } 
  }
} 
</script>

<template>
  <v-subheader><span class="title-wrapper">{{ title }}</span></v-subheader>
</template>

<style lang="scss" scoped>
@import '@/materio/sass/preset/mixins.scss';

@include theme(v-subheader) using ($material) {
  white-space: nowrap;
  position: relative;

  .v-icon {
    color: map-deep-get($material, 'dividers');
  }

  .title-wrapper {
    width: 100%;
    position: absolute;
    left: 0;
    border-bottom: 1px solid map-deep-get($material, 'dividers');
    line-height: 0.1em;
  }

  .title-wrapper span {
    background: map-deep-get($material, 'background');
    padding: 0 10px;
    font-size: 0.75rem;
    margin-left: 16px;
  }
}

.vertical-nav-menu-items {
  .v-subheader:not(:first-child) {
    margin-top: 18px;
  }
}
</style>
