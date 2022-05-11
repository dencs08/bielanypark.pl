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

mix.js([
    'resources/js/components/navbar.js',
    'resources/js/gsapAnims.js',
    'resources/js/app.js'
], 'public/js/app.js').version()
    .js([
        'resources/js/contact.js',
    ], 'public/js/contact.js').version()
    .js([
        'resources/js/lokale.js',
    ], 'public/js/lokale.js').version()
    .js([
        'resources/js/start.js',
    ], 'public/js/start.js').version()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/start.scss', 'public/css')
    .sass('resources/sass/lokale.scss', 'public/css')
    .sass('resources/sass/contact.scss', 'public/css');

mix.browserSync('127.0.0.1:8000');