const $ = require('jquery');

module.exports = {
  STICKY_CLASS: 'is-sticky',
  ACTIVE_CLASS: 'is-active',
  HIDDEN_CLASS: 'is-hidden',
  FADEOUT_CLASS: 'is-fadeout',
  $window: $(window),
  $document: $(document),
  $htmlBody: $('html, body'),
  $body: $('body')
};