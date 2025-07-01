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

      .modal {
        display: none;
        position: fixed;
        z-index: 50;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.6);
        align-items: center;
        justify-content: center;
      }

      .modal-content {
        background-color: #fff;
        padding: 2rem;
        border-radius: 0.5rem;
        max-width: 600px;
        width: 90%;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        position: relative;
      }

      .close {
        position: absolute;
        top: 0.75rem;
        right: 1rem;
        font-size: 1.5rem;
        color: #333;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
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

    <main class="max-w-7xl mx-auto px-6 sm:px-16 md:px-24 lg:px-32 xl:px-40 py-12 space-y-16">

      <!-- Project Overview -->
      <section class="max-w-4xl mx-auto text-gray-900 my-10 px-4">
        <h2 class="text-2xl sm:text-3xl font-semibold mb-6">Project Overview</h2>
        <p class="text-base sm:text-lg leading-relaxed">
          The Regional Climate Resilience Program for Eastern and Southern Africa – Phase 2 (RCRP-2) is a five-year, World Bank-funded initiative supporting Malawi and the African Union. It builds on RCRP-1 and aims to improve preparedness, response, and resilience to climate shocks. In Malawi, RCRP-2 focuses on rebuilding infrastructure damaged by Cyclone Freddy, enhancing governance and climate financing, and improving resilience in the Shire River Basin.
        </p>
      </section>
          
      <!-- Mission -->
      <section class="max-w-4xl mx-auto text-gray-900 my-10 px-4">
        <h2 class="text-2xl sm:text-3xl font-semibold mb-6">Mission</h2>
        <p class="text-base sm:text-lg leading-relaxed">
          To improve resilience to water-related climate shocks in Malawi and the Eastern and Southern Africa region, and respond promptly and effectively to eligible crises or emergencies.
        </p>
      </section>
          
      <!-- Objectives -->
      <section class="max-w-4xl mx-auto text-gray-900 my-10 px-4">
        <h2 class="text-2xl sm:text-3xl font-semibold mb-6">Objectives</h2>
        <ul class="list-disc list-inside text-base sm:text-lg space-y-2">
          <li>Strengthen national and regional disaster risk management and early warning systems.</li>
          <li>Enhance access to climate financing and facilitate carbon market readiness.</li>
          <li>Mainstream climate resilience into water infrastructure and planning processes.</li>
          <li>Improve the resilience of communities through adaptive social protection systems.</li>
          <li>Reconstruct critical infrastructure using climate-resilient designs.</li>
          <li>Promote regional coordination, knowledge sharing, and gender inclusion.</li>
        </ul>
      </section>
          
      <!-- Project Components -->
      <section class="max-w-4xl mx-auto text-gray-900 my-10 px-4">
        <h2 class="text-2xl sm:text-3xl font-semibold mb-6">Project Components</h2>
        <ul class="list-disc list-inside text-base sm:text-lg space-y-2">
          <li><strong>Component 1:</strong> Risk Management and Climate Financing – builds institutional capacity and promotes early warning systems and access to carbon finance.</li>
          <li><strong>Component 2:</strong> Infrastructure Investments – reconstructs roads, bridges, and water systems affected by disasters.</li>
          <li><strong>Component 3:</strong> Local Authority Performance Support – enables urban councils and local governments to plan and implement climate-smart interventions.</li>
          <li><strong>Component 4:</strong> Adaptive Management – ensures smooth project implementation, evaluation, and knowledge sharing.</li>
          <li><strong>Component 5:</strong> Emergency Response – provides rapid financing for eligible climate emergencies.</li>
        </ul>
      </section>
          
      <!-- Expected Outcomes -->
      <section class="max-w-4xl mx-auto text-gray-900 my-10 px-4">
        <h2 class="text-2xl sm:text-3xl font-semibold mb-6">Expected Outcomes</h2>
        <ul class="list-disc list-inside text-base sm:text-lg space-y-2">
          <li>Reduced vulnerability of communities in the Shire River Basin and other targeted areas.</li>
          <li>Restoration of infrastructure for over 100,000 people affected by Cyclone Freddy.</li>
          <li>Improved flood protection and catchment conservation in climate-vulnerable regions.</li>
          <li>Enhanced coordination and knowledge exchange among RCRP countries.</li>
          <li>Greater participation of women and marginalized groups in climate resilience efforts.</li>
        </ul>
      </section>
          
      <!-- Target Beneficiaries -->
      <section class="max-w-4xl mx-auto text-gray-900 my-10 px-4">
        <h2 class="text-2xl sm:text-3xl font-semibold mb-6">Target Beneficiaries</h2>
        <p class="text-base sm:text-lg leading-relaxed">
          The project directly benefits communities in flood and drought-prone areas, especially in the Shire River Basin. It also targets district councils, local government authorities, disaster response teams, and national agencies involved in climate planning. Women and vulnerable groups are prioritized through inclusive program design and capacity-building initiatives.
        </p>
      </section>

      <!-- Staff Profiles -->
      <section class="max-w-7xl mx-auto text-gray-900">
        <h2 class="text-2xl sm:text-3xl font-semibold mb-6">Staff Profiles (Specialists)</h2>
        <div id="staff-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
          <!-- Staff cards will be injected here -->
        </div>
      </section>

      <!-- Partners -->
      <section id="PARTNERS" class="max-w-4xl mx-auto text-gray-900">
        <h2 class="text-2xl sm:text-3xl font-semibold mb-6">Partners</h2>
        <p class="text-base sm:text-lg leading-relaxed mb-6">
          We collaborate with a diverse range of partners, including national institutions and international organizations, to achieve climate resilience.
        </p>
        <div class="flex flex-wrap justify-center sm:justify-start gap-8">

          <!-- World Bank -->
          <div class="flex flex-col items-center w-[150px]">
            <img
              alt="World Bank Logo"
              class="h-16 object-contain"
              src="images/WBG_logo.webp"
              width="150"
            />
            <span class="text-sm mt-2 text-center">World Bank</span>
          </div>

          <!-- DoDMA -->
          <div class="flex flex-col items-center w-[150px]">
            <img
              alt="Malawi Government - DoDMA"
              class="h-16 object-contain"
              src="images/Coat_of_arms_of_Malawi.png"
              width="150"
            />
            <span class="text-sm mt-2 text-center">DoDMA</span>
          </div>

          <!-- NLGFC -->
          <div class="flex flex-col items-center w-[150px]">
            <img
              alt="Malawi Government - NLGFC"
              class="h-16 object-contain"
              src="images/Coat_of_arms_of_Malawi.png"
              width="150"
            />
            <span class="text-sm mt-2 text-center text-center">NLGFC</span>
          </div>

          <!-- EP&D -->
          <div class="flex flex-col items-center w-[150px]">
            <img
              alt="Malawi Government - EP&D"
              class="h-16 object-contain"
              src="images/Coat_of_arms_of_Malawi.png"
              width="150"
            />
            <span class="text-sm mt-2 text-center">EP&D</span>
          </div>

        </div>
      </section>

    </main>

    <!-- Modal -->
    <div id="staffModal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <img id="modalImage" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover" />
        <h3 id="modalName" class="text-xl font-semibold text-center"></h3>
        <p id="modalPosition" class="text-center text-gray-600 mb-2"></p>
        <p id="modalBio" class="text-base text-gray-800 leading-relaxed mt-4"></p>
      </div>
    </div>

    <?php include 'includes/footer.php'; ?>

<script>
      const staffContainer = document.getElementById('staff-container');
      const modal = document.getElementById('staffModal');
      const modalImage = document.getElementById('modalImage');
      const modalName = document.getElementById('modalName');
      const modalPosition = document.getElementById('modalPosition');
      const modalBio = document.getElementById('modalBio');

      function openModal(staff) {
        modalImage.src = staff.staff_image;
        modalName.textContent = staff.staff_name;
        modalPosition.textContent = staff.staff_position;
        modalBio.textContent = staff.staff_bio;
        modal.style.display = 'flex';
      }

      function closeModal() {
        modal.style.display = 'none';
      }

      window.onclick = function (event) {
        if (event.target === modal) {
          closeModal();
        }
      };

      // Recursively fetch all staff members
      async function fetchAllStaff(page = 1, allStaff = []) {
        const response = await fetch(`https://rcrp.gov.mw/wp-json/wp/v2/staff?acf_format=standard&per_page=100&page=${page}`);
        const data = await response.json();
        allStaff = allStaff.concat(data);
        if (data.length === 100) {
          return fetchAllStaff(page + 1, allStaff);
        }
        return allStaff;
      }

      fetchAllStaff()
        .then(data => {
          data.forEach(member => {
            const imageObject = member.acf?.staff_image;
            const imageUrl = imageObject?.url || 'https://via.placeholder.com/300x300?text=No+Image';

            const staff = {
              staff_image: imageUrl,
              staff_name: member.acf?.staff_name || 'No Name',
              staff_position: member.acf?.staff_position || 'No Position',
              staff_bio: member.acf?.staff_bio || 'No Bio available.'
            };

            const card = document.createElement('div');
            card.className = 'flex flex-col items-center text-center cursor-pointer hover:opacity-90';
            card.innerHTML = `
              <img src="${staff.staff_image}" alt="Portrait of ${staff.staff_name}" class="w-40 h-40 rounded-full object-cover mb-4" />
              <h3 class="font-semibold text-lg">${staff.staff_name}</h3>
              <p class="text-sm text-gray-600">${staff.staff_position}</p>
            `;

            card.onclick = () => openModal(staff);
            staffContainer.appendChild(card);
          });
        })
        .catch(error => {
          console.error('Error fetching staff:', error);
          staffContainer.innerHTML = '<p class="text-red-500">Failed to load staff profiles.</p>';
        });
    </script>
  </body>
</html>
