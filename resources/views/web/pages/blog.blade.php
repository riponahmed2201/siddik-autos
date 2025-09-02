@extends('web.master')

@section('title', 'Contact Us')

@section('content')

    <!-- Blog Hero Section -->
    <section class="relative bg-gradient-to-r from-indigo-900 to-purple-900 py-32">
        <div
            class="absolute inset-0 bg-[url('https://images.pexels.com/photos/3802510/pexels-photo-3802510.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')] bg-cover bg-center opacity-20">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-900 to-purple-900 opacity-90"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Latest News & Updates</h1>
            <p class="text-xl text-indigo-100 max-w-2xl mx-auto">
                Stay informed about the latest trends, tips, and news in the automotive industry.
            </p>
        </div>
    </section>

    <!-- Blog Grid Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <article class="bg-white rounded-2xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="assets/web/imgs/car1.jpeg" alt="Blog Post" class="w-full h-48 object-cover">
                        <div
                            class="absolute top-4 left-4 bg-indigo-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                            Car Reviews
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <span>March 15, 2024</span>
                            <span class="mx-2">•</span>
                            <span>5 min read</span>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900 mb-4">
                            <a href="/blog/details/test-slug" class="hover:text-indigo-600 transition">
                                The Ultimate Guide to Luxury Car Features in 2024
                            </a>
                        </h2>
                        <p class="text-gray-600 mb-6">
                            Discover the latest technological advancements and luxury features that are setting new
                            standards in the automotive industry.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="assets/web/imgs/profile1.jpeg" alt="Author"
                                    class="w-10 h-10 rounded-full object-cover mr-3">
                                <span class="text-sm font-medium text-gray-900">Michael Anderson</span>
                            </div>
                            <a href="/blog/details/test-slug"
                                class="text-indigo-600 font-medium hover:text-indigo-700 transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="bg-white rounded-2xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="assets/web/imgs/about.webp" alt="Blog Post" class="w-full h-48 object-cover">
                        <div
                            class="absolute top-4 left-4 bg-green-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                            Travel Tips
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <span>March 12, 2024</span>
                            <span class="mx-2">•</span>
                            <span>4 min read</span>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900 mb-4">
                            <a href="/blog/details/test-slug" class="hover:text-indigo-600 transition">
                                10 Essential Tips for a Memorable Road Trip
                            </a>
                        </h2>
                        <p class="text-gray-600 mb-6">
                            Planning a road trip? Here are the essential tips you need to know for a comfortable and
                            memorable journey.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="assets/web/imgs/profile2.jpeg" alt="Author"
                                    class="w-10 h-10 rounded-full object-cover mr-3">
                                <span class="text-sm font-medium text-gray-900">Sarah Wilson</span>
                            </div>
                            <a href="/blog/details/test-slug"
                                class="text-indigo-600 font-medium hover:text-indigo-700 transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="bg-white rounded-2xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="assets/web/imgs/carpart1.webp" alt="Blog Post" class="w-full h-48 object-cover">
                        <div
                            class="absolute top-4 left-4 bg-blue-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                            Industry News
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <span>March 10, 2024</span>
                            <span class="mx-2">•</span>
                            <span>3 min read</span>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900 mb-4">
                            <a href="/blog/details/test-slug" class="hover:text-indigo-600 transition">
                                The Future of Electric Vehicles: What to Expect
                            </a>
                        </h2>
                        <p class="text-gray-600 mb-6">
                            Explore the latest developments in electric vehicle technology and what the future holds for
                            sustainable transportation.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="assets/web/imgs/profile3.jpeg" alt="Author"
                                    class="w-10 h-10 rounded-full object-cover mr-3">
                                <span class="text-sm font-medium text-gray-900">David Thompson</span>
                            </div>
                            <a href="/blog/details/test-slug"
                                class="text-indigo-600 font-medium hover:text-indigo-700 transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 1 -->
                <article class="bg-white rounded-2xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="assets/web/imgs/car2.jpeg" alt="Blog Post" class="w-full h-48 object-cover">
                        <div
                            class="absolute top-4 left-4 bg-indigo-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                            Car Reviews
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <span>March 15, 2024</span>
                            <span class="mx-2">•</span>
                            <span>5 min read</span>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900 mb-4">
                            <a href="/blog/details/test-slug" class="hover:text-indigo-600 transition">
                                The Ultimate Guide to Luxury Car Features in 2024
                            </a>
                        </h2>
                        <p class="text-gray-600 mb-6">
                            Discover the latest technological advancements and luxury features that are setting new
                            standards in the automotive industry.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="../photos/220453/pexels-photo-220453.jpeg" alt="Author"
                                    class="w-10 h-10 rounded-full object-cover mr-3">
                                <span class="text-sm font-medium text-gray-900">Michael Anderson</span>
                            </div>
                            <a href="/blog/details/test-slug"
                                class="text-indigo-600 font-medium hover:text-indigo-700 transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="bg-white rounded-2xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="assets/web/imgs/carpart2.webp" alt="Blog Post" class="w-full h-48 object-cover">
                        <div
                            class="absolute top-4 left-4 bg-green-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                            Travel Tips
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <span>March 12, 2024</span>
                            <span class="mx-2">•</span>
                            <span>4 min read</span>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900 mb-4">
                            <a href="/blog/details/test-slug" class="hover:text-indigo-600 transition">
                                10 Essential Tips for a Memorable Road Trip
                            </a>
                        </h2>
                        <p class="text-gray-600 mb-6">
                            Planning a road trip? Here are the essential tips you need to know for a comfortable and
                            memorable journey.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="assets/web/imgs/profile2.jpeg" alt="Author"
                                    class="w-10 h-10 rounded-full object-cover mr-3">
                                <span class="text-sm font-medium text-gray-900">Sarah Wilson</span>
                            </div>
                            <a href="/blog/details/test-slug"
                                class="text-indigo-600 font-medium hover:text-indigo-700 transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="bg-white rounded-2xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="assets/web/imgs/carpart3.webp" alt="Blog Post" class="w-full h-48 object-cover">
                        <div
                            class="absolute top-4 left-4 bg-blue-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                            Industry News
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <span>March 10, 2024</span>
                            <span class="mx-2">•</span>
                            <span>3 min read</span>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900 mb-4">
                            <a href="/blog/details/test-slug" class="hover:text-indigo-600 transition">
                                The Future of Electric Vehicles: What to Expect
                            </a>
                        </h2>
                        <p class="text-gray-600 mb-6">
                            Explore the latest developments in electric vehicle technology and what the future holds for
                            sustainable transportation.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="assets/web/imgs/profile3.jpeg" alt="Author"
                                    class="w-10 h-10 rounded-full object-cover mr-3">
                                <span class="text-sm font-medium text-gray-900">David Thompson</span>
                            </div>
                            <a href="/blog/details/test-slug"
                                class="text-indigo-600 font-medium hover:text-indigo-700 transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <nav class="flex items-center space-x-2">
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                        Previous
                    </a>
                    <a href="#"
                        class="px-4 py-2 border border-indigo-600 bg-indigo-600 text-white rounded-md text-sm font-medium">
                        1
                    </a>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                        2
                    </a>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                        3
                    </a>
                    <span class="px-4 py-2 text-gray-500">...</span>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                        8
                    </a>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                        Next
                    </a>
                </nav>
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
