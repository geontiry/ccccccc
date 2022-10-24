<script>
//import AppContainer from '@/Layouts/Brenden/AppContainer.vue'
// import { CounterStore } from '@/Services/stores/counter'
import { useFetch } from '@/Services/composables/fetch'
import { increment } from '@/Services/utils/increment'
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: {},
  props: {
    propA: Number,
    propB: [String, Number, Boolean, Array, Object, Date, Symbol, Function],
    propC: { type: String, required: true, default: "Hello"},
    propF: {
      validator(value) { 
        return ['success', 'warning', 'danger'].includes(value)
      }
    }
  },
  emits: ['enlarge-text'], 

  setup (props, ctx) {
    ctx.emit('enlarge-text')
    
    const a = ref(3) //ref(false), ref(""), ref([]), 
    const b = computed(() => a.value + 2)
    const incrementA = () => { a.value ++ }

    const count = ref(0)

    // const counter = useCounterStore()
    // counter.count++
    // counter.$patch({ count: counter.count + 1 })
    // counter.increment()

    const {data, error, loading} = useFetch('https://jsonplaceholder.typicode.com/users', {});
    
    onMounted(() => { })
    watch(() => state.overlay, async (newA, oldA) => {}) 
    
    return { a, increment, incrementA, b, count, data, error, loading }
  }
} 
</script>

<template>
  <div>
    <button @click="incrementA">Add : {{ a }}</button>
    <div>b: {{b}}</div>
    
    <p>Util Count: {{ count }}</p>
    <button @click="increment(count)">Clicks: {{ count }}</button>

    <p>Store Counter:  </p>
    
    <div v-if="error"><h2>Error: {{ error }}</h2></div>
    <div v-if="loading"><h2>Loading data...</h2></div>
    <h2>Users</h2>
    <ul v-for="item in data" :key="item.id">
      <li><b>Name:</b> {{ item.name }} </li>
      <li><b>Username:</b> {{ item.username}} </li>
    </ul>
  </div>
</template>

<style lang="scss" scoped>
ul {
  list-style-type: none;
}
</style>