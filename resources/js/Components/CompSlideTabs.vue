<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    active: { type: Boolean, default: false },
    breadcrumbs: Object,
  },

  setup (props, ctx) {
    //const a = ref(3)
    
    return { }
  }
} 
</script>

<template>
  <div>
    <ul id="nav-1">
      <li class="slide1"></li>
      <li class="slide2"></li>
      <li><a href="#/">Alpha</a></li>
      <li><a href="#/">Beta</a></li>
      <li><a href="#/">Gamma</a></li>
      <li><a href="#/">Delta</a></li>
      <li><a href="#/">Epsilon</a></li>
    </ul>
  </div>
</template>

<style lang="scss" scoped>
#nav-1 {
  position: relative;
  border: none;
  border-radius: 10em;
  display: flex;
  list-style: none;
  background: #f5f5f5;
  box-shadow: 20px 40px 40px #00000033;
  padding: 10px;
  li {
    margin: 0px;
    a {
      position: relative;
      padding: 0.6em 2em;
      font-size: 18px;
      border: none;
      outline: none;
      color: #333;
      display: inline-block;
      text-decoration: none;
      z-index: 3;
    }
  }
  .slide1,
  .slide2 {
    position: absolute;
    display: inline-block;
    height: 3em;
    border-radius: 10em;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1.05);
  }
  .slide1 {
    background-color: yellowgreen;
    z-index: 2;
  }
  .slide2 {
    opacity: 0;
    background: #ddd;
    z-index: 1;
  }
  .squeeze {
    transform: scale(0.9);
  }
}
</style>