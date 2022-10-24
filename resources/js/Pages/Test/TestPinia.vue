<template>
  <div>
      <button @click="increment">Add : {{ a }}
      <div>b: {{b}}</div>
      <div>Fetch: {{data}}</div>


       <h1>Hello Pinia 🍍!</h1>
    <h2>Logged in as {{ user.name }}</h2>
    <form @submit.prevent="addItemToCart">
      <input type="text" v-model="itemName">
      <button>Add</button>
    </form>
    <form @submit.prevent="buy">
      <ul>
        <li v-for="item in cart.items" :key="item.name">
          {{ item.name }} ({{ item.amount }})
          <button @click="cart.removeItem(item.name)" 
            type="button"
          >X</button>
        </li>
      </ul>

      <button :disabled="!user.name">Buy</button>
      <button :disabled="!cart.items.length" @click="clearCart" type="button">Clear the cart</button>
    </form>

    <template v-if="isEmbed">
      <hr>
      <p>Open
        <a target="_blank" href="https://vcuiu.csb.app/">the CodeSandbox</a> in a different tab and play around with the devtools. You have access to all the stores via a global variable
        <code>stores</code>
      </p>
    </template>
    <p v-else>
      Try opening the devtools and playing around with the store. All the stores via a global variable
      <code>stores</code>.
      <br>Find the code at
      <a
        href="https://codesandbox.io/s/pinia-example-vcuiu"
      >https://codesandbox.io/s/pinia-example-vcuiu</a>.
    </p>
</button>
  </div>
</template>
 
<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"

import { defineComponent, ref, reactive, toRefs, computed, watch, onMounted } from '@vue/composition-api'
import { useFetch } from '@/Services/composables/fetch.js'
import { useUserStore } from "@/Services/stores/user";
import { useCartStore } from "@/Services/stores/cart";
//import { useMouse } from './mouse.js'
  
export default {
  // components: {
  //   // AppContainer
  // },
  props: {
    propA: Number,
    propB: [String, Number, Boolean],
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
    const { data, error } = useFetch('https://jsonplaceholder.typicode.com/todos/1')
    //const { x, y } = useMouse()
    const b = computed(() => a.value + 2)
    const increment = () => { a.value ++ }

    const user = useUserStore();
    const cart = useCartStore();

    const itemName = ref("");
    const isEmbed = ref(window !== window.top);

    function addItemToCart() {
      if (!itemName.value) return;
      cart.addItem(itemName.value);
      itemName.value = "";
    }

    function clearCart() {
      if (window.confirm("Are you sure you want to clear the cart?")) {
        cart.rawItems = [];
      }
    }

    async function buy() {
      const n = await cart.purchaseItems();

      console.log(`Bought ${n} items`);

      cart.rawItems = [];
    }

    window.stores = { user, cart, addItemToCart };
    
    onMounted(() => { })
    watch(a, async (newA, oldA) => {}
    )
    
    return { 
      a, b, data, error, increment,

       itemName,
      addItemToCart,
      isEmbed,

      cart,

      user,
      buy,
      clearCart
    }
  }
} 
</script>



<!-- 
// composables/mouse.js
import { ref } from 'vue'
import { useEventListener } from './event'

export function useMouse() {
  const x = ref(0)
  const y = ref(0)

  useEventListener(window, 'mousemove', (event) => {
    x.value = event.pageX
    y.value = event.pageY
  })

  return { x, y }
} -->

<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
