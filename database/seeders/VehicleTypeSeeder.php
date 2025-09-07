<?php

namespace Database\Seeders;

use App\Models\VehicleType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicleTypes = [
            [
                'name' => 'Sedan/Toyota Axio',
                'slug' => 'sedan-toyota-axio',
                'description' => 'Comfortable sedan car suitable for 4-5 passengers',
                'capacity' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Sedan/Toyota Allion/Premio',
                'slug' => 'sedan-toyota-allion-premio',
                'description' => 'Premium sedan car with enhanced comfort for 4-5 passengers',
                'capacity' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Toyota Noah/7 Seater',
                'slug' => 'toyota-noah-7-seater',
                'description' => 'Spacious 7-seater vehicle perfect for families',
                'capacity' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'Toyota Hiace/11 Seater',
                'slug' => 'toyota-hiace-11-seater',
                'description' => 'Large van suitable for group travel up to 11 passengers',
                'capacity' => 11,
                'is_active' => true,
            ],
            [
                'name' => 'Nissan URVAN/Toyota High Roof Hiace/17 Seater',
                'slug' => 'nissan-urvan-toyota-high-roof-hiace-17-seater',
                'description' => 'High-capacity vehicle for large groups up to 17 passengers',
                'capacity' => 17,
                'is_active' => true,
            ],
            [
                'name' => 'Tourist Bus/29 Seater',
                'slug' => 'tourist-bus-29-seater',
                'description' => 'Large tourist bus for big groups up to 29 passengers',
                'capacity' => 29,
                'is_active' => true,
            ],
        ];

        foreach ($vehicleTypes as $vehicleType) {
            VehicleType::firstOrCreate(
                ['slug' => $vehicleType['slug']],
                $vehicleType
            );
        }
    }
}
