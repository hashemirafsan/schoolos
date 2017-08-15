require('../../app');

import router from './route';
import store from './store';

const app = new Vue({
	router,
	store
}).$mount('#app');