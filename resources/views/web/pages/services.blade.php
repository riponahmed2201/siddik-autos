@extends('web.master')

@section('title','Services')

@section('content')
    <section class="relative bg-gradient-to-r from-indigo-900 to-purple-900 py-28">
        <div class="absolute inset-0 opacity-20 bg-[url('https://images.pexels.com/photos/97075/pexels-photo-97075.jpeg')] bg-cover bg-center"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-900 to-purple-900 opacity-90"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Our Services</h1>
            <p class="text-indigo-100 max-w-2xl mx-auto">Tailored transportation solutions for every occasion.</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-2xl shadow bg-gray-50">
                    <div class="w-14 h-14 rounded-lg bg-indigo-100 flex items-center justify-center mb-5">🚖</div>
                    <h3 class="text-xl font-bold mb-3">Airport Transfers</h3>
                    <p class="text-gray-600">Reliable pickups and drop-offs with real-time flight tracking.</p>
                </div>
                <div class="p-8 rounded-2xl shadow bg-gray-50">
                    <div class="w-14 h-14 rounded-lg bg-indigo-100 flex items-center justify-center mb-5">🧑‍💼</div>
                    <h3 class="text-xl font-bold mb-3">Corporate Travel</h3>
                    <p class="text-gray-600">Premium fleet and chauffeurs for your business needs.</p>
                </div>
                <div class="p-8 rounded-2xl shadow bg-gray-50">
                    <div class="w-14 h-14 rounded-lg bg-indigo-100 flex items-center justify-center mb-5">🎉</div>
                    <h3 class="text-xl font-bold mb-3">Events & Tours</h3>
                    <p class="text-gray-600">Comfortable group transport for events and city tours.</p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="/" class="inline-block bg-indigo-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-indigo-700 transition">Book a Ride</a>
            </div>
        </div>
    </section>
@endsection


