import $ from 'jquery';
import CONST from '../constants';

export default function search() {
  let $trigger = $('.js-header-search-trigger'),
      $input = $('.js-header-search-input');

  $trigger.on('click', (e) => {
    e.preventDefault();
    $input.toggleClass(CONST.ACTIVE_CLASS);
    $input.focus();
  });

  $input.on('focusout', () => {
    setTimeout(() => {
      $input.removeClass(CONST.ACTIVE_CLASS);
    }, 100);
  });
}