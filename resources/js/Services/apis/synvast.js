import { useFetch } from '@/Services/composables/fetch'
import { ref, reactive, toRefs } from '@vue/composition-api'

export function apiSynvast() {
  const apiSites = useFetch(route("web.2.0.sites"), {})
  const apiCategories = useFetch(route("web.2.0.categories", 1), {})
  
  const state = reactive({ 
    sites:  apiSites.data.data, 
    categories: apiCategories.data.data, 
    supports: [
      {title: 'SynVast Account', href: '', },
      {title: 'SynVast Shopping', href: '', },
      {title: 'SynVast Orders', href: '', },
      {title: 'SynVast Partners', href: '' },
      {title: 'SynVast Interest', href: '', },
      {title: 'SynVast Blog', href: '', },
      {title: 'SynVast Careers', href: '', },
      {title: 'SynVast FAQ', href: '',},
      {title: 'SynVast Privacy', href: '', },
      {title: 'SynVast Terms', href: '', },
    ]
  });
  
  return { ...toRefs(state) };
}


// axios.get(route("api.sites.index"))
    // .then(response => {
    //   synvasts = response.data.sites.filter( ({business_id}) => business_id === 1 )
    //   brendens = response.data.sites.filter( ({business_id}) => business_id === 2 )
    //   gensets = response.data.sites.filter( ({business_id}) => business_id === 3 )
    // });