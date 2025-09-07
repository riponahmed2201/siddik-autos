<?php

namespace Database\Seeders;

use App\Models\VehicleFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            [
                'name' => 'Automatic',
                'icon' => '⚙️',
                'is_active' => true,
            ],
            [
                'name' => 'GPS',
                'icon' => '📍',
                'is_active' => true,
            ],
            [
                'name' => 'Bluetooth',
                'icon' => '📱',
                'is_active' => true,
            ],
            [
                'name' => 'Air Conditioning',
                'icon' => '❄️',
                'is_active' => true,
            ],
            [
                'name' => 'USB Charging',
                'icon' => '🔌',
                'is_active' => true,
            ],
            [
                'name' => 'Leather Seats',
                'icon' => '🪑',
                'is_active' => true,
            ],
        ];

        foreach ($features as $feature) {
            VehicleFeature::firstOrCreate(
                ['name' => $feature['name']],
                $feature
            );
        }
    }
}
