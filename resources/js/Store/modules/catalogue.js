const state = {
    brands: [],
    sites: [],
    types: [],
    divisions: [],
    categories: [],
    catalogues: [],
};

const getters = { };

const mutations = {
    SET_BRANDS(state, payload) { state.brands = payload },
    SET_SITES(state, payload) { state.sites = payload },
    SET_TYPES(state, payload) { state.types = payload },
    SET_DIVISIONS(state, payload) { state.divisions = payload },
    SET_CATEGORIES(state, payload) { state.categories = payload },
    SET_CATALOGUES(state, payload) { state.catalogues = payload },
};

const actions = {
    async loadLocationsData({ commit }) {
        await axios.get(route("api.regions.index")).then(response => { commit('SET_REGIONS', response.data.regions) });       
        await axios.get(route("api.counties.index")).then(response => { commit('SET_COUNTIES', response.data.counties) });       
        await axios.get(route("api.locations.index")).then(response => { commit('SET_LOCATIONS', response.data.locations) });      
    },
};

export default{
    state,
    getters,
    actions,
    mutations
}