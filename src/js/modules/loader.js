import $ from 'jquery';
import CONST from '../constants';

export default function loader() {

  let $loader = $('.js-loader'),
      $svg = $('.js-loader-logo');

  if(!sessionStorage.getItem('visited')) {

    setTimeout(() => {
      $loader.addClass(CONST.HIDDEN_CLASS);
    }, 6000);

    try {
      sessionStorage.setItem('visited', true);
    } catch (e) {
      console.error(e);
    }

    // Need strokes on svg
    // $svg.find('path').each((index, val) => {
    //   let path = val;

    //   $(path).css(
    //     {
    //       'stroke-dasharray': length,
    //       'stroke-dashoffset': length,
    //       'animation': 'trace 1.2s linear forwards, traceFadeOut 0.2s linear 3.9s forwards'
    //     }
    //   ).delay(4400).queue(() => {
    //     $loader.addClass(CONST.HIDDEN_CLASS);
    //   });
    // });

  }
  else {
    $loader.addClass(CONST.FADEOUT_CLASS);
  }
}
