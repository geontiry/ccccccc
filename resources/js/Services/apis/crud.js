import { useFetch } from '@/Services/composables/fetch'
import { ref, reactive, toRefs } from '@vue/composition-api'

export function apiCrud() {
  // const apiSites = useFetch(route("web.2.0.sites"), {})
  
  const state = reactive({  
  });
  
  const loadCrud = (payload)=>{}

  const createCrud = (payload)=>{}

  const readCrud = (payload)=>{}

  const updateCrud = (payload)=>{}

  const deleteCrud = (payload)=>{}

  return { ...toRefs(state), loadCrud, createCrud, readCrud, updateCrud, deleteCrud };
}