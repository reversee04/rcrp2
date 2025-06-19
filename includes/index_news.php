<div>
  <div class="max-w-7xl mx-auto px-4 py-10">
    <!-- section title -->
    <h2 class="text-center font-extrabold text-2xl sm:text-3xl">
      FEATURED UPDATES &amp; REPORTS
    </h2>
    <!-- section description -->
    <p class="text-center mt-2 max-w-xl mx-auto text-sm sm:text-base">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
    </p>
    <!-- article container -->
    <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-8">
      
      <!-- article 1 -->
      <article>
        <img alt="News Image" class="w-full h-auto" height="250" src="https://via.placeholder.com/400x250" width="400" />
        <div class="flex items-center mt-3 space-x-3">
          <span style="text-transform: capitalize;" class="bg-blue-800 text-white text-xs font-semibold px-2 py-0.5 rounded">
            Category
          </span>
          <span class="text-xs font-semibold">
            5 min read
          </span>
        </div>
        <h3 class="font-bold text-lg mt-2">
          Sample News Title
        </h3>
        <p class="text-sm mt-1">
          This is a short excerpt of the article content to give readers a preview.
        </p>
        <a class="inline-flex items-center text-sm mt-2 text-green-700 hover:text-green-800"
           href="javascript:void(0)"
           onclick="openModal('Sample News Title', 'https://via.placeholder.com/400x250', 'This is the full article content shown in the modal.')">
          Read more
          <svg aria-hidden="true" class="ml-1 w-3 h-3" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </a>
      </article>

      <!-- Repeat <article> blocks as needed -->

    </div>

    <!-- Modal -->
    <div id="newsModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
      <div class="bg-white p-6 rounded-lg max-w-xl w-full relative">
        <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-700 hover:text-red-600">
          ✕
        </button>
        <h3 id="modalTitle" class="text-xl font-bold mb-2"></h3>
        <img id="modalImage" class="w-full h-auto mb-3" />
        <p id="modalContent" class="text-sm text-gray-700"></p>
      </div>
    </div>

    <div class="mt-10 flex justify-center">
      <a href="news.php"><button class="border border-green-700 text-green-700 text-sm px-5 py-2 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-green-700">
        View all
      </button></a>
    </div>
  </div>
</div>

<script>
  function openModal(title, imageUrl, content) {
    document.getElementById("modalTitle").textContent = title;
    document.getElementById("modalImage").src = imageUrl;
    document.getElementById("modalContent").textContent = content;
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
