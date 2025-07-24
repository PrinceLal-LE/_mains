import './bootstrap';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

window.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper(".default-carousel", {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});

  
