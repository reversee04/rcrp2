<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Image Gallery</title>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    .image-container {
      position: relative;
      border-radius: 0.5rem;
      overflow: hidden;
    }

    .image-container img {
      width: 100%;
      height: 400px;
      object-fit: cover;
    }

    .image-overlay {
      position: absolute;
      bottom: 0;
      width: 100%;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
      color: #fff;
      padding: 12px 16px;
      box-sizing: border-box;
      border-radius: 0 0 0.5rem 0.5rem;
    }

    .gallery-wrapper {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .gallery-slide {
      min-width: 100%;
      padding: 0 1rem;
      box-sizing: border-box;
    }

    .swiper-nav-btn {
      background-color: white;
      border: 1px solid #056839;
      color: #056839;
      width: 2.5rem;
      height: 2.5rem;
      border-radius: 9999px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background-color 0.3s ease;
      box-shadow: 0 0 0 2px white;
      cursor: pointer;
    }

    .swiper-nav-btn:hover {
      background-color: #f0fdf4;
    }

    .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #ccc;
      margin: 0 5px;
      cursor: pointer;
    }

    .swiper-pagination-bullet-active {
      background: #056839;
    }

    @media (max-width: 768px) {
      .image-container img {
        height: 300px;
      }
    }

    @media (max-width: 480px) {
      .image-container img {
        height: 240px;
      }
    }
  </style>
</head>
<body>
  <div class="max-w-7xl mx-auto px-4 py-12 flex flex-col items-center">
    <h1 class="font-extrabold text-2xl mb-2">Image Gallery</h1>
    <p class="text-sm mb-10">View images from our recent activities</p>

    <div class="relative w-full max-w-6xl overflow-hidden">
      <!-- Navigation Buttons -->
      <button class="swiper-nav-btn absolute z-10 left-0 -ml-6" aria-label="Previous" id="prevBtn" style="top: 50%; transform: translateY(-50%)">
        <i class="fas fa-arrow-left"></i>
      </button>

      <button class="swiper-nav-btn absolute z-10 right-0 -mr-6" aria-label="Next" id="nextBtn" style="top: 50%; transform: translateY(-50%)">
        <i class="fas fa-arrow-right"></i>
      </button>

      <!-- Gallery Slides -->
      <div id="gallery" class="gallery-wrapper"></div>

      <!-- Pagination -->
      <div class="flex justify-center mt-8" id="pagination"></div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", async function () {
      const gallery = document.getElementById("gallery");
      const pagination = document.getElementById("pagination");
      let slideIndex = 0;
      let slides = [];
      let timer;

      function showSlide(index) {
        gallery.style.transform = `translateX(-${index * 100}%)`;

        document.querySelectorAll(".swiper-pagination-bullet").forEach((dot, i) => {
          dot.classList.toggle("swiper-pagination-bullet-active", i === index);
        });

        slideIndex = index;
      }

      function nextSlide() {
        const newIndex = (slideIndex + 1) % slides.length;
        showSlide(newIndex);
      }

      function prevSlide() {
        const newIndex = (slideIndex - 1 + slides.length) % slides.length;
        showSlide(newIndex);
      }

      function startAutoplay() {
        timer = setInterval(nextSlide, 4000);
      }

      function stopAutoplay() {
        clearInterval(timer);
      }

      try {
        const response = await fetch("https://rcrp.gov.mw/wp-json/wp/v2/gallery?acf_format=standard");
        const data = await response.json();

        data.forEach((item, i) => {
          const imageUrl = item.acf?.image?.url || item.acf?.image;
          const imageAlt = item.title.rendered || "Gallery Image";
          const description = item.acf?.image_description || "";

          const slide = document.createElement("div");
          slide.className = "gallery-slide";
          slide.innerHTML = `
            <div class="image-container shadow-md">
              <img src="${imageUrl}" alt="${imageAlt}" />
              <div class="image-overlay">
                <h3 class="text-lg font-semibold">${imageAlt}</h3>
                <p class="text-sm mt-1">${description}</p>
              </div>
            </div>
          `;
          gallery.appendChild(slide);
          slides.push(slide);

          const dot = document.createElement("div");
          dot.className = "swiper-pagination-bullet";
          dot.addEventListener("click", () => {
            stopAutoplay();
            showSlide(i);
            startAutoplay();
          });
          pagination.appendChild(dot);
        });

        // Add hover listeners to pause/resume autoplay
        gallery.addEventListener("mouseenter", stopAutoplay);
        gallery.addEventListener("mouseleave", startAutoplay);

        // Button listeners
        document.getElementById("nextBtn").addEventListener("click", () => {
          stopAutoplay();
          nextSlide();
          startAutoplay();
        });

        document.getElementById("prevBtn").addEventListener("click", () => {
          stopAutoplay();
          prevSlide();
          startAutoplay();
        });

        // Start gallery
        showSlide(0);
        startAutoplay();
      } catch (error) {
        console.error("Failed to load gallery:", error);
      }
    });
  </script>
</body>
</html>
