<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Photo Gallery</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
  <?php include 'includes/header.php'; ?>

  <header class="bg-[#144276] text-white py-12 px-6 sm:px-12 md:px-20 lg:px-32 xl:px-40 2xl:px-56 text-center">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-4xl mx-auto">
      Photo Gallery
    </h1>
    <p class="mt-3 text-sm sm:text-base max-w-3xl mx-auto">
      Explore images showcasing the efforts and impact of the Regional Climate Resilience Programme (RCRP-2).
    </p>
  </header>

  <!-- Gallery Grid -->
  <main class="px-6 sm:px-12 md:px-20 lg:px-32 xl:px-40 2xl:px-56 py-12">
    <div id="galleryGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <!-- Dynamic images will be inserted here -->
    </div>

    <!-- Fallback message if no data is found -->
    <p id="noDataMsg" class="text-center text-gray-500 mt-10 hidden">No gallery images found.</p>
  </main>

  <?php include 'includes/footer.php'; ?>

  <script>
    document.addEventListener("DOMContentLoaded", async () => {
      const galleryGrid = document.getElementById("galleryGrid");
      const noDataMsg = document.getElementById("noDataMsg");

      try {
        const response = await fetch("https://rcrp.gov.mw/wp-json/wp/v2/gallery?acf_format=standard");
        const data = await response.json();

        if (!Array.isArray(data) || data.length === 0) {
          noDataMsg.classList.remove("hidden");
          return;
        }

        data.forEach(item => {
          const imageUrl = item.acf?.image?.url || item.acf?.image;
          const imageAlt = item.title?.rendered || "Gallery Image";
          const caption = item.acf?.image_description || imageAlt;

          if (imageUrl) {
            const figure = document.createElement("figure");
            figure.className = "overflow-hidden rounded shadow hover:shadow-lg transition-shadow cursor-pointer";

            figure.innerHTML = `
              <img
                src="${imageUrl}"
                alt="${imageAlt}"
                class="w-full h-48 object-cover"
                loading="lazy"
              />
              <figcaption class="p-3 text-sm text-[#144276] font-semibold">
                ${caption}
              </figcaption>
            `;

            galleryGrid.appendChild(figure);
          }
        });
      } catch (error) {
        console.error("Failed to load gallery data:", error);
        noDataMsg.textContent = "Failed to load gallery images.";
        noDataMsg.classList.remove("hidden");
      }
    });
  </script>
</body>
</html>
