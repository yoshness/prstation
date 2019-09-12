import CONST from './constants';

import stickyHeader from './modules/sticky-header';
import triggerMenu from './modules/trigger-menu';
import search from './modules/search';
import snsSlide from './modules/sns-slide';
import browserHack from './modules/browser-hack';

stickyHeader();
triggerMenu();
search();
browserHack();

if(CONST.$body.hasClass('single-post')) {
  snsSlide();
}