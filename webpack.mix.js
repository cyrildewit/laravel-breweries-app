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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

// mix.copy('resources/assets/css/styles.css', 'public/css/styles.css');

mix.styles([
    'resources/assets/css/bootstrap.css',
    'resources/assets/css/gaia.css',
    'resources/assets/css/custom.css',
], 'public/css/styles.css');

mix.scripts([
    'resources/assets/js/jquery.min.js',
    'resources/assets/js/bootstrap.js',
    'resources/assets/js/modernizr.js',
    'resources/assets/js/gaia.js',
], 'public/js/all.css');
