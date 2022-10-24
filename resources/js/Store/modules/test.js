const state = {
    user: {
        username: 'matt',
        fullName: 'Matt Maribojoc'
    },
    notes:[
        { id:1, title:'Title One' },
        { id:2, title: 'Title Two' }
    ]
};

const getters = {
    firstName: state => {
        return state.user.fullName.split(' ')[0]
    },
    lastName (state, getters) {
        return state.user.fullName.replace(getters.firstName, '');
   },
   prefixedName: (state, getters) => (prefix) => {
       return prefix + getters.lastName;
    },
    allNotes: (state) => state.notes
};

const mutations = {
    changeName (state, payload) {
        state.user.fullName = payload.newName
    }
};

const actions = {
    changedName ({ commit } , payload) {
        setTimeout(() => {
          commit("changeName", payload);
        }, 500);
      }
};

export default{
    state,
    getters,
    actions,
    mutations
}