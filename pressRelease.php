<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Press Releases</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <?php include 'includes/header.php'; ?>
  <header class="bg-[#144276] text-white py-12 px-6 sm:px-12 md:px-20 lg:px-32 xl:px-40 2xl:px-56 text-center">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-4xl mx-auto">
      Press Releases
    </h1>
    <p class="mt-3 text-sm sm:text-base max-w-3xl mx-auto">
      Official statements and announcements from the Regional Climate Resilience Programme (RCRP-2).
    </p>
  </header>

  <!-- Press releases list -->
  <main class="px-6 sm:px-12 md:px-20 lg:px-32 xl:px-40 2xl:px-56 py-12 max-w-5xl mx-auto">

    <article class="mb-12 border border-gray-200 rounded shadow-sm hover:shadow-md transition-shadow p-6">
      <h2 class="text-2xl font-semibold text-[#144276] mb-3">
        Climate Resilience Initiative Launched
      </h2>
      <time class="block text-xs text-gray-500 mb-4" datetime="2024-04-01">
        April 1, 2024
      </time>
      <p class="text-gray-700 leading-relaxed">
        The Regional Climate Resilience Programme has officially launched its new initiative focused on improving community response to climate change through sustainable farming practices and water conservation techniques...
      </p>
    </article>

    <article class="mb-12 border border-gray-200 rounded shadow-sm hover:shadow-md transition-shadow p-6">
      <h2 class="text-2xl font-semibold text-[#144276] mb-3">
        RCRP-2 Expands to Northern Region
      </h2>
      <time class="block text-xs text-gray-500 mb-4" datetime="2024-05-15">
        May 15, 2024
      </time>
      <p class="text-gray-700 leading-relaxed">
        In its latest expansion, the RCRP-2 has introduced a series of community resilience workshops and disaster preparedness training programs in the Northern Region of Malawi...
      </p>
    </article>

    <!-- Add more static press releases here -->

  </main>
  <?php include 'includes/footer.php';?>

</body>
</html>
