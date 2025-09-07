<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $destinations = [
            // Zone 1 - 1400 BDT base price
            ['name' => 'Banani', 'zone' => 'Zone 1', 'description' => 'Upscale commercial area'],
            ['name' => 'Gulshan', 'zone' => 'Zone 1', 'description' => 'Diplomatic and commercial hub'],
            ['name' => 'Baridhara', 'zone' => 'Zone 1', 'description' => 'Residential and diplomatic area'],
            ['name' => 'Mohakhali DOHS', 'zone' => 'Zone 1', 'description' => 'Defense officers housing society'],
            ['name' => 'Mohakhali', 'zone' => 'Zone 1', 'description' => 'Commercial and residential area'],
            ['name' => 'Dhaka', 'zone' => 'Zone 1', 'description' => 'Central Dhaka area'],
            ['name' => 'Cantonment', 'zone' => 'Zone 1', 'description' => 'Military cantonment area'],
            ['name' => 'Bashundhara', 'zone' => 'Zone 1', 'description' => 'Residential and commercial area'],
            ['name' => 'Niketon', 'zone' => 'Zone 1', 'description' => 'Residential area'],
            ['name' => 'Badda (upto Rampura Bridge)', 'zone' => 'Zone 1', 'description' => 'Residential area near Rampura'],
            ['name' => 'Mirpur-6,10,11,12', 'zone' => 'Zone 1', 'description' => 'Mirpur residential blocks'],
            ['name' => 'Pallabi', 'zone' => 'Zone 1', 'description' => 'Residential area in Mirpur'],
            ['name' => 'Kocukhet', 'zone' => 'Zone 1', 'description' => 'Residential area'],
            ['name' => 'Nikunja', 'zone' => 'Zone 1', 'description' => 'Residential area'],
            ['name' => 'Uttara', 'zone' => 'Zone 1', 'description' => 'Northern residential area'],

            // Zone 2 - 1500 BDT base price
            ['name' => 'Mirpur-1', 'zone' => 'Zone 2', 'description' => 'Mirpur residential area'],
            ['name' => 'Mirpur-2', 'zone' => 'Zone 2', 'description' => 'Mirpur residential area'],
            ['name' => 'Mirpur-13', 'zone' => 'Zone 2', 'description' => 'Mirpur residential area'],
            ['name' => 'Mirpur-14', 'zone' => 'Zone 2', 'description' => 'Mirpur residential area'],
            ['name' => 'Kollyanpur', 'zone' => 'Zone 2', 'description' => 'Commercial and residential area'],
            ['name' => 'Shayamoli', 'zone' => 'Zone 2', 'description' => 'Commercial area'],
            ['name' => 'Agargaon', 'zone' => 'Zone 2', 'description' => 'Government offices area'],
            ['name' => 'Dhanmondi', 'zone' => 'Zone 2', 'description' => 'Upscale residential area'],
            ['name' => 'Sobhanbagh', 'zone' => 'Zone 2', 'description' => 'Residential area in Dhanmondi'],
            ['name' => 'Lalmatia', 'zone' => 'Zone 2', 'description' => 'Residential area'],
            ['name' => 'Mohammadpur', 'zone' => 'Zone 2', 'description' => 'Mixed residential and commercial area'],
            ['name' => 'Tejgaon', 'zone' => 'Zone 2', 'description' => 'Commercial and industrial area'],
            ['name' => 'Indira Road', 'zone' => 'Zone 2', 'description' => 'Commercial area'],
            ['name' => 'Farmgate', 'zone' => 'Zone 2', 'description' => 'Commercial and transport hub'],
            ['name' => 'Hotel Sonargaon', 'zone' => 'Zone 2', 'description' => 'Luxury hotel area'],
            ['name' => 'Banglamotor', 'zone' => 'Zone 2', 'description' => 'Commercial area'],
            ['name' => 'Kathal Bagan', 'zone' => 'Zone 2', 'description' => 'Residential area'],

            // Zone 3 - 1700 BDT base price
            ['name' => 'Jhikatola', 'zone' => 'Zone 3', 'description' => 'Residential area'],
            ['name' => 'Rayerbazar', 'zone' => 'Zone 3', 'description' => 'Residential area'],
            ['name' => 'Elephant Road', 'zone' => 'Zone 3', 'description' => 'Commercial area'],
            ['name' => 'Shahbagh', 'zone' => 'Zone 3', 'description' => 'Educational and cultural hub'],
            ['name' => 'Paribagh', 'zone' => 'Zone 3', 'description' => 'Residential area'],
            ['name' => 'Eskaton', 'zone' => 'Zone 3', 'description' => 'Residential area'],
            ['name' => 'Banasree', 'zone' => 'Zone 3', 'description' => 'Residential area'],
            ['name' => 'Rampura', 'zone' => 'Zone 3', 'description' => 'Commercial and residential area'],
            ['name' => 'Malibagh', 'zone' => 'Zone 3', 'description' => 'Commercial area'],
            ['name' => 'Shantinagar', 'zone' => 'Zone 3', 'description' => 'Residential area'],
            ['name' => 'Shahjahanpur', 'zone' => 'Zone 3', 'description' => 'Residential area'],
            ['name' => 'Siddeshwari', 'zone' => 'Zone 3', 'description' => 'Residential area'],
            ['name' => 'Moghbazar', 'zone' => 'Zone 3', 'description' => 'Commercial area'],
            ['name' => 'Minto Road', 'zone' => 'Zone 3', 'description' => 'Commercial area'],
            ['name' => 'Karail', 'zone' => 'Zone 3', 'description' => 'Residential area'],
            ['name' => 'Ramna', 'zone' => 'Zone 3', 'description' => 'Park and residential area'],
            ['name' => 'Baily Road', 'zone' => 'Zone 3', 'description' => 'Commercial area'],

            // Zone 4 - 1800 BDT base price
            ['name' => 'New Market', 'zone' => 'Zone 4', 'description' => 'Major shopping area'],
            ['name' => 'Azimpur', 'zone' => 'Zone 4', 'description' => 'Residential area'],
            ['name' => 'Dhaka University', 'zone' => 'Zone 4', 'description' => 'University area'],
            ['name' => 'BUET', 'zone' => 'Zone 4', 'description' => 'Engineering university area'],
            ['name' => 'Mugda', 'zone' => 'Zone 4', 'description' => 'Residential area'],
            ['name' => 'Bashabo', 'zone' => 'Zone 4', 'description' => 'Residential area'],
            ['name' => 'Fakirapool', 'zone' => 'Zone 4', 'description' => 'Commercial area'],
            ['name' => 'Shegunbagicha', 'zone' => 'Zone 4', 'description' => 'Residential area'],
            ['name' => 'Paltan', 'zone' => 'Zone 4', 'description' => 'Commercial and transport hub'],
            ['name' => 'Motijheel', 'zone' => 'Zone 4', 'description' => 'Financial district'],
            ['name' => 'Sayedabad', 'zone' => 'Zone 4', 'description' => 'Commercial area'],
            ['name' => 'Jatrabari', 'zone' => 'Zone 4', 'description' => 'Commercial area'],
            ['name' => 'Wari', 'zone' => 'Zone 4', 'description' => 'Residential area'],
            ['name' => 'Lalbagh', 'zone' => 'Zone 4', 'description' => 'Historical area'],
            ['name' => 'Sadarghat', 'zone' => 'Zone 4', 'description' => 'River port area'],

            // Zone 5 - 2250 BDT base price
            ['name' => 'Any Place Between Jatrabari to Kacnhpur Bridge', 'zone' => 'Zone 5', 'description' => 'Extended area beyond Jatrabari'],
            ['name' => 'Any Place Between Staff Quarter Road to Demra', 'zone' => 'Zone 5', 'description' => 'Extended area towards Demra'],
            ['name' => 'Savar EPZ', 'zone' => 'Zone 5', 'description' => 'Export processing zone'],
        ];

        foreach ($destinations as $destination) {
            Destination::firstOrCreate(
                ['slug' => Str::slug($destination['name'])],
                [
                    'name' => $destination['name'],
                    'description' => $destination['description'],
                    'zone' => $destination['zone'],
                    'is_active' => true,
                ]
            );
        }
    }
}
