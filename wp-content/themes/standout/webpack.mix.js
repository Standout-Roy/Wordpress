const mix = require("laravel-mix");
const path = require("path");

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

mix.setPublicPath("./");

mix.js("src/main.js", "public/js").vue();
mix.sass("src/scss/main.scss", "public/css");

// Custom webpack configuration
mix.webpackConfig({
  resolve: {
    alias: {
      "@": path.resolve(__dirname + "/src"),
      "@components": path.resolve(__dirname + "/src/components"),
      "@layouts": path.resolve(__dirname + "/src/layouts"),
      "@views": path.resolve(__dirname + "/src/views"),
      "@store": path.resolve(__dirname + "/src/store"),
      "@router": path.resolve(__dirname + "/src/router"),
      "@assets": path.resolve(__dirname + "/src/assets"),
    },
  },
});

// Cache busting
if (mix.inProduction()) {
  mix.version();
}
