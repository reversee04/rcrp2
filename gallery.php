<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Photo Gallery</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <?php include 'includes/header.php';?>

  <header class="bg-[#144276] text-white py-12 px-6 sm:px-12 md:px-20 lg:px-32 xl:px-40 2xl:px-56 text-center">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-4xl mx-auto">
      Photo Gallery
    </h1>
    <p class="mt-3 text-sm sm:text-base max-w-3xl mx-auto">
      Explore images showcasing the efforts and impact of the Regional Climate Resilience Programme (RCRP-2).
    </p>
  </header>

  <!-- Gallery grid -->
  <main class="px-6 sm:px-12 md:px-20 lg:px-32 xl:px-40 2xl:px-56 py-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

      <!-- Repeat this block for each gallery image -->
      <figure class="overflow-hidden rounded shadow hover:shadow-lg transition-shadow cursor-pointer">
        <img
          src="https://via.placeholder.com/600x400"
          alt="Community members attending a climate resilience workshop in Malawi"
          class="w-full h-48 object-cover"
          loading="lazy"
          width="600"
          height="400"
        />
        <figcaption class="p-3 text-sm text-[#144276] font-semibold">
          Workshop in Malawi
        </figcaption>
      </figure>

      <figure class="overflow-hidden rounded shadow hover:shadow-lg transition-shadow cursor-pointer">
        <img
          src="https://via.placeholder.com/600x400"
          alt="Tree planting event"
          class="w-full h-48 object-cover"
          loading="lazy"
          width="600"
          height="400"
        />
        <figcaption class="p-3 text-sm text-[#144276] font-semibold">
          Tree Planting Day
        </figcaption>
      </figure>

      <!-- Add more static items as needed -->

    </div>
  </main>
<?php include 'includes/footer.php';?>
</body>
</html>
