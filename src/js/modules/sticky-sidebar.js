import $ from 'jquery';
import CONST from '../constants';

export default function stickySidebar() {

  const $baseSection         = $('.js-single-article'),
        $stickySection       = $('.js-sidebar'),
        $stickySectionWrap   = $('.js-sidebar-wrapper');

  let headerOffset  = 148,
      bottom,
      sideOffset,
      windowScrolled;

  if($baseSection.length){
    CONST.$window.scroll(function(){
      if(window.innerWidth > 768){
        bottom = $baseSection.offset().top + $baseSection.outerHeight();
        bottom = (bottom - $stickySection.outerHeight()) - headerOffset;
        sideOffset = $baseSection.offset().top - headerOffset;
        windowScrolled = $(this).scrollTop();

        console.log($baseSection.outerHeight());
        console.log($stickySection.outerHeight());

        if($baseSection.outerHeight() > $stickySection.outerHeight()){
          if(windowScrolled > sideOffset && windowScrolled < bottom){
            $stickySection.addClass(CONST.FIXED_CLASS);
            $stickySection.removeClass(CONST.STICKY_CLASS);
          }else if(windowScrolled >= bottom) {
            $stickySection.removeClass(CONST.FIXED_CLASS);
            $stickySection.addClass(CONST.STICKY_CLASS);
          }else{
            $stickySection.removeClass(CONST.FIXED_CLASS);
            $stickySection.removeClass(CONST.STICKY_CLASS);
          }
        }
      }

      if(window.outerWidth > 768 && window.innerWidth < 1140){
        if($stickySection.hasClass(CONST.FIXED_CLASS)){
          $stickySectionWrap.css('transform', 'translate3d(' + -Math.abs(CONST.$window.scrollLeft()) + 'px, 0, 0)');
        } else {
          $stickySectionWrap.removeAttr('style');
        }
      } 
      else {
        $stickySectionWrap.removeAttr('style');
      }
    });

    window.addEventListener('resize', function(){
      if(window.innerWidth < 768){
        $stickySection.removeClass(CONST.FIXED_CLASS);
        $stickySection.removeClass(CONST.STICKY_CLASS);
      }
    });
  }
}