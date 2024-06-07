/*
 |--------------------------------------------------
 | Slider
 |--------------------------------------------------
 */

import Swiper from "swiper";

import {
    Pagination,
    Controller,
    Navigation,
    Autoplay,
    EffectFade,
} from "swiper/modules";

Swiper.use([Controller, Pagination, Navigation, Autoplay, EffectFade]);

document.addEventListener("DOMContentLoaded", () => {
    const cardCaro = new Swiper(".card-carousel", {
        autoplay: {
            delay: 5500,
            disableOnInteraction: false,
        },
        loop: true,
        navigation: {
            nextEl: ".featured-carousel .swiper-button-next",
            prevEl: ".featured-carousel .swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            340: {
                slidesPerView: 1,
                spaceBetween: 5,
                centeredSlides: false,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
                forceLoop: true,
            },
        },
    });

    const imageGalleryCarousel = new Swiper(".gallery-carousel", {
        autoplay: {
            delay: 5500,
            disableOnInteraction: false,
        },
        loop: true,
        navigation: {
            nextEl: ".image-gallery .swiper-button-next",
            prevEl: ".image-gallery .swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            340: {
                slidesPerView: 1,
                spaceBetween: 5,
                centeredSlides: false,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
                forceLoop: true,
            },
        },
    });

    const logoCarousel = new Swiper(".logo-carousel", {
        autoplay: {
            delay: 5500,
            disableOnInteraction: false,
        },
        loop: true,
        navigation: {
            nextEl: ".logos-block .swiper-button-next",
            prevEl: ".logos-block .swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            340: {
                slidesPerView: 3,
                spaceBetween: 5,
                centeredSlides: false,
            },
            768: {
                slidesPerView: 5,
                spaceBetween: 5,
            },
            1024: {
                slidesPerView: 7,
                spaceBetween: 20,
                forceLoop: true,
            },
        },
    });

    const swiperTestimonial = new Swiper(".testimonials-carousel", {
        slidesPerView: 1,
        centeredSlides: true,
        effect: "fade",
        autoHeight: true,
        fadeEffect: {
            // added
            crossFade: true, // added(resolve the overlapping of the slides)
        },
        autoplay: {
            delay: 5500,
            disableOnInteraction: false,
        },
        loop: true,
        // navigation: {
        //     nextEl: ".swiper-button-next",
        //     prevEl: ".swiper-button-prev",
        //   },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
