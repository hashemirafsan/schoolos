/**
 * import vue and vue router 
 */
import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

/**
 * import all component file here 
 */
import Dashboard from '../dashboard.vue'
import Test from '../component/test.vue'

/**
 * export VueRouter 
 */
export default new VueRouter({
    routes: [
        {
        	path: '/',
        	name: 'default',
        	component: Dashboard
        },
        {
        	path: '/test',
        	name: 'test',
        	component: Test
        }
    ]
})