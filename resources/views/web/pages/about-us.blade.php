@extends('web.master')

@section('title', 'About Us')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-indigo-900 to-purple-900 py-32">
        <div
            class="absolute inset-0 bg-[url('https://images.pexels.com/photos/3802510/pexels-photo-3802510.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')] bg-cover bg-center opacity-20">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-900 to-purple-900 opacity-90"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">About Siddik Autos</h1>
            <p class="text-xl text-indigo-100 max-w-2xl mx-auto">
                Delivering exceptional car rental experiences with luxury, comfort, and unmatched service since 2010.
            </p>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 transform rotate-6 rounded-3xl">
                    </div>
                    <img src="{{ asset('assets/web/imgs/about.webp') }}" alt="Our Story"
                        class="relative rounded-3xl shadow-xl">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <p class="text-gray-600 mb-6">
                        Founded in 2010, MyCarRental began with a simple vision: to provide premium car rental services that
                        exceed expectations. What started as a small fleet of luxury vehicles has grown into a comprehensive
                        collection of premium automobiles, serving thousands of satisfied customers across major cities.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Our commitment to excellence, attention to detail, and passion for exceptional service has made us a
                        leader in the luxury car rental industry. We take pride in offering not just vehicles, but
                        experiences that create lasting memories.
                    </p>
                    <div class="grid grid-cols-2 gap-6 mt-8">
                        <div class="text-center p-6 bg-gray-50 rounded-xl">
                            <div class="text-4xl font-bold text-indigo-600 mb-2">15+</div>
                            <div class="text-gray-600">Years Experience</div>
                        </div>
                        <div class="text-center p-6 bg-gray-50 rounded-xl">
                            <div class="text-4xl font-bold text-indigo-600 mb-2">50k+</div>
                            <div class="text-gray-600">Happy Customers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Core Values</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    These principles guide everything we do and help us deliver exceptional experiences to our customers.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                        <span class="text-3xl text-indigo-600">💎</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Excellence</h3>
                    <p class="text-gray-600">
                        We strive for excellence in every aspect of our service, from vehicle maintenance to customer
                        support.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                        <span class="text-3xl text-indigo-600">🤝</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Integrity</h3>
                    <p class="text-gray-600">
                        We conduct our business with honesty, transparency, and respect for our customers and employees.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                        <span class="text-3xl text-indigo-600">⭐</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Innovation</h3>
                    <p class="text-gray-600">
                        We continuously evolve and improve our services to meet the changing needs of our customers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Meet Our Leadership Team</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    The experienced professionals behind MyCarRental's success.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="relative mb-6 inline-block">
                        <div
                            class="w-48 h-48 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-full absolute top-2 left-2">
                        </div>
                        <img src="assets/web/imgs/profile4.webp" alt="CEO"
                            class="w-48 h-48 object-cover rounded-full relative z-10">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Michael Anderson</h3>
                    <p class="text-indigo-600 mb-4">Chief Executive Officer</p>
                    <p class="text-gray-600">
                        With over 20 years of experience in the automotive industry.
                    </p>
                </div>

                <div class="text-center">
                    <div class="relative mb-6 inline-block">
                        <div
                            class="w-48 h-48 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-full absolute top-2 left-2">
                        </div>
                        <img src="assets/web/imgs/profile5.webp" alt="COO"
                            class="w-48 h-48 object-cover rounded-full relative z-10">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Sarah Johnson</h3>
                    <p class="text-indigo-600 mb-4">Chief Operations Officer</p>
                    <p class="text-gray-600">
                        Leading our operations with innovation and excellence.
                    </p>
                </div>

                <div class="text-center">
                    <div class="relative mb-6 inline-block">
                        <div
                            class="w-48 h-48 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-full absolute top-2 left-2">
                        </div>
                        <img src="assets/web/imgs/profile3.jpeg" alt="CTO"
                            class="w-48 h-48 object-cover rounded-full relative z-10">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">David Chen</h3>
                    <p class="text-indigo-600 mb-4">Chief Technology Officer</p>
                    <p class="text-gray-600">
                        Driving digital innovation in our services.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-indigo-900 to-purple-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Ready to Experience Luxury?</h2>
            <p class="text-xl text-indigo-100 mb-8 max-w-2xl mx-auto">
                Join thousands of satisfied customers who choose MyCarRental for their premium car rental needs.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="car-listing.html"
                    class="bg-white text-indigo-600 px-8 py-3 rounded-full font-medium hover:bg-gray-100 transition">
                    Browse Our Fleet
                </a>
                <a href="contact.html"
                    class="bg-transparent text-white border-2 border-white px-8 py-3 rounded-full font-medium hover:bg-white/10 transition">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection
