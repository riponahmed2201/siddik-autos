@extends('web.master')

@section('title', 'Contact Us')

@section('content')
    <!-- Contact Hero Section -->
    <section class="relative bg-gradient-to-r from-indigo-900 to-purple-900 py-32">
        <div
            class="absolute inset-0 bg-[url('https://images.pexels.com/photos/3802510/pexels-photo-3802510.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')] bg-cover bg-center opacity-20">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-900 to-purple-900 opacity-90"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Get in Touch</h1>
            <p class="text-xl text-indigo-100 max-w-2xl mx-auto">
                Have questions? We're here to help. Contact our team for assistance with bookings, inquiries, or support.
            </p>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input type="text" name="first_name" required placeholder="John"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input type="text" name="last_name" placeholder="Doe"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" name="email" required placeholder="name@example.com"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" name="phone" placeholder="+8801XXXXXXXXX"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <select name="subject" required
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Booking Question">Booking Question</option>
                                <option value="Support">Support</option>
                                <option value="Feedback">Feedback</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea name="message" rows="5" required placeholder="Write your message..."
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-transparent"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-8 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition shadow-md">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div>
                    <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h2>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <span class="text-indigo-600">📍</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-900">Main Office</h3>
                                    <p class="mt-1 text-gray-600">
                                        1234 Luxury Lane<br>
                                        New York, NY 10001<br>
                                        United States
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <span class="text-indigo-600">📞</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-900">Phone</h3>
                                    <p class="mt-1 text-gray-600">
                                        +1 (555) 123-4567<br>
                                        Mon-Sun 24/7
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <span class="text-indigo-600">📧</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-900">Email</h3>
                                    <p class="mt-1 text-gray-600">
                                        support@autoelite.com<br>
                                        bookings@autoelite.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="bg-white rounded-2xl shadow-xl p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Business Hours</h2>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Monday - Friday</span>
                                <span class="text-gray-900 font-medium">8:00 AM - 8:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Saturday</span>
                                <span class="text-gray-900 font-medium">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Sunday</span>
                                <span class="text-gray-900 font-medium">10:00 AM - 4:00 PM</span>
                            </div>
                            <div class="mt-6 pt-6 border-t border-gray-200">
                                <div class="flex items-center text-indigo-600">
                                    <span class="text-lg mr-2">ℹ️</span>
                                    <span>24/7 Support Available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1645890124885!5m2!1sen!2s"
                    width="100" height="500" style="border:0; width:100%" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Find answers to common questions about our rental services.
                </p>
            </div>
            <div class="max-w-3xl mx-auto space-y-6">
                <!-- FAQ Item 1 -->
                <div class="faq-item bg-white rounded-xl shadow-md overflow-hidden ">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold">What documents do I need to book?</span>
                        <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600 bg-gray-50">
                        A valid phone number is required for confirmation. For chauffeur-driven rides, a government ID may be requested at pickup.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item bg-white rounded-xl shadow-md overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold">Which payment methods do you accept?</span>
                        <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600 bg-gray-50">
                        We accept cash, bank transfer, and popular mobile wallets. Corporate clients can request monthly invoicing.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item bg-white rounded-xl shadow-md overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold">Is fuel, parking, or toll included?</span>
                        <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600 bg-gray-50">
                        Base prices cover the vehicle and driver. Fuel, parking fees, and tolls are charged as per actuals unless specified in a package.
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item bg-white rounded-xl shadow-md overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold">Can I cancel or reschedule?</span>
                        <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600 bg-gray-50">
                        Free cancellation up to 24 hours before pickup. Within 24 hours, a small fee may apply to cover scheduling costs.
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item bg-white rounded-xl shadow-md overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold">Do you provide baby seats and extra luggage space?</span>
                        <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600 bg-gray-50">
                        Yes. Request child seats or a larger boot space during booking. Additional charges may apply based on availability.
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="faq-item bg-white rounded-xl shadow-md overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold">How is waiting time handled for airport pickups?</span>
                        <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600 bg-gray-50">
                        We include a complimentary 30-minute grace period after the scheduled time. Beyond that, standard waiting charges apply.
                    </div>
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
                <a href="/#fleet"
                    class="bg-white text-indigo-600 px-8 py-3 rounded-full font-medium hover:bg-gray-100 transition">
                    Browse Our Fleet
                </a>
                <a href="/contact-us"
                    class="bg-transparent text-white border-2 border-white px-8 py-3 rounded-full font-medium hover:bg-white/10 transition">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Lightweight toast for contact page
        function contactToast(msg) {
            const root = document.getElementById('toast-root');
            if (!root) return alert(msg);
            const el = document.createElement('div');
            el.className = 'bg-green-600 text-white px-4 py-3 rounded-lg shadow-lg min-w-[260px]';
            el.textContent = msg;
            root.appendChild(el);
            setTimeout(() => { el.remove(); }, 2500);
        }

        document.getElementById('contactForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            const form = this;
            const url = form.getAttribute('action');
            const formData = new FormData(form);
            fetch(url, {
                method: 'POST',
                headers: { 'Accept': 'application/json' },
                body: formData
            }).then(async res => {
                const data = await res.json().catch(() => ({}));
                if (res.ok) {
                    form.reset();
                    contactToast(data.message || 'Thanks! Your message has been sent.');
                } else {
                    let msg = 'Submission failed.';
                    if (data.errors) {
                        msg = Object.values(data.errors).flat().join(' ');
                    } else if (data.message) {
                        msg = data.message;
                    }
                    alert(msg);
                }
            }).catch(() => alert('Network error. Please try again.'));
        });
    </script>
@endpush
