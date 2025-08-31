@extends('web.master')
@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-indigo-900 to-purple-900 pt-32 pb-40 overflow-hidden">
        <div
            class="absolute inset-0 bg-[url('https://images.pexels.com/photos/3802510/pexels-photo-3802510.jpeg')] bg-cover bg-center opacity-20">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-900 to-purple-900 opacity-90"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Experience Luxury on <span class="text-indigo-400">Your Terms</span>
                </h1>
                <p class="text-xl text-indigo-100 max-w-2xl mx-auto">
                    Choose from our premium selection of vehicles and enjoy the freedom of the open road with unmatched
                    comfort and style.
                </p>
            </div>

            <!-- Search Form -->
            <div class="bg-white rounded-2xl shadow-2xl p-6 md:p-8 max-w-4xl mx-auto transform translate-y-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Pick-up Location</label>
                        <select
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option>Select Location</option>
                            <option>New York City</option>
                            <option>Los Angeles</option>
                            <option>Chicago</option>
                            <option>Miami</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Pick-up Date</label>
                        <input type="date"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Return Date</label>
                        <input type="date"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <button
                        class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-8 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition shadow-md">
                        Search Available Cars
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Cars Section -->
    <section id="fleet" class="bg-gray-50 pt-20 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Premium Fleet</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Choose from our extensive collection of premium vehicles, each maintained to the highest standards
                    of quality and comfort.
                </p>
            </div>

            <!-- Car Categories -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button onclick="filterCars('all')" data-category="all"
                    class="filter-btn bg-indigo-600 text-white px-6 py-2 rounded-full font-medium transition">
                    All Cars
                </button>
                <button onclick="filterCars('luxury')" data-category="luxury"
                    class="filter-btn bg-gray-100 text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-200 transition">
                    Luxury
                </button>
                <button onclick="filterCars('suv')" data-category="suv"
                    class="filter-btn bg-gray-100 text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-200 transition">
                    SUV
                </button>
                <button onclick="filterCars('sports')" data-category="sports"
                    class="filter-btn bg-gray-100 text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-200 transition">
                    Sports
                </button>
                <button onclick="filterCars('electric')" data-category="electric"
                    class="filter-btn bg-gray-100 text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-200 transition">
                    Electric
                </button>
            </div>

            <!-- Cars Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Car Card 1 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden group hover:shadow-xl transition duration-300 car-card"
                    data-category="luxury">
                    <div class="relative">
                        <img src="assets/web/imgs/car1.jpeg" alt="Mercedes S-Class"
                            class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 right-4 bg-indigo-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                            Available Now
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold text-gray-900">Mercedes S-Class</h3>
                            <div class="text-2xl font-bold text-indigo-600">$299<span
                                    class="text-sm text-gray-500">/day</span></div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                Automatic
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                4 Seats
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                GPS
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                Bluetooth
                            </div>
                        </div>
                        <a href="car-details.html"
                            class="block w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center px-4 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition">
                            Book Now
                        </a>
                    </div>
                </div>

                <!-- Car Card 2 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden group hover:shadow-xl transition duration-300 car-card"
                    data-category="suv">
                    <div class="relative">
                        <img src="assets/web/imgs/car2.jpeg" alt="Range Rover Sport"
                            class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 right-4 bg-indigo-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                            Available Now
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold text-gray-900">Range Rover Sport</h3>
                            <div class="text-2xl font-bold text-indigo-600">$249<span
                                    class="text-sm text-gray-500">/day</span></div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                Automatic
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                5 Seats
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                GPS
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                Bluetooth
                            </div>
                        </div>
                        <a href="car-details.html"
                            class="block w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center px-4 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition">
                            Book Now
                        </a>
                    </div>
                </div>

                <!-- Car Card 3 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden group hover:shadow-xl transition duration-300 car-card"
                    data-category="sports">
                    <div class="relative">
                        <img src="assets/web/imgs/car3.jpeg" alt="Porsche 911"
                            class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 right-4 bg-red-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                            Limited
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold text-gray-900">Porsche 911</h3>
                            <div class="text-2xl font-bold text-indigo-600">$399<span
                                    class="text-sm text-gray-500">/day</span></div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                Manual
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                2 Seats
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                GPS
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                Bluetooth
                            </div>
                        </div>
                        <a href="car-details.html"
                            class="block w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center px-4 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition">
                            Book Now
                        </a>
                    </div>
                </div>
                <!-- Car Card 1 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden group hover:shadow-xl transition duration-300 car-card"
                    data-category="electric">
                    <div class="relative">
                        <img src="assets/web/imgs/car4.jpeg" alt="Mercedes S-Class"
                            class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 right-4 bg-indigo-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                            Available Now
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold text-gray-900">Mercedes S-Class</h3>
                            <div class="text-2xl font-bold text-indigo-600">$299<span
                                    class="text-sm text-gray-500">/day</span></div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                Automatic
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                4 Seats
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                GPS
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                Bluetooth
                            </div>
                        </div>
                        <a href="car-details.html"
                            class="block w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center px-4 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition">
                            Book Now
                        </a>
                    </div>
                </div>

                <!-- Car Card 2 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden group hover:shadow-xl transition duration-300 car-card"
                    data-category="luxury">
                    <div class="relative">
                        <img src="assets/web/imgs/car5.webp" alt="Range Rover Sport"
                            class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 right-4 bg-indigo-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                            Available Now
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold text-gray-900">Range Rover Sport</h3>
                            <div class="text-2xl font-bold text-indigo-600">$249<span
                                    class="text-sm text-gray-500">/day</span></div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                Automatic
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                5 Seats
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                GPS
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                Bluetooth
                            </div>
                        </div>
                        <a href="car-details.html"
                            class="block w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center px-4 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition">
                            Book Now
                        </a>
                    </div>
                </div>

                <!-- Car Card 3 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden group hover:shadow-xl transition duration-300 car-card"
                    data-category="suv">
                    <div class="relative">
                        <img src="assets/web/imgs/car6.jpg" alt="Porsche 911"
                            class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 right-4 bg-red-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                            Limited
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold text-gray-900">Porsche 911</h3>
                            <div class="text-2xl font-bold text-indigo-600">$399<span
                                    class="text-sm text-gray-500">/day</span></div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                Manual
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                2 Seats
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                GPS
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="text-indigo-600 mr-2">✓</span>
                                Bluetooth
                            </div>
                        </div>
                        <a href="car-details.html"
                            class="block w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center px-4 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Deals Section -->
    <section id="deals" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Special Offers</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Take advantage of our limited-time offers and save on your next premium car rental.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Deal 1 -->
                <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-6 border border-indigo-100">
                    <div class="bg-white rounded-xl p-4 mb-6">
                        <span class="text-sm font-medium text-indigo-600">Weekend Special</span>
                        <h3 class="text-2xl font-bold text-gray-900 mt-2">25% Off Weekend Rentals</h3>
                    </div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-700">
                            <span class="text-indigo-600 mr-2">✓</span>
                            Valid Friday to Monday
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-indigo-600 mr-2">✓</span>
                            All car categories
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-indigo-600 mr-2">✓</span>
                            Free additional driver
                        </li>
                    </ul>
                    <a href="car-details.html"
                        class="block text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition">
                        Book Now
                    </a>
                </div>

                <!-- Deal 2 -->
                <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-6 border border-indigo-100">
                    <div class="bg-white rounded-xl p-4 mb-6">
                        <span class="text-sm font-medium text-indigo-600">Weekly Deal</span>
                        <h3 class="text-2xl font-bold text-gray-900 mt-2">30% Off 7+ Day Rentals</h3>
                    </div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-700">
                            <span class="text-indigo-600 mr-2">✓</span>
                            Minimum 7 days rental
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-indigo-600 mr-2">✓</span>
                            Unlimited mileage
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-indigo-600 mr-2">✓</span>
                            Free GPS navigation
                        </li>
                    </ul>
                    <a href="car-details.html"
                        class="block text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition">
                        Book Now
                    </a>
                </div>

                <!-- Deal 3 -->
                <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-6 border border-indigo-100">
                    <div class="bg-white rounded-xl p-4 mb-6">
                        <span class="text-sm font-medium text-indigo-600">First Time Offer</span>
                        <h3 class="text-2xl font-bold text-gray-900 mt-2">15% Off First Rental</h3>
                    </div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-700">
                            <span class="text-indigo-600 mr-2">✓</span>
                            New customers only
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-indigo-600 mr-2">✓</span>
                            Any car category
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-indigo-600 mr-2">✓</span>
                            Free delivery
                        </li>
                    </ul>
                    <a href="car-details.html"
                        class="block text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition">
                        Book Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">How It Works</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Renting a premium car has never been easier. Follow these simple steps to get started.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-indigo-600">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Choose Your Car</h3>
                    <p class="text-gray-600">
                        Browse our fleet and select the perfect vehicle for your needs.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-indigo-600">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Pick Location & Date</h3>
                    <p class="text-gray-600">
                        Select your preferred pickup location and rental duration.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-indigo-600">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Book & Pay</h3>
                    <p class="text-gray-600">
                        Complete your booking with our secure payment system.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-indigo-600">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Enjoy Your Ride</h3>
                    <p class="text-gray-600">
                        Pick up your car and enjoy your premium driving experience.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose MyCarRental</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Experience the difference with our premium car rental service.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-gray-50 rounded-2xl p-8">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-2xl text-indigo-600">🚗</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Premium Fleet</h3>
                    <p class="text-gray-600">
                        Access to the latest luxury and premium vehicles, all maintained to the highest standards.
                    </p>
                </div>

                <!-- Benefit 2 -->
                <div class="bg-gray-50 rounded-2xl p-8">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-2xl text-indigo-600">💰</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Best Price Guarantee</h3>
                    <p class="text-gray-600">
                        Competitive rates and transparent pricing with no hidden fees or surprises.
                    </p>
                </div>

                <!-- Benefit 3 -->
                <div class="bg-gray-50 rounded-2xl p-8">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-2xl text-indigo-600">🎯</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Flexible Rentals</h3>
                    <p class="text-gray-600">
                        Customize your rental duration and choose from multiple pickup locations.
                    </p>
                </div>

                <!-- Benefit 4 -->
                <div class="bg-gray-50 rounded-2xl p-8">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-2xl text-indigo-600">🛡️</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Full Insurance</h3>
                    <p class="text-gray-600">
                        Comprehensive insurance coverage for peace of mind during your rental.
                    </p>
                </div>

                <!-- Benefit 5 -->
                <div class="bg-gray-50 rounded-2xl p-8">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-2xl text-indigo-600">⭐</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">24/7 Support</h3>
                    <p class="text-gray-600">
                        Round-the-clock customer support to assist you whenever you need help.
                    </p>
                </div>

                <!-- Benefit 6 -->
                <div class="bg-gray-50 rounded-2xl p-8">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-2xl text-indigo-600">🎁</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Loyalty Rewards</h3>
                    <p class="text-gray-600">
                        Earn points with every rental and enjoy exclusive member benefits.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gradient-to-r from-indigo-900 to-purple-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white mb-4">What Our Customers Say</h2>
                <p class="text-indigo-200 max-w-2xl mx-auto">
                    Don't just take our word for it. Here's what our satisfied customers have to say.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex items-center mb-6">
                        <img src="imgs/profile1.jpeg" alt="Customer" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Michael Brown</h3>
                            <div class="flex text-yellow-400">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Outstanding service! The car was immaculate and the staff was incredibly professional. Will
                        definitely rent from MyCarRental again."
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex items-center mb-6">
                        <img src="imgs/profile2.jpeg" alt="Customer" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Sarah Wilson</h3>
                            <div class="flex text-yellow-400">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "The booking process was seamless, and the car exceeded my expectations. Excellent value for a
                        luxury rental experience."
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex items-center mb-6">
                        <img src="imgs/profile3.jpeg" alt="Customer" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">David Thompson</h3>
                            <div class="flex text-yellow-400">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "The attention to detail and customer service is unmatched. MyCarRental made my special occasion
                        even more memorable."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Locations Section -->
    <section id="locations" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Locations</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Find us at convenient locations across major cities.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Location 1 -->
                <div class="bg-gray-50 rounded-2xl p-6">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-2xl text-indigo-600">📍</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">New York City</h3>
                    <p class="text-gray-600 mb-4">
                        123 Fifth Avenue<br>
                        New York, NY 10001
                    </p>
                    <a href="#" class="text-indigo-600 font-medium hover:text-indigo-700">
                        Get Directions →
                    </a>
                </div>

                <!-- Location 2 -->
                <div class="bg-gray-50 rounded-2xl p-6">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-2xl text-indigo-600">📍</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Los Angeles</h3>
                    <p class="text-gray-600 mb-4">
                        456 Sunset Boulevard<br>
                        Los Angeles, CA 90028
                    </p>
                    <a href="#" class="text-indigo-600 font-medium hover:text-indigo-700">
                        Get Directions →
                    </a>
                </div>

                <!-- Location 3 -->
                <div class="bg-gray-50 rounded-2xl p-6">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-2xl text-indigo-600">📍</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Chicago</h3>
                    <p class="text-gray-600 mb-4">
                        789 Michigan Avenue<br>
                        Chicago, IL 60601
                    </p>
                    <a href="#" class="text-indigo-600 font-medium hover:text-indigo-700">
                        Get Directions →
                    </a>
                </div>

                <!-- Location 4 -->
                <div class="bg-gray-50 rounded-2xl p-6">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-2xl text-indigo-600">📍</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Miami</h3>
                    <p class="text-gray-600 mb-4">
                        321 Ocean Drive<br>
                        Miami, FL 33139
                    </p>
                    <a href="#" class="text-indigo-600 font-medium hover:text-indigo-700">
                        Get Directions →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Blog Posts -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Latest News & Tips</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Stay updated with our latest news, driving tips, and travel guides.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <article class="bg-gray-50 rounded-3xl overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <img src="assets/web/imgs/car1.jpeg" alt="Blog Post"
                            class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">March 15, 2025</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Top 10 Luxury Cars for 2025</h3>
                        <p class="text-gray-600 mb-4">Discover the most luxurious and powerful cars that define
                            automotive excellence in 2025.</p>
                        <a href="blog-detail-sidebar.html" class="text-black font-medium hover:underline">Read More
                            →</a>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="bg-gray-50 rounded-3xl overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <img src="assets/web/imgs/car2.jpeg" alt="Blog Post"
                            class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">March 10, 2025</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Essential Road Trip Tips</h3>
                        <p class="text-gray-600 mb-4">Planning a road trip? Here are essential tips to make your
                            journey memorable and safe.</p>
                        <a href="blog-detail.html" class="text-black font-medium hover:underline">Read More →</a>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="bg-gray-50 rounded-3xl overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <img src="assets/web/imgs/car3.jpeg" alt="Blog Post"
                            class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">March 5, 2025</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">The Rise of Electric Vehicles</h3>
                        <p class="text-gray-600 mb-4">Explore how electric vehicles are transforming the future of
                            transportation.</p>
                        <a href="blog-detail.html" class="text-black font-medium hover:underline">Read More →</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
