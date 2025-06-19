<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./css/nav.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
    <style>
        /* Mobile menu animation */
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        
        .mobile-menu.open {
            max-height: 1000px; /* Adjust based on your content */
            transition: max-height 0.5s ease-in;
        }
        
        /* Dropdown animations */
        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.2s ease, visibility 0.2s ease;
        }
        
        .group:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
        }
        
        /* Mobile dropdown */
        .mobile-dropdown {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        
        .mobile-dropdown.open {
            max-height: 500px; /* Adjust based on your content */
        }
        
        .rotate-180 {
            transform: rotate(180deg);
        }
    </style>
</head>
<body>

<div class="web_nav">
    <!-- Top-subnav, blue one -->
    <div id="top_subnav" class="flex flex-col md:flex-row flex-wrap items-center justify-between p-2 bg-gray-100 gap-2">
        <div id="phone" class="flex items-end gap-2">
            <div id="phone_icon">
                <i class="fa-solid fa-phone"></i>
            </div>
            <div id="phone_number">
                <p class="text-sm">+265 882397454</p>
            </div>
        </div>
        <div id="email" class="text-sm text-right md:text-left">
            <p>rcrpinfo@rcrp.com</p>
        </div>
        <div id="search_box" class="w-full md:w-auto flex justify-end">
            <input
                type="text"
                placeholder="Search"
                class="border px-2 py-1 rounded w-full md:w-64"
            />
        </div>
        <div id="social_icons" class="flex justify-end space-x-3 text-xl">
            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-square-x-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Mobile menu button - shown only on mobile -->
                <div class="md:hidden flex items-center">
                    <button type="button" class="mobile-menu-button p-2 rounded-md text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>

                <!-- Left side - Logo/Title -->
                <div class="flex items-center">
                    <img
                        src="./images/RCRP-2-LOGO.png"
                        alt="rcrp_logo"
                        class="w-[160px] h-[160px] object-scale-down" 
                    />
                </div>

                <!-- Center - Navigation Links (Desktop) -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="text-gray-900 hover:text-gray-600 px-3 py-2 text-sm font-medium">Home</a>
                    <a href="aboutUs.php" class="text-gray-900 hover:text-gray-600 px-3 py-2 text-sm font-medium">About Us</a>

                    <!-- Media Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-900 hover:text-gray-600 px-3 py-2 text-sm font-medium flex items-center">
                            Media
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                            <div class="py-1">
                                <a href="news.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">News</a>
                                <a href="gallery.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Gallery</a>
                                <a href="pressRelease.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Press releases</a>
                            </div>
                        </div>
                    </div>

                    <!-- Resources Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-900 hover:text-gray-600 px-3 py-2 text-sm font-medium flex items-center">
                            Resources
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                            <div class="py-1">
                                <a href="publicReports.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Public reports</a>
                                <a href="publications.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Publications</a>
                            </div>
                        </div>
                    </div>

                    <!-- Procurement Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-900 hover:text-gray-600 px-3 py-2 text-sm font-medium flex items-center">
                            Procurement
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                            <div class="py-1">
                                <a href="bidDocuments.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bid Documents</a>
                                <a href="vacancies.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Vacancies</a>
                                <a href="notices.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Notices</a>
                                <a href="procurementPlans.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Procurement Plans</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right side - Contact Button (Desktop) -->
                <div class="hidden md:flex items-center">
                    <a href="contactUs.php" class="bg-gray-900 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Mobile menu (hidden by default) -->
        <div class="mobile-menu md:hidden bg-white">
            <div class="px-2 pt-2 pb-4 space-y-1 sm:px-3">
                <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100">Home</a>
                <a href="aboutUs.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100">About Us</a>

                <!-- Media Dropdown Mobile -->
                <div class="relative">
                    <button class="mobile-dropdown-toggle w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100 flex justify-between items-center">
                        Media
                        <i class="fas fa-chevron-down text-sm transition-transform duration-200"></i>
                    </button>
                    <div class="mobile-dropdown pl-4">
                        <a href="news.php" class="block px-3 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100">News</a>
                        <a href="gallery.php" class="block px-3 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100">Gallery</a>
                        <a href="pressRelease.php" class="block px-3 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100">Press releases</a>
                    </div>
                </div>

                <!-- Resources Dropdown Mobile -->
                <div class="relative">
                    <button class="mobile-dropdown-toggle w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100 flex justify-between items-center">
                        Resources
                        <i class="fas fa-chevron-down text-sm transition-transform duration-200"></i>
                    </button>
                    <div class="mobile-dropdown pl-4">
                        <a href="publicReports.php" class="block px-3 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100">Public reports</a>
                        <a href="publications.php" class="block px-3 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100">Publications</a>
                    </div>
                </div>

                <!-- Procurement Dropdown Mobile -->
                <div class="relative">
                    <button class="mobile-dropdown-toggle w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100 flex justify-between items-center">
                        Procurement
                        <i class="fas fa-chevron-down text-sm transition-transform duration-200"></i>
                    </button>
                    <div class="mobile-dropdown pl-4">
                        <a href="bidDocuments.php" class="block px-3 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100">Bid Documents</a>
                        <a href="vacancies.php" class="block px-3 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100">Vacancies</a>
                        <a href="notices.php" class="block px-3 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100">Notices</a>
                        <a href="procurementPlans.php" class="block px-3 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100">Procurement Plans</a>
                    </div>
                </div>

                <!-- Contact Us Button (Mobile) -->
                <div class="pt-2">
                    <a href="contactUs.php" class="block w-full text-center bg-gray-900 text-white px-4 py-2 rounded-md text-base font-medium hover:bg-gray-700">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('open');
            
            // Toggle hamburger icon
            const icon = this.querySelector('i');
            if (mobileMenu.classList.contains('open')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        // Mobile dropdown toggles
        const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
        mobileDropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                const dropdown = this.nextElementSibling;
                const icon = this.querySelector('i');
                
                dropdown.classList.toggle('open');
                icon.classList.toggle('rotate-180');
            });
        });
    });
</script>

<script src="https://kit.fontawesome.com/1a5f46c3b7.js" crossorigin="anonymous"></script>
<script src="https://cdn.tailwindcss.com"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
</body>
</html>