<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api'

export default {
  components: {},
  name: "Node",
  props: {
    node: {type: Object, required: true}
  },

  setup(props, ctx) {
    const state = reactive({
      items: ['foo', 'bar', 'fizz', 'buzz'],
      value: null,
    })

    return { ...toRefs(state) }
  }
} 
</script> 

<template>
  <div>
    <li class="node-tree">
    <span class="label">{{ node.label }}</span>
    <ul v-if="node.children && node.children.length">
      <Node v-for="child in node.children" :node="child" :key="node.id"/>
    </ul>
  </li>
  </div>
</template>

<style lang="scss" scoped>
</style>


