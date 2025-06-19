<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Publications</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body class="bg-white">
<?php include 'includes/header.php';?>
  <header class="bg-[#144276] text-white py-12 px-6 sm:px-12 md:px-20 lg:px-32 xl:px-40 2xl:px-56 text-center">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-4xl mx-auto">
      Publications
    </h1>
    <p class="mt-3 text-sm sm:text-base max-w-3xl mx-auto">
      Browse and download research papers, policy briefs, and other publications from the Regional Climate Resilience Programme (RCRP-2).
    </p>
  </header>

  <!-- Publications list -->
  <main class="px-6 sm:px-12 md:px-20 lg:px-32 xl:px-40 2xl:px-56 py-12 max-w-5xl mx-auto">
    <ul class="space-y-8">

      <li class="border border-gray-200 rounded shadow-sm hover:shadow-md transition-shadow p-6 flex flex-col sm:flex-row sm:items-center sm:justify-between">
        <div>
          <h2 class="text-xl font-semibold text-[#144276] mb-1">
            Climate Resilience Policy Brief
          </h2>
          <p class="text-gray-700 text-sm mb-2">
            An analysis of regional climate resilience strategies with policy recommendations for 2024.
          </p>
          <div class="flex items-center space-x-4 text-xs text-gray-500">
            <time>Published: May 5, 2024</time>
            <span>•</span>
            <span>File size: 1.2 MB</span>
          </div>
        </div>
        <a
          aria-label="Download Climate Resilience Policy Brief PDF (1.2 MB)"
          class="mt-4 sm:mt-0 inline-flex items-center bg-[#144276] text-white px-5 py-2 rounded shadow hover:bg-[#0f3159] transition-colors"
          href="/files/climate_resilience_policy_brief.pdf"
          download="climate_resilience_policy_brief.pdf"
          role="button"
        >
          <i class="fas fa-file-pdf mr-2"></i>
          Download PDF
        </a>
      </li>

      <li class="border border-gray-200 rounded shadow-sm hover:shadow-md transition-shadow p-6 flex flex-col sm:flex-row sm:items-center sm:justify-between">
        <div>
          <h2 class="text-xl font-semibold text-[#144276] mb-1">
            Regional Flood Impact Assessment 2023
          </h2>
          <p class="text-gray-700 text-sm mb-2">
            Detailed report on the impact of 2023 floods in vulnerable zones and mitigation strategies.
          </p>
          <div class="flex items-center space-x-4 text-xs text-gray-500">
            <time>Published: February 18, 2024</time>
            <span>•</span>
            <span>File size: 2.5 MB</span>
          </div>
        </div>
        <a
          aria-label="Download Regional Flood Impact Assessment 2023 PDF (2.5 MB)"
          class="mt-4 sm:mt-0 inline-flex items-center bg-[#144276] text-white px-5 py-2 rounded shadow hover:bg-[#0f3159] transition-colors"
          href="/files/flood_impact_2023.pdf"
          download="flood_impact_2023.pdf"
          role="button"
        >
          <i class="fas fa-file-pdf mr-2"></i>
          Download PDF
        </a>
      </li>

      <!-- Add more publication entries as needed -->

    </ul>
  </main>
<?php include 'includes/footer.php';?>
</body>
</html>
