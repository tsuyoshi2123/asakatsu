const mix = require('laravel-mix');

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

mix.sass('resources/sass/reset.scss', 'public/css')
.sass('resources/sass/header.scss', 'public/css')
.sass('resources/sass/content.scss', 'public/css')
.sass('resources/assets/sass/app.scss', 'public/fontawesome/css')
.js('resources/js/app.js', 'public/js').vue()
.js('resources/js/report.js', 'public/js').vue()
    .sass('resources/sass/app.scss', 'public/css');
