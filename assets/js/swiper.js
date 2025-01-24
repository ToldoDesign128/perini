var swiper = new Swiper(".brandSwiper", {
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 5000,
    },
    spaceBetween: 30,
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1280: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
});

var swiper2 = new Swiper(".testimonialSwiper", {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 30,
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1280: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});

var swiper3 = new Swiper(".heroSwiper", {
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 5000,
    },
});