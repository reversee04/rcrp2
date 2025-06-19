<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Public Reports</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body class="bg-white">
<?php include 'includes/header.php';?>
  <header class="bg-[#144276] text-white py-12 px-6 sm:px-12 md:px-20 lg:px-32 xl:px-40 2xl:px-56 text-center">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-4xl mx-auto">
      Public Reports
    </h1>
    <p class="mt-3 text-sm sm:text-base max-w-3xl mx-auto">
      Access and download official reports and documents from the Regional Climate Resilience Programme (RCRP-2).
    </p>
  </header>

  <!-- Reports list -->
  <main class="px-6 sm:px-12 md:px-20 lg:px-32 xl:px-40 2xl:px-56 py-12 max-w-5xl mx-auto">
    <ul class="space-y-8">

      <li class="border border-gray-200 rounded shadow-sm hover:shadow-md transition-shadow p-6 flex flex-col sm:flex-row sm:items-center sm:justify-between">
        <div>
          <h2 class="text-xl font-semibold text-[#144276] mb-1">
            2023 Annual Progress Report
          </h2>
          <p class="text-gray-700 text-sm mb-2">
            A comprehensive review of activities, achievements, and challenges encountered by the RCRP-2 throughout 2023.
          </p>
          <time class="text-xs text-gray-500">
            Published: March 15, 2024
          </time>
        </div>
        <a aria-label="Download 2023 Annual Progress Report PDF"
           role="button"
           href="/downloads/2023_annual_progress_report.pdf"
           download="2023_Annual_Progress_Report.pdf"
           class="text-[#144276] font-medium mt-4 sm:mt-0 flex items-center hover:underline">
          <i class="fas fa-file-pdf mr-2"></i>
          Download PDF
        </a>
      </li>

      <li class="border border-gray-200 rounded shadow-sm hover:shadow-md transition-shadow p-6 flex flex-col sm:flex-row sm:items-center sm:justify-between">
        <div>
          <h2 class="text-xl font-semibold text-[#144276] mb-1">
            Baseline Vulnerability Assessment
          </h2>
          <p class="text-gray-700 text-sm mb-2">
            Initial assessment identifying climate vulnerability across the program target areas.
          </p>
          <time class="text-xs text-gray-500">
            Published: January 9, 2024
          </time>
        </div>
        <a aria-label="Download Baseline Vulnerability Assessment PDF"
           role="button"
           href="/downloads/baseline_vulnerability_assessment.pdf"
           download="Baseline_Vulnerability_Assessment.pdf"
           class="text-[#144276] font-medium mt-4 sm:mt-0 flex items-center hover:underline">
          <i class="fas fa-file-pdf mr-2"></i>
          Download PDF
        </a>
      </li>

      <!-- Add more reports as needed -->

    </ul>
  </main>
<?php include 'includes/footer.php'?>
</body>
</html>
