<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    // const a = ref(3)
    const errors = computed(()=>$page.props.errors)
    const hasErrors = computed(()=>Object.keys(this.errors).length > 0)
    
    return { errors, hasErrors }
  }
} 
</script>

<template>
    <div v-if="hasErrors">
        <div class="font-medium text-red-600">Whoops! Something went wrong.</div>
        <ul class="mt-3">
            <li v-for="(error, key) in errors" :key="key">{{ error }}</li>
        </ul>
    </div>
</template>
