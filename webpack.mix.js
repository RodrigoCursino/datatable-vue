let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/admin/scripts/admin.js', 'public/admin/assets/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/style.scss', 'public/css')
   .sass('resources/assets/admin/sass/admin.scss', 'public/admin/assets/css')
   .copy('resources/assets/images', 'public/images')
   .copy('resources/assets/fonts', 'public/fonts')
   .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts')
   .copy('node_modules/dropify/dist', 'public/admin/assets/dropify')
   .copy('resources/assets/admin/template', 'public/admin/assets')
   .options({
       processCssUrls: false
   });
