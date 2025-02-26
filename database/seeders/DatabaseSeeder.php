<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Trip;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Trip::create([
            'name' => 'Superior 01 Phinisi Sailing Komodo Tour',
            'category' => 'Superior',
            'location' => 'Labuan Bajo, Indonesia',
            'duration' => 3,
            'language' => 'English',
            'price' => 3500000,
            'description' => 'A luxurious sailing experience with Superior 01.',
            'images' => json_encode([
                '/images/detail/superior/01/1.JPG',
                '/images/detail/superior/01/3.jpg',
                '/images/detail/superior/01/4.jpg'
            ]),
            'itinerary' => json_encode([
                'Day 1' => ['Pick up from Hotel', 'Trekking at Kelor Island', 'Snorkeling at Manjarite'],
                'Day 2' => ['Trekking at Padar Island', 'Snorkeling at Pink Beach'],
                'Day 3' => ['Snorkeling at Kanawa Island']
            ]),
        ]);

        Trip::create([
            'name' => 'Superior 02 Phinisi Sailing Komodo Tour',
            'category' => 'Superior',
            'location' => 'Labuan Bajo, Indonesia',
            'duration' => 3,
            'language' => 'English',
            'price' => 3300000,
            'description' => 'A premium sailing experience with Superior 02.',
            'images' => json_encode([
                '/images/detail/superior/02/1.JPG',
                '/images/detail/superior/02/3.jpg',
                '/images/detail/superior/02/4.jpg'
            ]),
            'itinerary' => json_encode([
                'Day 1' => ['Check-in at the port', 'Trekking at Rinca Island', 'Sunset at Kalong Island'],
                'Day 2' => ['Trekking at Komodo Island', 'Snorkeling at Pink Beach'],
                'Day 3' => ['Snorkeling at Manta Point']
            ]),
        ]);
    }
}
