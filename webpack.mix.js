const { mix } = require('laravel-mix');

const SRC_JS = 'src/js',
      SRC_CSS = 'src/sass',
      ASSETS_FOLDER = './wp/wp-content/themes/prstation/assets';

mix.js(`${SRC_JS}/app.js`, ASSETS_FOLDER)
   .sass(`${SRC_CSS}/style.scss`, ASSETS_FOLDER);