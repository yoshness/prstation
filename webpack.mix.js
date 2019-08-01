const { mix } = require('laravel-mix');

const SRC_JS = 'src/js',
      SRC_CSS = 'src/sass',
      SRC_FONTS = 'src/fonts',
      SRC_IMAGES = 'src/images',
      ASSETS_FOLDER = './wp/wp-content/themes/prstation/assets';

mix.js(`${SRC_JS}/app.js`, ASSETS_FOLDER)
   .sass(`${SRC_CSS}/style.scss`, ASSETS_FOLDER)
   .copyDirectory(SRC_FONTS, `${ASSETS_FOLDER}/fonts`)
   .copyDirectory(SRC_IMAGES, `${ASSETS_FOLDER}/images`);