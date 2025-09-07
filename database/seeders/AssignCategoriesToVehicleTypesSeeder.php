<?php

namespace Database\Seeders;

use App\Models\VehicleType;
use App\Models\VehicleCategory;
use App\Models\VehicleFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssignCategoriesToVehicleTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get categories
        $sedanCategory = VehicleCategory::where('slug', 'sedan')->first();
        $vanCategory = VehicleCategory::where('slug', 'van')->first();
        $busCategory = VehicleCategory::where('slug', 'bus')->first();

        // Get features
        $automaticFeature = VehicleFeature::where('name', 'Automatic')->first();
        $gpsFeature = VehicleFeature::where('name', 'GPS')->first();
        $bluetoothFeature = VehicleFeature::where('name', 'Bluetooth')->first();
        $acFeature = VehicleFeature::where('name', 'Air Conditioning')->first();

        // Assign categories to vehicle types
        $vehicleTypes = VehicleType::all();
        foreach ($vehicleTypes as $vehicleType) {
            if (str_contains(strtolower($vehicleType->name), 'sedan') || str_contains(strtolower($vehicleType->name), 'axio') || str_contains(strtolower($vehicleType->name), 'allion') || str_contains(strtolower($vehicleType->name), 'premio')) {
                $vehicleType->update(['category_id' => $sedanCategory->id]);
            } elseif (str_contains(strtolower($vehicleType->name), 'hiace') || str_contains(strtolower($vehicleType->name), 'urvan') || str_contains(strtolower($vehicleType->name), 'noah')) {
                $vehicleType->update(['category_id' => $vanCategory->id]);
            } elseif (str_contains(strtolower($vehicleType->name), 'bus')) {
                $vehicleType->update(['category_id' => $busCategory->id]);
            } else {
                $vehicleType->update(['category_id' => $sedanCategory->id]); // Default to sedan
            }

            // Assign common features to all vehicle types
            if ($automaticFeature && $gpsFeature && $bluetoothFeature && $acFeature) {
                $vehicleType->features()->sync([
                    $automaticFeature->id,
                    $gpsFeature->id,
                    $bluetoothFeature->id,
                    $acFeature->id
                ]);
            }
        }
    }
}
