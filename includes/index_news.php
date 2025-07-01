<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Featured Updates & Reports</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

  <div>
    <div class="max-w-7xl mx-auto px-4 py-10">
      <h2 class="text-center font-extrabold text-2xl sm:text-3xl">
        FEATURED UPDATES &amp; REPORTS
      </h2>

      <p class="text-center mt-2 max-w-xl mx-auto text-sm sm:text-base">
        Get the latest updates and insights from our reports and articles.
      </p>

      <div id="newsContainer" class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-8">
        <!-- News articles will be inserted here -->
      </div>

      <!-- Modal -->
      <div id="newsModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50 px-4">
        <div class="bg-white p-4 sm:p-6 rounded-lg w-full max-w-xl relative max-h-[90vh] overflow-y-auto shadow-xl">
          <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-700 hover:text-red-600 text-xl z-10">
            ✕
          </button>
          <h3 id="modalTitle" class="text-xl font-bold mb-3 mt-6 sm:mt-0"></h3>
          <img id="modalImage" class="w-full h-auto mb-3 rounded" alt="News Image" />
          <p id="modalContent" class="text-sm text-gray-700 whitespace-pre-line"></p>
        </div>
      </div>

      <div class="mt-10 flex justify-center">
        <a href="news.php">
          <button class="border border-green-700 text-green-700 text-sm px-5 py-2 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-green-700">
            View all
          </button>
        </a>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      fetch("https://rcrp.gov.mw/wp-json/wp/v2/news?acf_format=standard")
        .then(response => response.json())
        .then(data => {
          const container = document.getElementById("newsContainer");

          data.forEach(post => {
            const title = post.acf.news_title || "Untitled";
            const body = post.acf.news_body || "No content available.";

            // Handle photo: may be object, array, or string
            let photo = "";

            if (Array.isArray(post.acf.news_photos) && post.acf.news_photos.length > 0) {
              photo = post.acf.news_photos[0]?.url || "";
            } else if (typeof post.acf.news_photos === "object" && post.acf.news_photos !== null) {
              photo = post.acf.news_photos.url || "";
            } else if (typeof post.acf.news_photos === "string") {
              photo = post.acf.news_photos;
            }

            const article = document.createElement("article");
            article.className = "bg-white shadow-md p-3 rounded-md";

            article.innerHTML = `
              <img alt="News Image" class="w-full h-auto rounded" src="${photo}" />
              <div class="flex items-center mt-3 space-x-3">
                <span class="bg-blue-800 text-white text-xs font-semibold px-2 py-0.5 rounded">
                  News
                </span>
                <span class="text-xs font-semibold">
                  5 min read
                </span>
              </div>
              <h3 class="font-bold text-lg mt-2">${title}</h3>
              <p class="text-sm mt-1">${truncateText(body, 100)}</p>
              <button class="inline-flex items-center text-sm mt-2 text-green-700 hover:text-green-800"
                      onclick='openModal(${JSON.stringify(title)}, ${JSON.stringify(photo)}, ${JSON.stringify(body)})'>
                Read more
                <svg aria-hidden="true" class="ml-1 w-3 h-3" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </button>
            `;

            container.appendChild(article);
          });
        })
        .catch(error => {
          console.error("Error fetching news:", error);
          document.getElementById("newsContainer").innerHTML =
            `<p class="text-red-600 col-span-3 text-center">Failed to load news articles. Please try again later.</p>`;
        });
    });

    function truncateText(text, maxLength) {
      const stripped = text.replace(/<[^>]*>?/gm, ''); // Remove HTML tags
      return stripped.length > maxLength ? stripped.slice(0, maxLength) + "..." : stripped;
    }

    function openModal(title, imageUrl, content) {
      document.getElementById("modalTitle").textContent = title;
      document.getElementById("modalImage").src = imageUrl;
      document.getElementById("modalContent").textContent = content.replace(/<\/?[^>]+(>|$)/g, "");
      document.getElementById("newsModal").classList.remove("hidden");
      document.getElementById("newsModal").classList.add("flex");
      document.body.style.overflow = 'hidden';
      document.body.style.touchAction = 'none';
    }

    function closeModal() {
      document.getElementById("newsModal").classList.add("hidden");
      document.getElementById("newsModal").classList.remove("flex");
      document.body.style.overflow = 'auto';
      document.body.style.touchAction = 'auto';
    }
  </script>

</body>
</html>
