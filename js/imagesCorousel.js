document.addEventListener("DOMContentLoaded", function () {
    // Initialize only the gallery swiper with unique selectors
    const gallerySwiper = new Swiper('#gallery-swiper', {
      loop: true,
      slidesPerView: 1.2,
      centeredSlides: true,
      spaceBetween: 20,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true, // Better than manual hover handling
      },
      pagination: {
        el: "#gallery-swiper .gallery-swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: "#gallery-swiper .gallery-swiper-button-next",
        prevEl: "#gallery-swiper .gallery-swiper-button-prev",
      },
      breakpoints: {
        640: {
          slidesPerView: 1.5,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 1.7,
          spaceBetween: 40,
        },
      },
    });
  
    // More efficient hover handling using Swiper's built-in events
    const gallerySlides = document.querySelectorAll("#gallery-swiper .swiper-slide");
    gallerySlides.forEach((slide) => {
      slide.addEventListener("mouseenter", () => {
        gallerySwiper.autoplay.stop();
      });
      slide.addEventListener("mouseleave", () => {
        gallerySwiper.autoplay.start();
      });
    });
  });