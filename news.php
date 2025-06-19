<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>News and Reports</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

<?php include 'includes/header.php'; ?>

<!-- Full-width Blue Header Band -->
<header class="w-full bg-[#144276] text-white py-12 px-6 sm:px-12 md:px-20 lg:px-32 xl:px-40 2xl:px-56 text-center">
  <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-4xl mx-auto">
    News
  </h1>
  <p class="mt-3 text-sm sm:text-base max-w-3xl mx-auto">
    Stay updated with current developments and reports.
  </p>
</header>

<!-- News Section -->
<div class="max-w-7xl mx-auto px-4 py-10">
  <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php foreach ($news_articles as $news): ?>
      <article class="bg-white shadow-md p-4 rounded-lg">
        <img alt="<?= htmlspecialchars($news['alt_text']) ?>" class="w-full h-auto rounded" src="<?= $news['image_url'] ?>" width="400" height="250" />
        
        <div class="flex items-center mt-3 space-x-3">
          <span class="bg-blue-800 text-white text-xs font-semibold px-2 py-0.5 rounded capitalize">
            <?= htmlspecialchars($news['category']) ?>
          </span>
          <span class="text-xs font-semibold">
            <?= htmlspecialchars($news['read_time']) ?> min read
          </span>
        </div>

        <h3 class="font-bold text-lg mt-2">
          <?= htmlspecialchars($news['title']) ?>
        </h3>

        <p class="text-sm mt-1">
          <?= htmlspecialchars($news['excerpt']) ?>
        </p>

        <a class="inline-flex items-center text-sm mt-2 text-green-700 hover:text-green-800"
           href="javascript:void(0)"
           onclick="openModal(`<?= addslashes($news['title']) ?>`, `<?= $news['image_url'] ?>`, `<?= addslashes($news['content']) ?>`)">
          Read more
          <svg aria-hidden="true" class="ml-1 w-3 h-3" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </a>
      </article>
    <?php endforeach; ?>
  </div>
</div>

<!-- Modal -->
<div id="newsModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
  <div class="bg-white p-6 rounded-lg max-w-xl w-full relative">
    <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-700 hover:text-red-600 text-lg">
      ✕
    </button>
    <h3 id="modalTitle" class="text-xl font-bold mb-2"></h3>
    <img id="modalImage" class="w-full h-auto mb-3 rounded" />
    <p id="modalContent" class="text-sm text-gray-700"></p>
  </div>
</div>

<!-- JavaScript -->
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

<?php include 'includes/footer.php'; ?>
</body>
</html>
