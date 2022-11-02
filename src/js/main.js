jQuery(document).ready(function ($) {
  let portfolioSlider = new Swiper(".portfolio__slider", {
    navigation: {
      nextEl: ".portfolio-slider-button-next",
      prevEl: ".portfolio-slider-button-prev",
    },
    slidesPerView: 4,
    spaceBetween: 40,
    pagination: {
      el: ".portfolio-slider-pagination",
      clickable: true,
    },
  });
});
