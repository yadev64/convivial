import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

axios.defaults.baseURL = 'http://localhost:8000/api'

export default new Vuex.Store({
  state: {
    user: null
  },

  mutations: {
    setUserData (state, userData) {
      state.user = userData
      localStorage.setItem('user', JSON.stringify(userData))
      axios.defaults.headers.common.Authorization = `Bearer ${userData.access_token}`
      console.log('In mutation')
      console.log(`Bearer ${userData.access_token}`)
    },

    clearUserData () {
      localStorage.removeItem('user')
      location.reload()
    }
  },

  actions: {
    login ({ commit }, credentials) {
      return axios
        .post('/login', credentials)
        .then(({ data }) => {
          commit('setUserData', data)
          console.log(axios.defaults.headers.common.Authorization)
        })
    },

    logout ({ commit }) {
      commit('clearUserData')
    }
  },

  getters: {
    isLogged: state => !!state.user
  }
})
