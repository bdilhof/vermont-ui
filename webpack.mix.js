const mix = require('laravel-mix'),
  path = {
    js: 'public/dist/js',
    css: 'public/dist/css'
  };

mix.sass('resources/scss/index.scss', path.css);
mix.js('resources/js/index.js', path.js);

if (mix.inProduction()) {
    mix.version()
}
