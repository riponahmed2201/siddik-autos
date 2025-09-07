<?php

namespace Database\Seeders;

use App\Models\VehicleCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VehicleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Sedan',
                'slug' => 'sedan',
                'description' => 'Comfortable sedan cars for 4-5 passengers',
                'icon' => '🚗',
                'is_active' => true,
            ],
            [
                'name' => 'Van',
                'slug' => 'van',
                'description' => 'Spacious vans for group travel',
                'icon' => '🚐',
                'is_active' => true,
            ],
            [
                'name' => 'Bus',
                'slug' => 'bus',
                'description' => 'Large buses for big groups',
                'icon' => '🚌',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            VehicleCategory::firstOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}
