import CONST from './constants';

import loader from './modules/loader';
import stickyHeader from './modules/sticky-header';
import triggerMenu from './modules/trigger-menu';
import search from './modules/search';
import snsSlide from './modules/sns-slide';

loader();
stickyHeader();
triggerMenu();
search();

if(CONST.$body.hasClass('single-post')) {
  snsSlide();
}