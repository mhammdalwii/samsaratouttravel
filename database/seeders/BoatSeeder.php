<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Boat;
use App\Models\Cabin;


class BoatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $boat1 = Boat::create([
            'name' => 'Superior 01',
            'category' => 'Superior',
            'price' => 2650000,
            'image' => '/images/superior04/superior04.jpg',
            'departure' => json_encode(['Monday-Wednesday', 'Friday-Sunday']),
            'max_people' => 14,
            'description' => 'The Superior boat is a Superior category phinisi. Has 6 cabins for a total of 15 person. Departures on every Monday and Friday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/detail/superior/1.JPG',
                '/images/detail/superior/3.jpg',
                '/images/detail/superior/4.jpg'
            ]),
            'itinerary' => json_encode([
                'Day 1' => [
                    'Pick up from Hotel or Airport, Transfer to Harbor, Kelor Island, Manjarite Island & Kalong Island',
                    'Start 10.00 - 11.00',
                    'Trekking at Kelor Island',
                    'Snorkeling at Manjarite Island',
                    'Sight seeing at Kalong Island'
                ],
                'Day 2' => [
                    'Trekking at Padar Island',
                    'Snorkeling at Pink Beach/Long Beach',
                    'Trekking at Komodo/Rinca Island',
                    'Snorkeling at Takamakassar',
                    'Snorkeling at Manta Point'
                ],
                'Day 3' => [
                    'Snorkeling at Kanawa Island',
                    'Snorkeling at Siaba/Sebayur Island',
                    'Finish 11.00-12.00'
                ]
            ]),
            'includes' => json_encode(['Boat 3D2N', 'Transportation in-out harbour', 'Full meals and drinks', 'Snorkeling kit', 'Life jacket', 'Tour guide and ranger', 'Documentation (Mirrorless, GoPro & Drone)']),
            'excludes' => json_encode(["Flight ticket", "Personal expenses", 'Travel Insurance', 'Hotel (before or after sail)', 'Tipping Guide', 'Komodo National Entrance Fee']),
        ]);

        Cabin::create([
            'boat_id' => $boat1->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/superior/masterCabin.jpg',
            'max_guests' => 3,
            'price_per_guest' => 3500000,
        ]);

        Cabin::create([
            'boat_id' => $boat1->id,
            'type' => 'Private Cabin',
            'image' => '/images/detail/superior/privateCabin.jpg',
            'max_guests' => 2,
            'price_per_guest' => 3300000,
        ]);

        Cabin::create([
            'boat_id' => $boat1->id,
            'type' => 'Sharing Cabin',
            'image' => '/images/detail/superior/sharingCabin.jpg',
            'max_guests' => 4,
            'price_per_guest' => 2650000,
        ]);

        Cabin::create([
            'boat_id' => $boat1->id,
            'type' => 'Extrabed',
            'image' => '/images/detail/superior/sharingCabin.jpg',
            'max_guests' => 1,
            'price_per_guest' => 2500000,
        ]);

        $boat2 = Boat::create([
            'name' => 'Superior 02',
            'category' => 'Superior',
            'price' => 2650000,
            'image' => '/images/superior04/superior04.jpg',
            'departure' => json_encode(['Monday-Wednesday', 'Friday-Sunday']),
            'max_people' => 14,
            'description' => 'The Superior boat is a Superior category phinisi. Has 6 cabins for a total of 15 person. Departures on every Monday and Friday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/detail/superior/1.JPG',
                '/images/detail/superior/3.jpg',
                '/images/detail/superior/4.jpg'
            ]),
            'itinerary' => json_encode([
                'Day 1' => [
                    'Pick up from Hotel or Airport, Transfer to Harbor, Kelor Island, Manjarite Island & Kalong Island',
                    'Start 10.00 - 11.00',
                    'Trekking at Kelor Island',
                    'Snorkeling at Manjarite Island',
                    'Sight seeing at Kalong Island'
                ],
                'Day 2' => [
                    'Trekking at Padar Island',
                    'Snorkeling at Pink Beach/Long Beach',
                    'Trekking at Komodo/Rinca Island',
                    'Snorkeling at Takamakassar',
                    'Snorkeling at Manta Point'
                ],
                'Day 3' => [
                    'Snorkeling at Kanawa Island',
                    'Snorkeling at Siaba/Sebayur Island',
                    'Finish 11.00-12.00'
                ]
            ]),
            'includes' => json_encode(['Boat 3D2N', 'Transportation in-out harbour', 'Full meals and drinks', 'Snorkeling kit', 'Life jacket', 'Tour guide and ranger', 'Documentation (Mirrorless, GoPro & Drone)']),
            'excludes' => json_encode(["Flight ticket", "Personal expenses", 'Travel Insurance', 'Hotel (before or after sail)', 'Tipping Guide', 'Komodo National Entrance Fee']),
        ]);

        Cabin::create([
            'boat_id' => $boat2->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/superior/masterCabin.jpg',
            'max_guests' => 3,
            'price_per_guest' => 3500000,
        ]);
    }
}
