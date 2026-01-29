import initSwiper from './components/swiper';
import scrollToTop from './components/scrollToTop';

document.addEventListener('DOMContentLoaded', () => {
    console.log('✅ App loaded');

    scrollToTop();
    initSwiper();
});