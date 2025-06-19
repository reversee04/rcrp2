<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <style>
      body {
        font-family: "Inter", sans-serif;
      }
    </style>
  </head>
  <body>
    <?php include 'includes/header.php';?>
    <!-- About Us Hero -->
    <div class="relative w-full h-[200px] sm:h-[200px] md:h-[200px] lg:h-[100px] xl:h-[100px]">
      <img
        alt="Office building with trees and blue sky"
        class="absolute inset-0 w-full h-full object-cover"
        height="500"
        src="https://storage.googleapis.com/a1aa/image/b5b8a1ff-48c5-4c3f-1a0b-f02871162c09.jpg"
        width="1920"
      />
      <div class="absolute inset-0 bg-[#1a3a6d] bg-opacity-80 flex flex-col justify-center px-10 sm:px-20 md:px-24 lg:px-40 xl:px-50 max-w-7xl mx-auto">
        <h1 class="text-white font-extrabold text-3xl sm:text-4xl md:text-5xl leading-tight max-w-3xl">
          About Us
        </h1>
      </div>
    </div>

    <!-- About Us Content -->
    <main class="max-w-7xl mx-auto px-6 sm:px-16 md:px-24 lg:px-32 xl:px-40 py-12 space-y-16">

      <!-- Project Overview -->
      <section class="max-w-4xl mx-auto text-gray-900">
        <h2 class="text-2xl sm:text-3xl font-semibold mb-6">Project Overview</h2>
        <p class="text-base sm:text-lg leading-relaxed">
          The Regional Climate Resilience Programme (RCRP-2) focuses on
          strengthening Malawi’s infrastructure and governance to improve resilience
          against climate change impacts. The programme works with various
          stakeholders to implement sustainable and adaptive solutions that protect
          communities and promote environmental sustainability.
        </p>
      </section>

      <!-- Mission -->
      <section class="max-w-4xl mx-auto text-gray-900">
        <h2 class="text-2xl sm:text-3xl font-semibold mb-6">Mission</h2>
        <p class="text-base sm:text-lg leading-relaxed">
          To strengthen Malawi’s infrastructure and governance for climate
          resilience through collaborative, innovative, and sustainable approaches
          that empower communities and safeguard the environment.
        </p>
      </section>

      <!-- Objectives -->
      <section class="max-w-4xl mx-auto text-gray-900">
        <h2 class="text-2xl sm:text-3xl font-semibold mb-6">Objectives</h2>
        <ul class="list-disc list-inside text-base sm:text-lg space-y-2">
          <li>Enhance climate-resilient infrastructure across vulnerable regions.</li>
          <li>Improve governance and institutional capacity for climate adaptation.</li>
          <li>Promote community engagement and awareness on climate resilience.</li>
          <li>Foster partnerships to leverage resources and expertise.</li>
          <li>Support sustainable environmental management practices.</li>
        </ul>
      </section>

      <!-- Staff Profiles (Specialists) -->
      <section class="max-w-7xl mx-auto text-gray-900">
        <h2 class="text-2xl sm:text-3xl font-semibold mb-6">
          Staff Profiles (Specialists)
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
          <!-- Member 1 -->
          <div class="flex flex-col items-center text-center">
            <img
              alt="Portrait of Jane Doe"
              class="w-40 h-40 rounded-full object-cover mb-4"
              height="160"
              src="https://via.placeholder.com/160"
              width="160"
            />
            <h3 class="font-semibold text-lg">Jane Doe</h3>
            <p class="text-sm text-gray-600">Climate Specialist</p>
            <p class="text-sm text-blue-600 hover:text-blue-800 mt-1">
              <a href="mailto:jane@example.com">jane@example.com</a>
            </p>
          </div>

          <!-- Member 2 -->
          <div class="flex flex-col items-center text-center">
            <img
              alt="Portrait of John Smith"
              class="w-40 h-40 rounded-full object-cover mb-4"
              height="160"
              src="https://via.placeholder.com/160"
              width="160"
            />
            <h3 class="font-semibold text-lg">John Smith</h3>
            <p class="text-sm text-gray-600">Infrastructure Lead</p>
            <p class="text-sm text-blue-600 hover:text-blue-800 mt-1">
              <a href="mailto:john@example.com">john@example.com</a>
            </p>
          </div>
        </div>
      </section>

      <!-- Partners -->
      <section id="PARTNERS" class="max-w-4xl mx-auto text-gray-900">
        <h2 class="text-2xl sm:text-3xl font-semibold mb-6">Partners</h2>
        <p class="text-base sm:text-lg leading-relaxed mb-6">
          We collaborate with a diverse range of partners to achieve our goals,
          including government agencies, international organizations, NGOs, and
          community groups.
        </p>
        <div class="flex flex-wrap justify-center sm:justify-start gap-8">
          <img alt="Logo of Partner 1" class="h-16 object-contain" src="https://storage.googleapis.com/a1aa/image/07f22825-e815-429b-1e1a-bfaa832cca81.jpg" width="150" height="64" />
          <img alt="Logo of Partner 2" class="h-16 object-contain" src="https://storage.googleapis.com/a1aa/image/09747425-2f79-4871-5acf-b9d48ad83fef.jpg" width="150" height="64" />
          <img alt="Logo of Partner 3" class="h-16 object-contain" src="https://storage.googleapis.com/a1aa/image/ecef4ab4-2829-4cf9-ee4b-be8264ce42d7.jpg" width="150" height="64" />
          <img alt="Logo of Partner 4" class="h-16 object-contain" src="https://storage.googleapis.com/a1aa/image/498af7ec-ae86-4f3a-fb01-4a6b33328c27.jpg" width="150" height="64" />
          <img alt="Logo of Partner 5" class="h-16 object-contain" src="https://storage.googleapis.com/a1aa/image/1b80a974-94f3-4195-cad1-f8cc675ab630.jpg" width="150" height="64" />
        </div>
      </section>
    </main>
    <?php include 'includes/footer.php';?>
  </body>
</html>
