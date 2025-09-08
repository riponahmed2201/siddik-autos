@extends('web.master')

@section('title', 'Home')

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
                    Your Premium Car <span class="text-indigo-400">Rental Partner</span>
                </h1>
                <p class="text-xl text-indigo-100 max-w-2xl mx-auto">
                    Choose from our premium vehicles and enjoy the freedom of the road with unmatched comfort and style.
                </p>
            </div>

            <!-- Booking Request Form -->
            <div id="bookingFormOriginalSlot">
                <div id="bookingFormContainer" class="bg-white rounded-2xl shadow-2xl p-6 md:p-8 max-w-4xl mx-auto transform translate-y-6">
                @if (session('success'))
                    <div class="mb-4 p-3 rounded bg-green-100 text-green-800">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="mb-4 p-3 rounded bg-red-100 text-red-800">
                        <ul class="list-disc ms-4">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="bookingRequestForm" method="POST" action="{{ route('booking.request') }}">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Your Name <span
                                    class="text-red-500">*</span></label>
                            <input name="name" value="{{ old('name') }}" type="text" placeholder="Full name"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number <span
                                    class="text-red-500">*</span></label>
                            <input name="phone" value="{{ old('phone') }}" type="text"
                                placeholder="Enter mobile number"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input name="email" value="{{ old('email') }}" type="email" placeholder="Enter email"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Vehicle Type</label>
                            <select name="vehicle_type_id"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                <option value="">Select Vehicle</option>
                                @foreach (\App\Models\VehicleType::where('is_active', true)->get() as $vt)
                                    <option value="{{ $vt->id }}" @selected(old('vehicle_type_id') == $vt->id)>{{ $vt->name }}
                                        ({{ $vt->capacity }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Destination</label>
                            <select name="destination_id"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                <option value="">Select Destination</option>
                                @foreach (\App\Models\Destination::where('is_active', true)->get() as $dest)
                                    <option value="{{ $dest->id }}" @selected(old('destination_id') == $dest->id)>{{ $dest->name }}
                                        {{ $dest->zone ? '(' . $dest->zone . ')' : '' }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">From Location <span
                                    class="text-red-500">*</span></label>
                            <input name="from_location" value="{{ old('from_location', 'Dhaka Airport') }}" type="text"
                                placeholder="Pickup location"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Journey Date</label>
                            <input name="journey_date" value="{{ old('journey_date') }}" type="date"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Journey Time</label>
                            <input name="journey_time" value="{{ old('journey_time') }}" type="time"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Passengers</label>
                            <input name="passengers" value="{{ old('passengers', 1) }}" type="number" min="1"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                        <div class="md:col-span-3">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea name="message" rows="3"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">{{ old('message') }}</textarea>
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <button
                            class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-8 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition shadow-md">
                            Request Booking
                        </button>
                    </div>
                </form>
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
                    Explore our collection of well-maintained vehicles, offering the highest standards of quality, comfort,
                    and style.
                </p>
            </div>

            <!-- Vehicle Categories -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button onclick="filterCars('all')" data-category="all"
                    class="filter-btn bg-indigo-600 text-white px-6 py-2 rounded-full font-medium transition">
                    All Vehicles
                </button>
                @foreach ($categories as $category)
                    <button onclick="filterCars('{{ $category->slug }}')" data-category="{{ $category->slug }}"
                        class="filter-btn bg-gray-100 text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-200 transition">
                        {{ $category->icon }} {{ $category->name }}
                    </button>
                @endforeach
            </div>

            <!-- Vehicles Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($vehicleTypes as $vehicleType)
                    <div class="bg-white rounded-2xl shadow-md overflow-hidden group hover:shadow-xl transition duration-300 car-card"
                        data-category="{{ $vehicleType->category ? $vehicleType->category->slug : 'other' }}">
                        <div class="relative">
                            @if ($vehicleType->image_path)
                                <img src="{{ asset('storage/' . $vehicleType->image_path) }}"
                                    alt="{{ $vehicleType->name }}"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                            @else
                                <div
                                    class="w-full h-48 bg-gradient-to-br from-indigo-100 to-purple-100 flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="text-4xl text-indigo-400 mb-2">🚗</div>
                                        <div class="text-indigo-600 font-medium">{{ $vehicleType->name }}</div>
                                    </div>
                                </div>
                            @endif
                            <div
                                class="absolute top-4 right-4 bg-indigo-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                                Available Now
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-xl font-bold text-gray-900">{{ $vehicleType->name }}</h3>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center text-gray-600">
                                    <span class="text-indigo-600 mr-2">👥</span>
                                    {{ $vehicleType->capacity }} Seats
                                </div>
                                @if ($vehicleType->features->count() > 0)
                                    @foreach ($vehicleType->features->take(3) as $feature)
                                        <div class="flex items-center text-gray-600">
                                            <span class="text-indigo-600 mr-2">{{ $feature->icon }}</span>
                                            {{ $feature->name }}
                                        </div>
                                    @endforeach
                                @else
                                    <div class="flex items-center text-gray-600">
                                        <span class="text-indigo-600 mr-2">✓</span>
                                        Premium Features
                                    </div>
                                    <div class="flex items-center text-gray-600">
                                        <span class="text-indigo-600 mr-2">✓</span>
                                        Comfort
                                    </div>
                                @endif
                            </div>
                            @if ($vehicleType->description)
                                <p class="text-gray-600 text-sm mb-4">{{ Str::limit($vehicleType->description, 80) }}</p>
                            @endif
                            <button type="button" data-vehicle-id="{{ $vehicleType->id }}" data-vehicle-name="{{ $vehicleType->name }}"
                                class="book-now-btn block w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center px-4 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition">
                                Book Now
                            </button>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <div class="text-gray-500 text-lg">No vehicles available at the moment.</div>
                        <p class="text-gray-400 mt-2">Please check back later for our latest fleet.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Booking Modal -->
    <div id="bookingModal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative flex items-center justify-center min-h-screen p-4">
            <div class="bg-white w-full max-w-4xl rounded-2xl shadow-xl overflow-hidden">
                <div class="px-6 py-4 border-b flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">Booking Request - <span id="modalVehicleName" class="font-medium text-indigo-600"></span></h3>
                    <button type="button" class="modal-close text-gray-500 hover:text-gray-700">✕</button>
                </div>
                <div class="px-4 md:px-6 py-5" id="bookingFormHost">
                    <!-- The booking form will be moved here dynamically -->
                </div>
            </div>
        </div>
    </div>

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
                @forelse($testimonials as $testimonial)
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center mb-6">
                            @if ($testimonial->customer_image)
                                <img src="{{ asset('storage/' . $testimonial->customer_image) }}"
                                    alt="{{ $testimonial->customer_name }}"
                                    class="w-12 h-12 rounded-full object-cover mr-4">
                            @else
                                <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="bi bi-person text-indigo-600"></i>
                                </div>
                            @endif
                            <div>
                                <h3 class="text-lg font-bold text-gray-900">{{ $testimonial->customer_name }}</h3>
                                @if ($testimonial->customer_position || $testimonial->customer_company)
                                    <p class="text-sm text-gray-500">
                                        @if ($testimonial->customer_position)
                                            {{ $testimonial->customer_position }}
                                        @endif
                                        @if ($testimonial->customer_position && $testimonial->customer_company)
                                            at
                                        @endif
                                        @if ($testimonial->customer_company)
                                            {{ $testimonial->customer_company }}
                                        @endif
                                    </p>
                                @endif
                                <div class="flex text-yellow-400">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $testimonial->rating)
                                            ★
                                        @else
                                            ☆
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            "{{ $testimonial->testimonial }}"
                        </p>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <div class="text-white text-lg">No testimonials available at the moment.</div>
                        <p class="text-indigo-200 mt-2">Please check back later for customer reviews.</p>
                    </div>
                @endforelse
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

            @php($latest = \App\Models\Blog::where('is_published', true)->latest('published_at')->take(3)->get())
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($latest as $post)
                    <article class="bg-white rounded-3xl shadow overflow-hidden group">
                        @if ($post->thumbnail_path)
                            <div class="relative overflow-hidden">
                                <img src="{{ asset('storage/' . $post->thumbnail_path) }}" alt="{{ $post->title }}"
                                    class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-500">
                            </div>
                        @endif
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2">{{ optional($post->published_at)->format('M d, Y') }}
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">
                                <a href="{{ url('blog/details/' . $post->slug) }}"
                                    class="hover:text-indigo-600 transition">{{ $post->title }}</a>
                            </h3>
                            @if ($post->excerpt)
                                <p class="text-gray-600 mb-4">{{ $post->excerpt }}</p>
                            @endif
                            <a href="{{ url('blog/details/' . $post->slug) }}"
                                class="text-indigo-600 font-medium hover:text-indigo-700">Read More →</a>
                        </div>
                    </article>
                @empty
                    <p class="text-gray-600">No posts yet. Please check back later.</p>
                @endforelse
            </div>
            <div class="mt-10 text-center">
                <a href="{{ url('blog') }}"
                    class="inline-block px-6 py-3 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition">View
                    All Posts</a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Toast helper
        function showToast(message, type = 'success') {
            const root = document.getElementById('toast-root');
            if (!root) return;
            const id = `t-${Date.now()}`;
            const bg = type === 'error' ? 'bg-red-600' : 'bg-green-600';
            const el = document.createElement('div');
            el.id = id;
            el.className = `${bg} text-white px-4 py-3 rounded-lg shadow-lg min-w-[260px]`;
            el.textContent = message;
            root.appendChild(el);
            setTimeout(() => {
                el.classList.add('opacity-0', 'transition');
                setTimeout(() => el.remove(), 300);
            }, 2500);
        }
        // Vanilla JS handlers (works even without jQuery)
        document.addEventListener('click', function (e) {
            const bookBtn = e.target.closest('.book-now-btn');
            if (bookBtn) {
                e.preventDefault();
                const vehicleId = bookBtn.getAttribute('data-vehicle-id');
                const vehicleName = bookBtn.getAttribute('data-vehicle-name');
                const modal = document.getElementById('bookingModal');
                modal.dataset.vehicleId = vehicleId || '';
                document.getElementById('modalVehicleName').textContent = vehicleName || '';

                // Move the form into the modal host
                const host = document.getElementById('bookingFormHost');
                const formContainer = document.getElementById('bookingFormContainer');
                if (host && formContainer && !host.contains(formContainer)) {
                    host.appendChild(formContainer);
                }

                modal.classList.remove('hidden');
                return;
            }

            if (e.target.classList.contains('modal-close')) {
                const modal = document.getElementById('bookingModal');
                modal.classList.add('hidden');
                // Move the form back to its original slot
                const original = document.getElementById('bookingFormOriginalSlot');
                const formContainer = document.getElementById('bookingFormContainer');
                if (original && formContainer && !original.contains(formContainer)) {
                    original.appendChild(formContainer);
                }
                return;
            }
        });

        document.getElementById('bookingModal').addEventListener('click', function (e) {
            if (e.target.id === 'bookingModal') {
                e.currentTarget.classList.add('hidden');
                // Return form to original slot
                const original = document.getElementById('bookingFormOriginalSlot');
                const formContainer = document.getElementById('bookingFormContainer');
                if (original && formContainer && !original.contains(formContainer)) {
                    original.appendChild(formContainer);
                }
            }
        });

        // AJAX submit for booking form
        document.addEventListener('submit', function (e) {
            const form = e.target.closest('#bookingRequestForm');
            if (!form) return;
            e.preventDefault();

            const url = form.getAttribute('action');
            const formData = new FormData(form);
            // include JSON expectation
            fetch(url, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
                },
                body: formData
            }).then(async res => {
                const data = await res.json().catch(() => ({}));
                if (res.ok) {
                    showToast(data.message || 'Booking submitted successfully.');
                    // reset form, close modal, return form to original slot
                    form.reset();
                    const modal = document.getElementById('bookingModal');
                    modal.classList.add('hidden');
                    const original = document.getElementById('bookingFormOriginalSlot');
                    const formContainer = document.getElementById('bookingFormContainer');
                    if (original && formContainer && !original.contains(formContainer)) {
                        original.appendChild(formContainer);
                    }
                } else {
                    let msg = 'Submission failed.';
                    if (data && data.errors) {
                        msg = Object.values(data.errors).flat().join(' ');
                    } else if (data && data.message) {
                        msg = data.message;
                    }
                    showToast(msg, 'error');
                }
            }).catch(() => {
                showToast('Network error. Please try again.', 'error');
            });
        });

        // No marker needed now; the form returns to #bookingFormOriginalSlot
        function filterCars(category) {
            // Remove active class from all buttons
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.remove('bg-indigo-600', 'text-white');
                btn.classList.add('bg-gray-100', 'text-gray-700');
            });

            // Add active class to clicked button
            event.target.classList.remove('bg-gray-100', 'text-gray-700');
            event.target.classList.add('bg-indigo-600', 'text-white');

            // Show/hide car cards based on category
            const carCards = document.querySelectorAll('.car-card');
            carCards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
@endpush
