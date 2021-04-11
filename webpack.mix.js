const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix
  .postCss("resources/css/app.css", "public/css", [
    require("tailwindcss"),
   ])
   .js('resources/js/app.js', 'public/js')
  .version();
