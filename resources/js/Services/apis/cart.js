import { useFetch } from '@/Services/composables/fetch'
import { ref, reactive, toRefs } from '@vue/composition-api'

export function apiCart() {
  const apiSites = useFetch(route("web.2.0.sites"), {})
  
  const state = reactive({  
    cart_items: [], 
    cart_count: '', 
    cart_total: '',
    cartDialog: false, 
    cartSnackbar: false, 
    cartStatus: false,    
  });
  
  const listCart = ()=>{
    axios.get(route('api.v1.0.carts.index'))
    .then(response => {
      state.cart_items = response.data.cart_items
      state.cart_count = response.data.cart_count
      state.cart_total = response.data.cart_total
    });
  }

  const fetchCart = ()=>{}

  const addCart = (payload)=>{
    state.cartDialog = true
    state.cartSnackbar = false
    setTimeout(() => {
      axios.post(route('api.v1.0.carts.store'), payload)
      .then(response => {
        state.cartDialog = false
        state.cartSnackbar = true
        state.cartStatus = 'Success',
        listCart()
      })
      .catch((error) => { 
        state.cartStatus = 'Error'
      })
    }, 1000); 
  }

  const editCart = (payload)=>{
    setTimeout(() => {
      axios.post(route('api.v1.0.carts.store'), payload)
      .then(response => {
        state.cartStatus = 'Success',
        listCart()
      })
      .catch((error) => { 
        state.cartStatus = 'Error'
      })
    }, 1000); 
  }

  const clearCart = (payload)=>{
    state.cartDialog = true,
    state.cartSnackbar = false,
    setTimeout(() => {
      axios.delete(route('api.v1.0.carts.destroy'), payload)
      .then(response => {
        state.cartDialog = false,
        state.cartSnackbar =false,
        state.cartStatus = 'Success',
        listCart()
      })
      .catch((error) => { 
        state.cartStatus = 'Error'
      })
    }, 1000);
  }

  const emptyCart = ()=>{}

  return { ...toRefs(state) };
}