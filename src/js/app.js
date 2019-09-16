import CONST from './constants';

// General
import stickyHeader from './modules/sticky-header';
import triggerMenu from './modules/trigger-menu';
import search from './modules/search';
import browserHack from './modules/browser-hack';

stickyHeader();
triggerMenu();
search();
browserHack();

// Single Page
import snsSlide from './modules/sns-slide';
import stickySidebar from './modules/sticky-sidebar';

if(CONST.$body.hasClass('single-post')) {
  snsSlide();
}
stickySidebar();