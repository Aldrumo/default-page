let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

const tailwindcss = require('tailwindcss')

mix.sass('resources/scss/app.scss', './resources/assets/css')
  .copyDirectory('./node_modules/@fortawesome/fontawesome-free/webfonts', './resources/assets/fonts')
  .options({
    processCssUrls: false,
    postCss: [ tailwindcss('./tailwind.config.js') ],
  })
  .webpackConfig({
    resolve: {
        modules: [
            'node_modules'
        ]
    }
});
