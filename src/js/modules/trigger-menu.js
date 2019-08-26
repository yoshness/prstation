import $ from 'jquery';
import CONST from '../constants';

export default function triggerMenu() {
  let $trigger = $('.js-trigger-menu'),
      $menu = $('.js-menu');

  $trigger.on('click', () => {
    $trigger.toggleClass(CONST.ACTIVE_CLASS);
    $menu.toggleClass(CONST.ACTIVE_CLASS);

    // Don't allow scrolling of body if menu is open
    if($menu.hasClass(CONST.ACTIVE_CLASS)) {
      CONST.$htmlBody.css('overflow', 'hidden');
    }
    else {
      CONST.$htmlBody.css('overflow', 'scroll');
    }
  });
}