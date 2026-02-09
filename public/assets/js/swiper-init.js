// assets/js/swiper-init.js

document.addEventListener("DOMContentLoaded", () => {
  // Library missing? Stop.
  if (typeof Swiper === "undefined") return;

  const sliders = document.querySelectorAll(".swiper");

  // No sliders on page → exit immediately.
  if (!sliders.length) return;

  sliders.forEach((el) => {
    new Swiper(el, {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      speed: 600,
      watchOverflow: true, // disables if not enough slides

      pagination: {
        el: el.querySelector(".swiper-pagination"),
        clickable: true,
      },

      navigation: {
        nextEl: el.querySelector(".swiper-button-next"),
        prevEl: el.querySelector(".swiper-button-prev"),
      },

      breakpoints: {
        640: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
      },
    });
  });
});
