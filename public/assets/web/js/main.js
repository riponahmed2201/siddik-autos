/*------------------------------------------------------------------
[Main JavaScript File]
Project: MyCarRental
Version: 1.0
Last change: 06/16/2025 [initial release, optimized for strict equality]
Primary use: Client-side interactivity for mobile menu, FAQs, car filtering, tabs, and sliders
-------------------------------------------------------------------*/

// Mobile Menu Toggle
// Toggles visibility of mobile menu and updates icon states
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    mobileMenu.classList.toggle('hidden');
    menuIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
}

// FAQ Toggle
// Toggles FAQ answers and rotates icon; closes other FAQs
function toggleFAQ(button) {
    const faqItem = button.closest('.faq-item');
    const answer = faqItem.querySelector('.faq-answer');
    const icon = button.querySelector('svg');

    // Close other FAQs
    document.querySelectorAll('.faq-item').forEach(item => {
        if (item !== faqItem) {
            item.querySelector('.faq-answer').classList.add('hidden');
            item.querySelector('svg').style.transform = 'rotate(0deg)';
        }
    });

    // Toggle current FAQ
    answer.classList.toggle('hidden');
    if (!answer.classList.contains('hidden')) {
        answer.style.maxHeight = `${answer.scrollHeight}px`;
        icon.style.transform = 'rotate(180deg)';
    } else {
        answer.style.maxHeight = null;
        icon.style.transform = 'rotate(0deg)';
    }
}

// Car Filtering Functionality
// Filters car cards by category and updates button styles
function filterCars(category) {
    const allCards = document.querySelectorAll('.car-card');
    const activeButton = document.querySelector(`[data-category="${category}"]`);
    const allButtons = document.querySelectorAll('.filter-btn');

    // Update button styles
    if (activeButton.dataset.bg) {
        allButtons.forEach(btn => {
            btn.classList.remove(activeButton.dataset.bg, 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-700');
        });
        activeButton.classList.remove('bg-gray-200', 'text-gray-700');
        activeButton.classList.add(activeButton.dataset.bg, 'text-white');
    } else {
        allButtons.forEach(btn => {
            btn.classList.remove('bg-indigo-600', 'text-white');
            btn.classList.add('bg-gray-100', 'text-gray-700');
        });
        activeButton.classList.remove('bg-gray-100', 'text-gray-700');
        activeButton.classList.add('bg-indigo-600', 'text-white');
    }

    // Filter cards
    allCards.forEach(card => {
        if (category === 'all' || card.dataset.category === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Toggle Advanced Search
// Shows or hides the advanced search panel
function toggleAdvancedSearch() {
    const advancedSearch = document.querySelector('.advanced-search');
    advancedSearch.classList.toggle('hidden');
}

// Toggle Between Login and Register Tabs
// Switches between login and register forms
function showTab(tab) {
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    const loginTab = document.getElementById('login-tab');
    const registerTab = document.getElementById('register-tab');

    if (tab === 'login') {
        loginForm.classList.remove('hidden');
        registerForm.classList.add('hidden');
        loginTab.classList.add('border-indigo-600', 'text-indigo-600');
        loginTab.classList.remove('border-transparent', 'text-gray-500');
        registerTab.classList.remove('border-indigo-600', 'text-indigo-600');
        registerTab.classList.add('border-transparent', 'text-gray-500');
    } else {
        loginForm.classList.add('hidden');
        registerForm.classList.remove('hidden');
        loginTab.classList.remove('border-indigo-600', 'text-indigo-600');
        loginTab.classList.add('border-transparent', 'text-gray-500');
        registerTab.classList.add('border-indigo-600', 'text-indigo-600');
        registerTab.classList.remove('border-transparent', 'text-gray-500');
    }
}

// Profile Settings Tab Navigation
// Switches between profile tab content
function switchProfileTab(tabId) {
    const tabLinks = document.querySelectorAll('.profile-tab');
    const tabContents = document.querySelectorAll('.tab-content');

    // Remove active classes from all tabs
    tabLinks.forEach(tab => {
        tab.classList.remove('text-indigo-600', 'bg-indigo-50');
        tab.classList.add('text-gray-700');
    });

    // Add active class to selected tab
    const activeTab = document.querySelector(`[data-tab="${tabId}"]`);
    if (activeTab) {
        activeTab.classList.remove('text-gray-700');
        activeTab.classList.add('text-indigo-600', 'bg-indigo-50');
    }

    // Hide all content sections
    tabContents.forEach(content => {
        content.classList.add('hidden');
    });

    // Show selected content section
    const activeContent = document.getElementById(tabId);
    if (activeContent) {
        activeContent.classList.remove('hidden');
    }
}

// Submenu Toggle
// Toggles visibility of a submenu and rotates its arrow
function toggleSubmenu(menuName) {
    const submenu = document.getElementById(`${menuName}-submenu`);
    const arrow = document.getElementById(`${menuName}-arrow`);

    submenu.classList.toggle('open');
    arrow.classList.toggle('rotated');
}

// Initialize Swiper Sliders
if (typeof Swiper !== 'undefined') {
    // Initialize Partner Logos Slider
    document.addEventListener('DOMContentLoaded', function() {
        const partnerLogosSwiper = new Swiper('.partner-logos-slider', {
            slidesPerView: 2,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 4,
                },
                1024: {
                    slidesPerView: 5,
                },
            },
        });
    });

    // Initialize Featured Cars Slider
    new Swiper('.featured-cars-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });

    // Initialize Testimonials Slider
    new Swiper('.testimonials-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });

    // Initialize Thumbnail and Main Swiper
    const thumbSwiper = new Swiper('.thumb-swiper', {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    const mainSwiper = new Swiper('.main-swiper', {
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: thumbSwiper,
        },
    });
}

// Event Listeners
document.addEventListener('DOMContentLoaded', () => {
    const profileTabs = document.querySelector('.profile-tabs');
    if (profileTabs) {
        switchProfileTab('personal-info');
    }

    // Close mobile menu when clicking on a link
    const mobileMenu = document.getElementById('mobile-menu');
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            if (!mobileMenu.classList.contains('hidden')) {
                toggleMobileMenu();
            }
        });
    });
});

// Close mobile menu when clicking outside
document.addEventListener('click', function(event) {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuButton = event.target.closest('button[onclick="toggleMobileMenu()"]');

    if (!mobileMenu.contains(event.target) && !menuButton && !mobileMenu.classList.contains('hidden')) {
        toggleMobileMenu();
    }
});