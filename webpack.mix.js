let mix = require("laravel-mix");
let tailwindcss = require("tailwindcss");
require("laravel-mix-purgecss");

mix
  .js("resources/assets/js/app.js", "public/js")
  .postCss("resources/assets/css/main.css", "public/css", [
    tailwindcss("./tailwind.js"),
  ])
  .purgeCss();

if (mix.inProduction()) {
  mix.version();
}
