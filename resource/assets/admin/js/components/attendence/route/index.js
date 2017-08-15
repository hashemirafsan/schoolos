/**
 * import vue and vue router 
 */
import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

/**
 * import all component file here 
 */
import Attendence from '../attendence.vue'

/**
 * export VueRouter 
 */
export default new VueRouter({
    routes: [
        {
        	path: '/',
        	name: 'default',
        	component: Attendence
        }
    ]
})