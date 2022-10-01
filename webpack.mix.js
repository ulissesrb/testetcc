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

mix.js('resources/js/js_completo.js', 'public/js')
    .js('resources/js/add_colab.js', 'public/js')
    .js('resources/js/porque', 'public/js')
    .js('resources/js/sub_problema', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
