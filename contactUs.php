<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <?php include 'includes/header.php'; ?>

<!-- Message Box -->
<div id="message-box" class="hidden max-w-md w-full mx-auto my-4">
  <div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div id="message-header" class="px-4 py-3 flex items-center">
      <i id="message-icon" class="fas fa-exclamation-circle mr-2"></i>
      <h3 id="message-title" class="text-lg font-medium">Message Title</h3>
    </div>
    <div class="px-4 pb-4 pt-2">
      <p id="message-body" class="text-gray-700">Message body goes here.</p>
      <div class="mt-4 flex justify-end">
        <button
          id="close-button"
          class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400"
        >
          Close
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Header -->
<header class="bg-[#144276] text-white py-12 px-6 text-center">
  <h1 class="text-3xl font-bold">Contact Us</h1>
  <p class="mt-3 text-base">We would love to hear from you. Please reach out with any questions or feedback.</p>
</header>

<!-- Main Content -->
<main class="px-6 py-16 max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
  <!-- Contact Form -->
  <form class="bg-white border border-gray-300 rounded shadow-md p-8" novalidate method="post">
    <div class="mb-6">
      <label class="block text-gray-700 font-semibold mb-2" for="name">Name</label>
      <input class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#144276]" id="name" name="name" placeholder="Your full name" required type="text" />
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 font-semibold mb-2" for="email">Email Address</label>
      <input class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#144276]" id="email" name="email" placeholder="you@example.com" required type="email" />
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 font-semibold mb-2" for="subject">Subject</label>
      <input class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#144276]" id="subject" name="subject" placeholder="Subject of your message" required type="text" />
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 font-semibold mb-2" for="message">Message</label>
      <textarea class="w-full border border-gray-300 rounded px-4 py-2 h-32 resize-none focus:outline-none focus:ring-2 focus:ring-[#144276]" id="message" name="message" placeholder="Write your message here..." required></textarea>
    </div>
    <button class="w-full bg-[#144276] text-white font-semibold py-3 rounded hover:bg-[#0f3159] transition-colors" type="submit">Send Message</button>
  </form>

  <!-- Contact Info -->
  <div class="bg-white border border-gray-300 rounded shadow-md p-8 text-[#144276]">
    <h2 class="text-2xl font-semibold mb-6">Contact Information</h2>
    <p class="mb-4 flex items-center space-x-3">
      <i class="fas fa-phone-alt text-[#144276]"></i>
      <span>Call Toll Free: <a class="underline hover:text-[#0f3159]" href="tel:5153">5153</a></span>
    </p>
    <p class="mb-4 flex items-center space-x-3">
      <i class="fas fa-envelope text-[#144276]"></i>
      <span>Email: <a class="underline hover:text-[#0f3159]" href="mailto:ead@ead.gov.mw">ead@ead.gov.mw</a></span>
    </p>
    <p class="mb-4 flex items-center space-x-3">
      <i class="fas fa-map-marker-alt text-[#144276]"></i>
      <span>Address: Environmental Affairs Department, Lilongwe, Malawi</span>
    </p>
    <h3 class="text-xl font-semibold mt-8 mb-4">Follow Us</h3>
    <div class="flex space-x-6 text-[#144276] text-2xl">
      <a aria-label="Facebook" class="hover:text-[#0f3159]" href="#"><i class="fab fa-facebook-f"></i></a>
      <a aria-label="Twitter" class="hover:text-[#0f3159]" href="#"><i class="fab fa-x-twitter"></i></a>
      <a aria-label="Instagram" class="hover:text-[#0f3159]" href="#"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
</main>

<!-- Map Section -->
<section class="px-6 pb-16 max-w-5xl mx-auto">
  <h2 class="text-2xl font-semibold text-[#144276] mb-6 text-center">Our Location</h2>
  <div class="w-full h-80 rounded overflow-hidden shadow-md">
    <iframe
      class="w-full h-full border-0"
      loading="lazy"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1234567890123!2d33.783333!3d-13.966667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4b0f0f0f0f0f%3A0x123456789abcdef!2sEnvironmental%20Affairs%20Department%2C%20Lilongwe%2C%20Malawi!5e0!3m2!1sen!2s!4v1697040000000!5m2!1sen!2s"
      title="Map showing location of Environmental Affairs Department, Lilongwe, Malawi"
      allowfullscreen
    ></iframe>
  </div>
</section>

<!-- Script -->
<script>
  function showMessageBox(message, isSuccess) {
    const messageBox = document.getElementById("message-box");
    const messageTitle = document.getElementById("message-title");
    const messageBody = document.getElementById("message-body");
    const messageHeader = document.getElementById("message-header");
    const messageIcon = document.getElementById("message-icon");

    messageTitle.textContent = message.title;
    messageBody.textContent = message.body;

    if (isSuccess) {
      messageHeader.classList.remove("bg-red-100", "text-red-700");
      messageHeader.classList.add("bg-green-100", "text-green-700");
      messageIcon.classList.remove("fa-exclamation-circle", "text-red-700");
      messageIcon.classList.add("fa-check-circle", "text-green-700");
    } else {
      messageHeader.classList.remove("bg-green-100", "text-green-700");
      messageHeader.classList.add("bg-red-100", "text-red-700");
      messageIcon.classList.remove("fa-check-circle", "text-green-700");
      messageIcon.classList.add("fa-exclamation-circle", "text-red-700");
    }

    messageBox.classList.remove("hidden");

    document.getElementById("close-button").onclick = function () {
      messageBox.classList.add("hidden");
    };
  }

  // Demo usage
  // Uncomment one to test
  /*
  showMessageBox({ title: "Oops!", body: "Failed to send your message." }, false);
  showMessageBox({ title: "Success!", body: "Your message was sent successfully." }, true);
  */
</script>

<?php include 'includes/footer.php';?>
</body>
</html>
