<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Trip;

class TripSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Trip::create([
            'code' => 'superior_01',
            'name' => 'Superior 01 Phinisi Sailing Komodo Tour',
            'category' => 'Superior',
            'location' => 'Labuan Bajo, Indonesia',
            'duration' => 3,
            'language' => 'English',
            'price' => 3500000,
            'description' => 'Superior 01 is a premium sailing experience in Komodo with luxury facilities.',
            'images' => json_encode([
                '/images/detail/superior/1.JPG',
                '/images/detail/superior/3.jpg',
                '/images/detail/superior/4.jpg'
            ]),
            'itinerary' => json_encode([
                'Day 1' => ['Pick up from Hotel', 'Trekking at Kelor Island', 'Snorkeling at Manjarite'],
                'Day 2' => ['Trekking at Padar Island', 'Snorkeling at Pink Beach'],
                'Day 3' => ['Snorkeling at Kanawa Island']
            ]),
        ]);
    }
}
