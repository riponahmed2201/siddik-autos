  <header class="bg-white shadow-lg relative z-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between items-center h-20">
              <!-- Logo -->
              <a href="/">
                  <div class="flex items-center space-x-3">
                      <div
                          class="w-12 h-12 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-full flex items-center justify-center">
                          <span class="text-white text-2xl font-bold">SA</span>
                      </div>
                      <div>
                          <span
                              class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Siddik Autos</span>
                          <span class="block text-xs text-gray-500">Premium Car Rentals</span>
                      </div>
                  </div>
              </a>

              <!-- Desktop Navigation -->
              <nav class="hidden lg:flex space-x-8">
                  <a href="/" class="text-gray-700 hover:text-indigo-600 font-medium transition">Home</a>

                  <!-- Regular Menu Items -->
                  <a href="/about-us" class="text-gray-700 hover:text-indigo-600 font-medium transition">About Us</a>

                  <a href="/services" class="text-gray-700 hover:text-indigo-600 font-medium transition">Services</a>

                  <a href="/pricing" class="text-gray-700 hover:text-indigo-600 font-medium transition">Pricing</a>

                  <a href="/#fleet" class="text-gray-700 hover:text-indigo-600 font-medium transition">Cars</a>

                  <a href="/blog" class="text-gray-700 hover:text-indigo-600 font-medium transition">Blog</a>
                  <a href="/contact-us" class="text-gray-700 hover:text-indigo-600 font-medium transition">Contact
                      Us</a>
              </nav>

              <!-- Mobile Menu Button -->
              <button onclick="toggleMobileMenu()" class="lg:hidden text-gray-700 hover:text-indigo-600">
                  <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                      </path>
                  </svg>
                  <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                      </path>
                  </svg>
              </button>
          </div>

          <!-- Mobile Menu -->
          <div id="mobile-menu" class="lg:hidden hidden bg-white border-t shadow-lg">
              <div class="py-2">
                  <!-- Home Section with Submenu -->
                  <div class="border-b border-gray-100">
                      <button onclick="toggleSubmenu('home')"
                          class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 transition menu-item-button">
                          <span class="font-medium">Home</span>
                          <svg class="w-5 h-5 text-gray-400 arrow-icon" id="home-arrow" fill="none"
                              stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                              </path>
                          </svg>
                      </button>
                      <div id="home-submenu" class="mobile-submenu bg-gray-50">
                          <a href="index.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Home
                              Style 1</a>
                          <a href="home2.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Home
                              Style 2</a>
                          <a href="home3.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Home
                              Style 3</a>
                          <a href="home4.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Home
                              Style 4</a>
                          <a href="home5.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Home
                              Style 5</a>
                          <a href="home6.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">One
                              Page Site</a>
                      </div>
                  </div>

                  <!-- About Us -->
                  <div class="border-b border-gray-100">
                      <a href="about.html"
                          class="block px-4 py-3 text-gray-700 hover:bg-gray-50 font-medium transition">About Us</a>
                  </div>

                  <!-- Car Listing -->
                  <div class="border-b border-gray-100">
                      <a href="car-listing.html"
                          class="block px-4 py-3 text-gray-700 hover:bg-gray-50 font-medium transition">Car
                          Listing</a>
                  </div>

                  <!-- Car Detail Section with Submenu -->
                  <div class="border-b border-gray-100">
                      <button onclick="toggleSubmenu('cardetail')"
                          class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 transition menu-item-button">
                          <span class="font-medium">Car Detail</span>
                          <svg class="w-5 h-5 text-gray-400 arrow-icon" id="cardetail-arrow" fill="none"
                              stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                              </path>
                          </svg>
                      </button>
                      <div id="cardetail-submenu" class="mobile-submenu bg-gray-50">
                          <a href="car-details.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Car
                              Detail 1</a>
                          <a href="car-details-v2.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Car
                              Detail 2</a>
                          <a href="car-details-v3.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Car
                              Detail 3</a>
                          <a href="booking-cart.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Booking
                              Cart</a>
                          <a href="checkout.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Booking
                              Checkout</a>
                          <a href="confirmation.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Booking
                              Confirmation</a>
                          <a href="booking-management.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Booking
                              Managment</a>
                      </div>
                  </div>

                  <!-- Pages Section with Submenu -->
                  <div class="border-b border-gray-100">
                      <button onclick="toggleSubmenu('pages')"
                          class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 transition menu-item-button">
                          <span class="font-medium">Pages</span>
                          <svg class="w-5 h-5 text-gray-400 arrow-icon" id="pages-arrow" fill="none"
                              stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                              </path>
                          </svg>
                      </button>
                      <div id="pages-submenu" class="mobile-submenu bg-gray-50">

                          <a href="dashboard.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Dashboard</a>
                          <a href="profile-settings.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Profile
                              Settings</a>
                          <a href="blog-list.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Blog
                              List</a>
                          <a href="blog-detail.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Blog
                              Detail</a>
                          <a href="blog-detail-sidebar.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">Blog
                              Detail With Sidebar</a>
                          <a href="404.html"
                              class="block px-8 py-2 text-gray-600 hover:text-indigo-600 hover:bg-white transition">404
                              Page</a>
                      </div>
                  </div>

                  <!-- Contact -->
                  <div class="border-b border-gray-100">
                      <a href="contact.html"
                          class="block px-4 py-3 text-gray-700 hover:bg-gray-50 font-medium transition">Contact</a>
                  </div>
              </div>

              <!-- Sign In Button -->
              <div class="py-4 px-4 border-t bg-gray-50">
                  <a href="login.html"
                      class="block w-full text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition shadow-md">
                      Sign In
                  </a>
              </div>
          </div>
      </div>
  </header>
