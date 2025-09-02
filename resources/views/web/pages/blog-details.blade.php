@extends('web.master')

@section('title', 'Contact Us')

@section('content')
    <!-- Blog Hero Section -->
    <section class="relative bg-gradient-to-r from-indigo-900 to-purple-900 py-32">
        <div
            class="absolute inset-0 bg-[url('https://images.pexels.com/photos/3802510/pexels-photo-3802510.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')] bg-cover bg-center opacity-20">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-900 to-purple-900 opacity-90"></div>
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-indigo-600 text-white text-sm font-medium px-3 py-1 rounded-full inline-block mb-6">
                Car Reviews
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                The Ultimate Guide to Luxury Car Features in 2024
            </h1>
            <div class="flex items-center justify-center text-indigo-100 space-x-6">
                <div class="flex items-center">
                    <img src="imgs/profile1.jpeg" alt="Author" class="w-10 h-10 rounded-full object-cover mr-3">
                    <span>Michael Anderson</span>
                </div>
                <span>March 15, 2024</span>
                <span>5 min read</span>
            </div>
        </div>
    </section>

    <!-- Blog Content with Sidebar -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="prose prose-lg max-w-none">
                        <p class="lead">
                            The automotive industry is constantly evolving, with new technologies and features being
                            introduced every year. In this comprehensive guide, we'll explore the latest luxury car features
                            that are setting new standards in 2024.
                        </p>

                        <img src="imgs/car5.webp" alt="Luxury Car Interior" class="my-8 rounded-2xl">

                        <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-6">Advanced Driver Assistance Systems</h2>
                        <p>
                            Modern luxury cars come equipped with sophisticated driver assistance features that enhance both
                            safety and comfort. These systems include:
                        </p>
                        <ul class="list-disc pl-6 mb-6">
                            <li>Adaptive Cruise Control with Stop-and-Go</li>
                            <li>Lane Keeping Assist with Active Steering</li>
                            <li>360-degree Camera Systems</li>
                            <li>Automated Parking Assistance</li>
                        </ul>

                        <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-6">Interior Comfort and Technology</h2>
                        <p>
                            The interior of luxury vehicles has become increasingly sophisticated, offering unprecedented
                            levels of comfort and connectivity:
                        </p>
                        <ul class="list-disc pl-6 mb-6">
                            <li>Massage Seats with Multiple Programs</li>
                            <li>Advanced Climate Control with Air Purification</li>
                            <li>Ambient Lighting with Customizable Themes</li>
                            <li>Premium Sound Systems with Spatial Audio</li>
                        </ul>

                        <!-- Continue with more content sections -->

                        <!-- Author Bio -->
                        <div class="border-t border-gray-200 mt-12 pt-12">
                            <div class="flex items-center">
                                <img src="imgs/profile1.jpeg" alt="Author"
                                    class="w-16 h-16 rounded-full object-cover mr-6">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Michael Anderson</h3>
                                    <p class="text-gray-600">
                                        Automotive journalist with over 10 years of experience covering luxury vehicles and
                                        industry trends.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Share Buttons -->
                        <div class="border-t border-gray-200 mt-12 pt-12">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Share this article</h3>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">
                                    Facebook
                                </a>
                                <a href="#"
                                    class="bg-blue-400 text-white px-6 py-2 rounded-full hover:bg-blue-500 transition">
                                    Twitter
                                </a>
                                <a href="#"
                                    class="bg-green-600 text-white px-6 py-2 rounded-full hover:bg-green-700 transition">
                                    WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->

                <div class="lg:col-span-1">
                    <!-- Author Widget -->
                    <div class="bg-white rounded-2xl shadow-md p-6 mb-8">
                        <div class="text-center">
                            <img src="imgs/profile1.jpeg" alt="Author"
                                class="w-24 h-24 rounded-full object-cover mx-auto mb-4">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Michael Anderson</h3>
                            <p class="text-gray-600 mb-4">
                                Automotive journalist and car enthusiast with a passion for luxury vehicles.
                            </p>
                            <div class="flex justify-center space-x-4">
                                <a href="#" class="text-gray-400 hover:text-gray-600">
                                    <span class="sr-only">Facebook</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-600">
                                    <span class="sr-only">Twitter</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-600">
                                    <span class="sr-only">LinkedIn</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="bg-white rounded-2xl shadow-md p-6 mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Categories</h3>
                        <ul class="space-y-4">
                            <li>
                                <a href="#"
                                    class="flex justify-between items-center text-gray-600 hover:text-indigo-600 transition">
                                    <span>Car Reviews</span>
                                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-sm">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex justify-between items-center text-gray-600 hover:text-indigo-600 transition">
                                    <span>Industry News</span>
                                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-sm">8</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex justify-between items-center text-gray-600 hover:text-indigo-600 transition">
                                    <span>Travel Tips</span>
                                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-sm">15</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex justify-between items-center text-gray-600 hover:text-indigo-600 transition">
                                    <span>Maintenance</span>
                                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-sm">10</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Recent Posts Widget -->
                    <div class="bg-white rounded-2xl shadow-md p-6 mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Recent Posts</h3>
                        <div class="space-y-6">
                            <a href="#" class="flex items-center group">
                                <img src="imgs/carpart1.webp" alt="Recent Post" class="w-20 h-20 rounded-lg object-cover">
                                <div class="ml-4">
                                    <h4 class="text-gray-900 group-hover:text-indigo-600 transition font-medium">Top 10
                                        Luxury SUVs of 2024</h4>
                                    <p class="text-sm text-gray-500">March 12, 2024</p>
                                </div>
                            </a>
                            <a href="#" class="flex items-center group">
                                <img src="imgs/carpart2.webp" alt="Recent Post" class="w-20 h-20 rounded-lg object-cover">
                                <div class="ml-4">
                                    <h4 class="text-gray-900 group-hover:text-indigo-600 transition font-medium">The Rise
                                        of Electric Luxury Cars</h4>
                                    <p class="text-sm text-gray-500">March 10, 2024</p>
                                </div>
                            </a>
                            <a href="#" class="flex items-center group">
                                <img src="imgs/carpart3.webp" alt="Recent Post"
                                    class="w-20 h-20 rounded-lg object-cover">
                                <div class="ml-4">
                                    <h4 class="text-gray-900 group-hover:text-indigo-600 transition font-medium">Future of
                                        Autonomous Driving</h4>
                                    <p class="text-sm text-gray-500">March 8, 2024</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Tags Widget -->
                    <div class="bg-white rounded-2xl shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Popular Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <a href="#"
                                class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-gray-200 transition">
                                Luxury Cars
                            </a>
                            <a href="#"
                                class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-gray-200 transition">
                                Electric Vehicles
                            </a>
                            <a href="#"
                                class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-gray-200 transition">
                                SUV
                            </a>
                            <a href="#"
                                class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-gray-200 transition">
                                Technology
                            </a>
                            <a href="#"
                                class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-gray-200 transition">
                                Safety
                            </a>
                            <a href="#"
                                class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-gray-200 transition">
                                Performance
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Posts -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-12">Related Articles</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Related Post 1 -->
                <article class="bg-white rounded-2xl shadow-md overflow-hidden">
                    <img src="imgs/carpart1.webp" alt="Related Post" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">
                            <a href="#" class="hover:text-indigo-600 transition">
                                Top 10 Luxury SUVs of 2024
                            </a>
                        </h3>
                        <p class="text-gray-600">
                            Discover the most impressive luxury SUVs that combine comfort, performance, and style.
                        </p>
                    </div>
                </article>

                <!-- Related Post 2 -->
                <article class="bg-white rounded-2xl shadow-md overflow-hidden">
                    <img src="imgs/carpart2.webp" alt="Related Post" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">
                            <a href="#" class="hover:text-indigo-600 transition">
                                The Rise of Electric Luxury Cars
                            </a>
                        </h3>
                        <p class="text-gray-600">
                            How electric vehicles are reshaping the luxury car segment.
                        </p>
                    </div>
                </article>

                <!-- Related Post 3 -->
                <article class="bg-white rounded-2xl shadow-md overflow-hidden">
                    <img src="imgs/carpart3.webp" alt="Related Post" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">
                            <a href="#" class="hover:text-indigo-600 transition">
                                Future of Autonomous Driving
                            </a>
                        </h3>
                        <p class="text-gray-600">
                            What to expect from self-driving technology in luxury vehicles.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="bg-gradient-to-r from-indigo-900 to-purple-900 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-4">Subscribe to Our Newsletter</h2>
                <p class="text-indigo-100 mb-8">
                    Stay updated with our latest blog posts, industry news, and exclusive offers.
                </p>
                <form class="flex flex-col sm:flex-row gap-4">
                    <input type="email" placeholder="Enter your email"
                        class="flex-1 px-6 py-4 rounded-full bg-white/10 border border-white/20 text-white placeholder-white/60 focus:outline-none focus:border-white">
                    <button type="submit"
                        class="bg-white text-indigo-600 px-8 py-4 rounded-full font-medium hover:bg-gray-100 transition">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
