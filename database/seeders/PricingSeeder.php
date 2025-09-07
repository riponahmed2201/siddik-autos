<?php

namespace Database\Seeders;

use App\Models\Pricing;
use App\Models\VehicleType;
use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get vehicle types
        $vehicleTypes = VehicleType::all()->keyBy('name');

        // Get destinations
        $destinations = Destination::all()->keyBy('name');

        // Pricing data based on your table
        $pricingData = [
            // Zone 1 destinations (1400 BDT base)
            'Banani' => [1400, 1600, 2000, 2500, 3000, 6500],
            'Gulshan' => [1400, 1600, 2000, 2500, 3000, 6500],
            'Baridhara' => [1400, 1600, 2000, 2500, 3000, 6500],
            'Mohakhali DOHS' => [1400, 1600, 2000, 2500, 3000, 6500],
            'Mohakhali' => [1400, 1600, 2000, 2500, 3000, 6500],
            'Dhaka' => [1400, 1600, 2000, 2500, 3000, 6500],
            'Cantonment' => [1400, 1600, 2000, 2500, 3000, 6500],
            'Bashundhara' => [1400, 1600, 2000, 2500, 3000, 6500],
            'Niketon' => [1400, 1600, 2000, 2500, 3000, 6500],
            'Badda (upto Rampura Bridge)' => [1400, 1600, 2000, 2500, 3000, 6500],
            'Mirpur-6,10,11,12' => [1400, 1600, 2000, 2500, 3000, 6500],
            'Pallabi' => [1400, 1600, 2000, 2500, 3000, 6500],
            'Kocukhet' => [1400, 1600, 2000, 2500, 3000, 6500],
            'Nikunja' => [1400, 1600, 2000, 2500, 3000, 6500],
            'Uttara' => [1400, 1600, 2000, 2500, 3000, 6500],

            // Zone 2 destinations (1500 BDT base)
            'Mirpur-1' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Mirpur-2' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Mirpur-13' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Mirpur-14' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Kollyanpur' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Shayamoli' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Agargaon' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Dhanmondi' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Sobhanbagh' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Lalmatia' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Mohammadpur' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Tejgaon' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Indira Road' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Farmgate' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Hotel Sonargaon' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Banglamotor' => [1500, 1800, 2250, 2600, 3200, 7000],
            'Kathal Bagan' => [1500, 1800, 2250, 2600, 3200, 7000],

            // Zone 3 destinations (1700 BDT base)
            'Jhikatola' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Rayerbazar' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Elephant Road' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Shahbagh' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Paribagh' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Eskaton' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Banasree' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Rampura' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Malibagh' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Shantinagar' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Shahjahanpur' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Siddeshwari' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Moghbazar' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Minto Road' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Karail' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Ramna' => [1700, 2000, 2500, 2800, 3300, 7500],
            'Baily Road' => [1700, 2000, 2500, 2800, 3300, 7500],

            // Zone 4 destinations (1800 BDT base)
            'New Market' => [1800, 2200, 2600, 3000, 3300, 8000],
            'Azimpur' => [1800, 2200, 2600, 3000, 3300, 8000],
            'Dhaka University' => [1800, 2200, 2600, 3000, 3300, 8000],
            'BUET' => [1800, 2200, 2600, 3000, 3300, 8000],
            'Mugda' => [1800, 2200, 2600, 3000, 3300, 8000],
            'Bashabo' => [1800, 2200, 2600, 3000, 3300, 8000],
            'Fakirapool' => [1800, 2200, 2600, 3000, 3300, 8000],
            'Shegunbagicha' => [1800, 2200, 2600, 3000, 3300, 8000],
            'Paltan' => [1800, 2200, 2600, 3000, 3300, 8000],
            'Motijheel' => [1800, 2200, 2600, 3000, 3300, 8000],
            'Sayedabad' => [1800, 2200, 2600, 3000, 3300, 8000],
            'Jatrabari' => [1800, 2200, 2600, 3000, 3300, 8000],
            'Wari' => [1800, 2200, 2600, 3000, 3300, 8000],
            'Lalbagh' => [1800, 2200, 2600, 3000, 3300, 8000],
            'Sadarghat' => [1800, 2200, 2600, 3000, 3300, 8000],

            // Zone 5 destinations (2250 BDT base)
            'Any Place Between Jatrabari to Kacnhpur Bridge' => [2250, 2600, 3000, 3250, 4000, 9500],
            'Any Place Between Staff Quarter Road to Demra' => [2250, 2600, 3000, 3250, 4000, 9500],
            'Savar EPZ' => [2250, 2600, 3000, 3250, 4000, 9500],
        ];

        // Vehicle type order: Sedan/Toyota Axio, Sedan/Toyota Allion/Premio, Toyota Noah/7 Seater, Toyota Hiace/11 Seater, Nissan URVAN/Toyota High Roof Hiace/17 Seater, Tourist Bus/29 Seater
        $vehicleTypeOrder = [
            'Sedan/Toyota Axio',
            'Sedan/Toyota Allion/Premio',
            'Toyota Noah/7 Seater',
            'Toyota Hiace/11 Seater',
            'Nissan URVAN/Toyota High Roof Hiace/17 Seater',
            'Tourist Bus/29 Seater'
        ];

        foreach ($pricingData as $destinationName => $prices) {
            $destination = $destinations->get($destinationName);

            if (!$destination) {
                continue;
            }

            foreach ($vehicleTypeOrder as $index => $vehicleTypeName) {
                $vehicleType = $vehicleTypes->get($vehicleTypeName);

                if (!$vehicleType || !isset($prices[$index])) {
                    continue;
                }

                Pricing::firstOrCreate(
                    [
                        'vehicle_type_id' => $vehicleType->id,
                        'destination_id' => $destination->id,
                        'from_location' => 'Dhaka Airport',
                    ],
                    [
                        'price' => $prices[$index],
                        'is_active' => true,
                    ]
                );
            }
        }
    }
}
