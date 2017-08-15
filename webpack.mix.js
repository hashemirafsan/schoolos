const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your schoolos plugin. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
   .js('resource/assets/admin/js/components/access-right/access_right.js', 'admin/js')
   .js('resource/assets/admin/js/components/attendence/attendence.js', 'admin/js')
   .js('resource/assets/admin/js/components/class/class.js', 'admin/js')
   .js('resource/assets/admin/js/components/class-routine/class_routine.js', 'admin/js')
   .js('resource/assets/admin/js/components/dashboard/dashboard.js', 'admin/js')