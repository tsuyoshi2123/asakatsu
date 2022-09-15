const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/sass/reset.scss', 'public/css')
.sass('resources/sass/header.scss', 'public/css')
.sass('resources/sass/content.scss', 'public/css')
.sass('resources/assets/sass/app.scss', 'public/fontawesome/css')
.js('resources/js/app.js', 'public/js').vue()
