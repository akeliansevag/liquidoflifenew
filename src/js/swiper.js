import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

const homeBanner = new Swiper('#home-banner', {
    autoplay: true,
    pagination: {
        el: ".banner-swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "<div></div></span>";
        },
      },
});

const productsSlider = new Swiper('#products-slider', {
  autoplay: true,
  slidesPerView: 1,
  spaceBetween: 35,
  loop: true,
  navigation: {
    prevEl: '#products-slider-nav button.previous-nav',
    nextEl: '#products-slider-nav button.next-nav'
  },
  breakpoints: {
    768: {
      slidesPerView: 2 
    },
    1024: {
      slidesPerView: 3
    }
  }
});

const clientsSlider = new Swiper('#clients-slider', {
  autoplay: true,
  navigation: {
    prevEl: '#clients-slider-nav button.previous-nav',
    nextEl: '#clients-slider-nav button.next-nav'
  },
  slidesPerView: 2,
  spaceBetween: 10,
  loop: true,
  breakpoints: {
    768: {
      slidesPerView: 3 
    },
    1024: {
      slidesPerView: 4
    }
  }
});

const testimonialsSlider = new Swiper('#testimonials-slider', {
  autoplay: true,
  pagination: {
    el: '#testimonials-swiper-navigation',
    clickable: true
  },
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  breakpoints: {
    1199: {
      slidesPerView: 2
    },
  }
});