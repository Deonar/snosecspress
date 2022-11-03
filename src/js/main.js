jQuery(document).ready(function ($) {
  // portfolio slider
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
  
// Tabs
  const tabsPrice = function () {
    let tabBtn = document.querySelectorAll(".price__tab-btn");
    let tabItem = document.querySelectorAll(".price__tab-item");

    tabBtn.forEach(function (item) {
      item.addEventListener("click", () => {
        let currentBtn = item;
        let tabId = currentBtn.getAttribute("data-tab");
        let currentTub = document.querySelector(tabId);

        tabBtn.forEach(function (item) {
          item.classList.remove("active");
        });

        tabItem.forEach(function (item) {
          item.classList.remove("active");
        });

        currentBtn.classList.add("active");
        currentTub.classList.add("active");
      });
    });
  };
tabsPrice();

  // portfolio slider
  let reviewsSlider = new Swiper(".reviews__slider", {
    navigation: {
      nextEl: ".reviews-slider-button-next",
      prevEl: ".reviews-slider-button-prev",
    },
    slidesPerView: 4,
    spaceBetween: 40,
    pagination: {
      el: ".reviews-slider-pagination",
      clickable: true,
    },
  });
  
    //Accordion 
    $(".accordion-tab-js").on("click", function() {
      if ($(this).hasClass("active")) {
          $(this).removeClass("active");
          $(this).find(".accordion-content-js").hide("300");
      } else {
          $(".accordion-tab-js").removeClass("active");
          $(this).addClass("active");
          $(".accordion-content-js").slideUp(200);
          $(this).find(".accordion-content-js").toggle("blind");
      }
    });
});
