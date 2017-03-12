const { mix } = require('laravel-mix');

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
    .less('resources/assets/less/app.less', 'public/css')
    .options({
        processCssUrls: false
    })
    .version();

mix.scripts([
    'resources/assets/js/components/data-toggle.js',
    'resources/assets/js/components/side-panel.js',
    'resources/assets/js/components/nav-scroll.js',
    'resources/assets/js/libraries/sweetalert.min.js',
], 'public/js/trout.js');
