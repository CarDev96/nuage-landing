let mix = require('laravel-mix');
require('mix-tailwindcss');

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

mix.js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .js('resources/js/scroll-reveal.js', 'public/js')
  .js('resources/js/navMobile.js', 'public/js')
  .sass('resources/sass/landing.scss', 'public/css')
  .tailwind();
