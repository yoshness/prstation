import $ from 'jquery';
import CONST from '../constants';

export default function stickyHeader() {
  let offset = 500,
      stickyTrigger = (CONST.$window.innerHeight() / 2) + offset;

  CONST.$window.on('scroll', () => {

    const $header = $('#js-header'),
          windowScrollTop = CONST.$window.scrollTop();

    if (windowScrollTop >= 95) {
      $header.addClass(CONST.STICKY_CLASS);
    } else {
      $header.removeClass(CONST.STICKY_CLASS);
    }
  });
}