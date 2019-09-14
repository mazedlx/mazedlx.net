const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix
  .sass('resources/css/app.scss', 'public/css')
  .options({
    processCssUrls: false,
    postCss: [tailwindcss()],
  })
  .js('resources/js/app.js', 'public/js')
  .extract()
  .version();
