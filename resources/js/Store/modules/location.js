const state = {
    regions: [],
    counties: [],
    locations: [],
};

const getters = { };

const mutations = {
    SET_REGIONS(state, payload) { state.regions = payload },
    SET_COUNTIES(state, payload) { state.counties = payload },
    SET_LOCATIONS(state, payload) { state.locations = payload },
};

const actions = {
    async loadLocationsData({ commit }) {
        await axios.get(route("api.regions.index")).then(response => { commit('SET_REGIONS', response.data) });       
        await axios.get(route("api.counties.index")).then(response => { commit('SET_COUNTIES', response.data) });       
        await axios.get(route("api.locations.index")).then(response => { commit('SET_LOCATIONS', response.data) });      
    },
};

export default{
    state,
    getters,
    actions,
    mutations
}