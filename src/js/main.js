jQuery(document).ready(function ($) {

  $("#header-burger").on("click", function (e) {
    $(this).toggleClass("active");
    $(".header__menu ").toggleClass("active");
    $("body").toggleClass("overflow-h");
    $(".menu-item").on("click", function () {
      $("body").toggleClass("overflow-h");
      $(".header__menu ").toggleClass("active");
      $("#header-burger").toggleClass("active");
    });
  });

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
  // mob slider
  let window_w = window.innerWidth;

  if (window_w < 811) {
    portfolioSlider = new Swiper(".portfolio__slider", {
      slidesPerView: 2,
      spaceBetween: 20,
      pagination: {
        el: ".portfolio-slider-pagination",
        clickable: true,
      },
    });
  }
  if (window_w < 415) {
    portfolioSlider = new Swiper(".portfolio__slider", {
      slidesPerView: 1,
      spaceBetween: 20,
      pagination: {
        el: ".portfolio-slider-pagination",
        clickable: true,
      },
    });
  }

  // Tab
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

  // reviews slider
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
  // mob slider
  if (window_w < 811) {
    reviewsSlider = new Swiper(".reviews__slider", {
      navigation: {
        nextEl: ".reviews-slider-button-next",
        prevEl: ".reviews-slider-button-prev",
      },
      slidesPerView: 2,
      spaceBetween: 40,
      pagination: {
        el: ".reviews-slider-pagination",
        clickable: true,
      },
    });
  }
  if (window_w < 415) {
    reviewsSlider = new Swiper(".reviews__slider", {
      navigation: {
        nextEl: ".reviews-slider-button-next",
        prevEl: ".reviews-slider-button-prev",
      },
      slidesPerView: 1,
      spaceBetween: 40,
      pagination: {
        el: ".reviews-slider-pagination",
        clickable: true,
      },
    });
  }

  //Accordion
  $(".accordion-tab-js").on("click", function () {
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

  //Scroll-header-menu
  var scrollPos = 0;
  $(document).scroll(function () {
    if (300 < $(document).scrollTop()) {
      $("#header").addClass("h-fixed");
    } else {
      $("#header").removeClass("h-fixed");
    }

    var st = $(this).scrollTop();
    if (st < scrollPos) {
      $("#header").removeClass("active");
    } else {
      $("#header").addClass("active");
    }
    scrollPos = st;
    if (scrollPos <= 200) {
      $("#header").removeClass("active");
    }
  });

  //Scroll to block
  $(".scrollto").on("click", function () {
    let href = $(this).find("a").attr("href").replace("/", "");

    $("html, body").animate(
      {
        scrollTop: $(href)?.offset()?.top - 120,
      },
      {
        duration: 370,
        easing: "linear",
      }
    );
    if ($(window).width() < 768) {
      $("html, body").animate({
        scrollTop: $(href)?.offset()?.top - 70,
      });
    }
    return false;
  });

  $(".gallery").each(function () {
    // the containers for all your galleries
    $(this).magnificPopup({
      delegate: "a", // the selector for gallery item
      type: "image",
      gallery: {
        enabled: true,
      },
    });
  });


   // Phone mask
   $(".mask-phone").mask("+38 (0ZZ) ZZZZ ZZZ", {
    translation: {
      Z: {
        pattern: /[0-9]/,
      },
    },
  });

  //Wow
  wow = new WOW({
    // mobile: false,
  });

  wow.init();
});
