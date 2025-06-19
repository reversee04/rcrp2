<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Swiper Carousel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Swiper CSS -->
  <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">

  <style>
    .carousel-container {
      position: relative;
      width: 100%;
      height: 80vh;
      overflow: hidden;
      padding-top: 5rem;
    }

    .bg-transition {
      position: absolute;
      inset: 0;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      transition: background-image 1.5s ease-in-out;
      z-index: 0;
    }

    .bg-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to right, #0284c7, #bae6fd);
      mix-blend-mode: multiply;
      opacity: 0.7;
      z-index: 1;
    }

    .swiper {
      position: relative;
      width: 100%;
      height: 100%;
      z-index: 10;
    }

    .swiper-slide {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      padding-left: 2.5rem;
      height: 100%;
    }

    .swiper-pagination {
      position: absolute;
      bottom: 20px;
      left: 0;
      width: 100%;
      text-align: center;
      z-index: 20;
    }
  </style>
</head>
<body class="bg-gray-100 text-gray-900">

  <div class="carousel-container">
    <div id="bg" class="bg-transition"></div>
    <div class="bg-overlay"></div>

    <div class="swiper">
      <div class="swiper-wrapper">
        <!-- Slides will be injected -->
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    const bg = document.getElementById("bg");

    let swiper = null;

    async function loadSlides() {
      try {
        const res = await fetch('https://rcrp.gov.mw/wp-json/wp/v2/slideshow');
        if (!res.ok) throw new Error(`HTTP error! Status: ${res.status}`);
        const data = await res.json();

        const wrapper = document.querySelector('.swiper-wrapper');
        wrapper.innerHTML = '';

        data.forEach((item, index) => {
          const title = item.acf?.slide_title || "No Title";
          const desc = item.acf?.slide_description || "";

          const slideImageObj = item.acf?.slide_image;
          let bgImg = "";

          if (typeof slideImageObj === "string") {
            bgImg = slideImageObj;
          } else if (typeof slideImageObj === "object" && slideImageObj !== null) {
            bgImg =
              slideImageObj?.sizes?.large ||
              slideImageObj?.sizes?.full ||
              slideImageObj?.sizes?.medium ||
              slideImageObj?.sizes?.thumbnail ||
              slideImageObj?.url ||
              (slideImageObj?.filename
                ? `https://rcrp.gov.mw/wp-content/uploads/${slideImageObj.filename}`
                : "");
          }

          if (!bgImg) {
            console.warn("No image found for slide, using placeholder.");
            bgImg = "https://via.placeholder.com/1200x800?text=No+Image";
          }

          const slide = document.createElement('div');
          slide.className = 'swiper-slide';
          slide.setAttribute('data-bg', bgImg);

          slide.innerHTML = `
            <div class="max-w-xl flex flex-col items-start gap-10 text-left text-white">
              <h1 class="text-5xl font-bold">${title}</h1>
              <p class="text-lg">${desc}</p>
            </div>
          `;

          wrapper.appendChild(slide);
        });

        // Initialize Swiper AFTER slides are injected
        swiper = new Swiper(".swiper", {
          loop: true,
          effect: "fade",
          fadeEffect: { crossFade: true },
          autoplay: {
            delay: 4000,
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          on: {
            slideChangeTransitionStart: function () {
              const activeSlide = document.querySelector(".swiper-slide-active");
              const newBg = activeSlide?.getAttribute("data-bg");
              if (newBg) {
                bg.style.backgroundImage = `url('${newBg}')`;
              }
            },
          },
        });

        // Set first background image manually
        setTimeout(() => {
          const activeSlide = document.querySelector(".swiper-slide-active");
          const firstBg = activeSlide?.getAttribute("data-bg");
          if (firstBg) {
            bg.style.backgroundImage = `url('${firstBg}')`;
          }
        }, 100);

      } catch (err) {
        console.error("Error loading slideshow:", err);
      }
    }

    window.addEventListener('DOMContentLoaded', loadSlides);
  </script>
</body>
</html>
