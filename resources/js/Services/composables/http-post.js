import { ref, reactive, toRefs } from '@vue/composition-api'

export function useHttpPost(url, options) {
  const state = reactive({ data: null, error: null, loading: false });

  const loadData = async () => {
    state.loading = true;
    try {
      //const payload = { userid: 42, firstName: 'John', lastName: 'Doe' }
      const res = await axios.post(url, options);
      state.data = res.data.data;
    } catch (e) {
      state.error = e;
    } finally {
      state.loading = false;
    }
  }

  loadData();
  
  return { ...toRefs(state)};
}