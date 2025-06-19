<!-- Include Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

<!-- Gallery Section -->
<section id="gallery" class="py-16 bg-gray-50">
  <div class="section-container">
    <div class="flex flex-col md:flex-row items-center justify-between gap-8 mb-12">
      <div class="text-center md:text-left">
        <h2 class="section-title text-3xl font-bold text-gray-800">Gallery</h2>
        <p class="section-subtitle text-gray-600">View images from our recent activities</p>
      </div>
      <div class="gallery-swiper-controls flex items-center gap-6">
        <button class="gallery-swiper-button-prev swiper-nav-btn" aria-label="Previous Slide">
          <i class="fas fa-arrow-left"></i>
        </button>
        <div class="gallery-swiper-pagination swiper-pagination"></div>
        <button class="gallery-swiper-button-next swiper-nav-btn" aria-label="Next Slide">
          <i class="fas fa-arrow-right"></i>
        </button>
      </div>
    </div>

    <div class="swiper" id="gallery-swiper">
      <div class="swiper-wrapper" id="gallery-wrapper">
        <!-- Slides will be injected here by JavaScript -->
      </div>
    </div>
  </div>
</section>

<!-- Include Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Font Awesome for navigation icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Gallery Styles -->
<style>
  .image-container {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    transition: transform 0.3s ease;
  }

  .image-container:hover {
    transform: scale(1.02);
  }

  .image-container img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    display: block;
  }

  .image-overlay {
    position: absolute;
    bottom: 0;
    width: 100%;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
    color: #fff;
    padding: 12px 16px;
    box-sizing: border-box;
  }

  .swiper-nav-btn {
    background-color: #056839;
    color: #fff;
    border: none;
    padding: 10px 14px;
    border-radius: 50%;
    font-size: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s ease;
  }

  .swiper-nav-btn:hover {
    background-color: #044e2a;
  }

  .swiper-pagination-bullet {
    background: #ccc;
    opacity: 1;
  }

  .swiper-pagination-bullet-active {
    background: #056839;
  }

  @media (max-width: 768px) {
    .image-container img {
      height: 200px;
    }
  }

  @media (max-width: 480px) {
    .gallery-swiper-controls {
      justify-content: center;
      flex-direction: column;
      gap: 8px;
    }
  }
</style>

<!-- JavaScript to Fetch and Display Gallery -->
<script>
  document.addEventListener("DOMContentLoaded", async function () {
    const wrapper = document.getElementById("gallery-wrapper");

    try {
      const response = await fetch("https://rcrp.gov.mw/wp-json/wp/v2/gallery?acf_format=standard");
      const data = await response.json();

      data.forEach((item) => {
        const imageUrl = item.acf?.image?.url || item.acf?.image;
        const imageAlt = item.title.rendered || "Gallery Image";
        const description = item.acf?.image_description || "";

        const slide = document.createElement("div");
        slide.className = "swiper-slide p-4";
        slide.innerHTML = `
          <div class="h-full w-full image-container shadow-md">
            <img src="${imageUrl}" alt="${imageAlt}" />
            <div class="image-overlay">
              <h3 class="text-lg font-semibold">${imageAlt}</h3>
              <p class="text-sm mt-1">${description}</p>
            </div>
          </div>
        `;
        wrapper.appendChild(slide);
      });

      // Initialize Swiper
      const gallerySwiper = new Swiper('#gallery-swiper', {
        loop: true,
        slidesPerView: 1.2,
        centeredSlides: true,
        spaceBetween: 20,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
        pagination: {
          el: "#gallery-swiper .gallery-swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".gallery-swiper-button-next",
          prevEl: ".gallery-swiper-button-prev",
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

      // Optional: Pause autoplay on hover for each slide
      const gallerySlides = document.querySelectorAll("#gallery-swiper .swiper-slide");
      gallerySlides.forEach((slide) => {
        slide.addEventListener("mouseenter", () => gallerySwiper.autoplay.stop());
        slide.addEventListener("mouseleave", () => gallerySwiper.autoplay.start());
      });

    } catch (error) {
      console.error("Failed to load gallery:", error);
    }
  });
</script>
