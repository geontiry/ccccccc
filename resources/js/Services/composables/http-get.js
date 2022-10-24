import { ref, reactive, toRefs } from '@vue/composition-api'

export function useHttp(url, options) {
  const state = reactive({ data: null, error: null, loading: false });

  const loadData = async () => {
    state.loading = true;
    try {
      const res = await axios.get(url, options);
      state.data = res.data.data;
    } catch (e) {
      state.error = e;
    } finally {
      state.loading = false;
    }
  }

  loadData();
  
  // return { state }
  return { ...toRefs(state)};
}