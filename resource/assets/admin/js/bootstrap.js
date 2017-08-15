/**
 * load some developement file
 */
require('bootstrap-sass')

window.Vue = require('vue')
window.axios = require('axios')
window.lodash = require('lodash')
window.$ = window.jQuery = require('jquery')
window.moment = require('moment')

Vue.filter('dateFormat', (date, format) => {
	let formats = {
		'short': 'DD-MM-YYYY',
		'long': 'dddd, Do MMMM, YYYY',
		'dateTime-short': 'DD-MM-YYYY HH:mm A',
		'dateTime-long': 'dddd, Do MMMM, YYYY HH:mm:ss A'
	};
    let dateObj = moment(date || null);
    return dateObj.isValid() ? dateObj.format(formats[format]) : null;
});
