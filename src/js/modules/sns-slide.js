import $ from 'jquery';
import CONST from '../constants';

export default function snsSlide() {
  let $snsContainer = $('.js-sns-slide'),
      $footer = $('.js-footer');

  CONST.$window.on('load resize', () => {
    if(CONST.$window.width() < 1425 && CONST.$window.width() > 767) {
      $snsContainer.addClass(CONST.SLIDE_CLASS);
      $footer.addClass(CONST.SLIDE_CLASS);
    }
    else {
      $snsContainer.removeClass(CONST.SLIDE_CLASS);
      $footer.removeClass(CONST.SLIDE_CLASS);
    }
  });
}