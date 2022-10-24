<script>
import TWLayout from "@/Pages/Test/Tailwind/TWLayout.vue"
import NodeTree from "@/Pages/Demo/Developer/NodeTree.vue"
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api'

export default { 
  components: {
    NodeTree,
    TWLayout
  },
  props: {},

  setup(props, ctx) {
    const state = reactive({
      treeData: {
        label: "Parent",
        children: [
          { 
            label: "Child 1",
            children: [
              { label: "Subchild 1" },
              { label: "Subchild 2" },
            ]
          },
          { label: "Child 2" }
        ]
      }
    })

    return { ...toRefs(state) }
  }
} 
</script> 

<template>
  <div>
    <v-app>
      <v-navigation-drawer app>
        
      </v-navigation-drawer>
      <v-app-bar app>
      </v-app-bar>
      <v-main>
        <v-container fluid>
          <TWLayout />
         
          <!-- <div class="tree">
            <ul class="tree-list">
              <NodeTree :node="treeData"></NodeTree>
            </ul>
          </div> -->
        </v-container>
      </v-main>

      <v-footer app>
      </v-footer>
    </v-app>


  </div>
</template>

<style lang="scss" scoped>

.tree-list ul {
  padding-left: 16px;
  margin: 6px 0;
}

</style>
