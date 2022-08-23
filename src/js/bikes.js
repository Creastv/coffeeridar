(window.onload = function (event) {
  var swiper = new Swiper(".carousel", {
    grabCursor: true,
    slidesPerView: 1,
    preloadImages: false,
    loop: true,
    lazy: true,
    autoplay: {
      delay: 3900,
      disableOnInteraction: false
    },
    navigation: {
      nextEl: ".s-button-next",
      prevEl: ".s-button-prev"
    },
    breakpoints: {
      778: {
        slidesPerView: 2
      },
      998: {
        slidesPerView: 3
      },
       1200: {
        slidesPerView: 4
      }
    }
  });
})();