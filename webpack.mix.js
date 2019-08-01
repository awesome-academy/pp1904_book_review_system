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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
mix.copyDirectory('resources/admin', 'public/admin')
    .copyDirectory('resources/audio', 'public/audio')
    .copyDirectory('resources/css', 'public/css')
    .copyDirectory('resources/fonts', 'public/fonts')
    .copyDirectory('resources/img', 'public/img')
    .copyDirectory('resources/js/js', 'public/js');
