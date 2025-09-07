<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'customer_name' => 'Michael Brown',
                'customer_position' => 'Business Executive',
                'customer_company' => 'Tech Solutions Inc.',
                'testimonial' => 'Outstanding service! The car was immaculate and the staff was incredibly professional. Will definitely rent from MyCarRental again.',
                'rating' => 5,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'customer_name' => 'Sarah Wilson',
                'customer_position' => 'Marketing Director',
                'customer_company' => 'Creative Agency',
                'testimonial' => 'The booking process was seamless, and the car exceeded my expectations. Excellent value for a luxury rental experience.',
                'rating' => 5,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'customer_name' => 'David Thompson',
                'customer_position' => 'Event Planner',
                'customer_company' => 'Premier Events',
                'testimonial' => 'The attention to detail and customer service is unmatched. MyCarRental made my special occasion even more memorable.',
                'rating' => 5,
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'customer_name' => 'Emily Johnson',
                'customer_position' => 'Travel Blogger',
                'customer_company' => 'Wanderlust Travel',
                'testimonial' => 'Perfect for our family vacation! Clean, comfortable, and reliable. The GPS and Bluetooth made our journey smooth.',
                'rating' => 4,
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'customer_name' => 'Robert Chen',
                'customer_position' => 'Sales Manager',
                'customer_company' => 'Global Corp',
                'testimonial' => 'Professional service with competitive pricing. The vehicle was exactly as described and the pickup process was quick.',
                'rating' => 5,
                'is_featured' => false,
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
