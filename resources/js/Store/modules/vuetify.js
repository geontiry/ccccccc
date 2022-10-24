const state = {
    snackbars: []
};

const getters = {

};

const mutations = {
    SET_SNACKBAR(state, snackbar) {
        state.snackbars = state.snackbars.concat(snackbar);
      },
};

const actions = {
    setSnackbar({commit}, snackbar) {
        snackbar.showing = true;
        snackbar.timeout = 2000;
        snackbar.color = 'success';
        commit('SET_SNACKBAR', snackbar);
      },
};

export default{
    state,
    getters,
    actions,
    mutations
}
