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
  let tabBtn = document.querySelectorAll('.price__tab-btn');
  let tabItem = document.querySelectorAll('.price__tab-item');
  
  tabBtn.forEach(function (item) {
    item.addEventListener('click', () => {
        let currentBtn = item;
        let tabId = currentBtn.getAttribute('data-tab');
        let currentTub = document.querySelector(tabId);
  
        tabBtn.forEach(function (item) {
          item.classList.remove('active');
        });
  
        tabItem.forEach(function (item) {
          item.classList.remove('active');
        });
  
        currentBtn.classList.add('active');
        currentTub.classList.add('active');
      });
  });
});
