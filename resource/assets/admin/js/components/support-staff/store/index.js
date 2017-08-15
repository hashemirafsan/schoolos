/**
 * import vue and vuex here
 */
import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

/**
 * import local action and mutation
 */
import actions from './_actions.js'
import mutations from './_mutations.js'

/**
 * export vuex store
 */
export default new Vuex.Store({
    state: {},
    getters: {},
    mutations,
    actions,
})