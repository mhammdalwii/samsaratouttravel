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
            'image' => '/images/amore/amore1.jpg',
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
            'max_guests' => '2-4',
            'price_per_guest' => 3500000,
        ]);

        Cabin::create([
            'boat_id' => $boat1->id,
            'type' => 'Private Cabin',
            'image' => '/images/detail/superior/privateCabin.jpg',
            'max_guests' => '2',
            'price_per_guest' => 3300000,
        ]);

        Cabin::create([
            'boat_id' => $boat1->id,
            'type' => 'Sharing Cabin',
            'image' => '/images/detail/superior/sharingCabin.jpg',
            'max_guests' => '4',
            'price_per_guest' => 2650000,
        ]);

        Cabin::create([
            'boat_id' => $boat1->id,
            'type' => 'Extrabed',
            'image' => '/images/detail/superior/sharingCabin.jpg',
            'max_guests' => '1',
            'price_per_guest' => 2500000,
        ]);

        $boat2 = Boat::create([
            'name' => 'Superior 02',
            'category' => 'Superior',
            'price' => 2650000,
            'image' => '/images/detail/superior02/1.JPG',
            'departure' => json_encode(['Monday-Wednesday', 'Friday-Sunday']),
            'max_people' => 14,
            'description' => 'The Superior boat is a Superior category phinisi. Has 6 cabins for a total of 15 person. Departures on every Monday and Friday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/detail/superior02/1.JPG',
                '/images/detail/superior02/2.jpg',
                '/images/detail/superior02/3.JPG',
                '/images/detail/superior02/4.JPG'
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
            'type' => '2 Master Cabin',
            'image' => '/images/detail/superior/masterCabin.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 4250000,
        ]);

        Cabin::create([
            'boat_id' => $boat2->id,
            'type' => 'Private Cabin Baloncy',
            'image' => '/images/detail/superior02/5.jpg',
            'max_guests' => '2',
            'price_per_guest' => 3650000,
        ]);

        Cabin::create([
            'boat_id' => $boat2->id,
            'type' => 'Sharing Cabin Sea View',
            'image' => '/images/detail/superior02/6.jpg',
            'max_guests' => '4',
            'price_per_guest' => 3150000,
        ]);

        Cabin::create([
            'boat_id' => $boat2->id,
            'type' => 'Sharing Cabin Baloncy',
            'image' => '/images/detail/superior02/7.jpg',
            'max_guests' => '4',
            'price_per_guest' => 2650000,
        ]);

        Cabin::create([
            'boat_id' => $boat2->id,
            'type' => 'Extrabed',
            'image' => '/images/detail/superior02/8.jpg',
            'max_guests' => '1',
            'price_per_guest' => 2500000,
        ]);

        $boat3 = Boat::create([
            'name' => 'Superior 03',
            'category' => 'Superior',
            'price' => 2800000,
            'image' => '/images/superior03/superior03.jpg',
            'departure' => json_encode(['Friday-Sunday']),
            'max_people' => 20,
            'description' => 'The Superior boat is a Superior category phinisi. Has 5 cabins for a total of 15 person. Departures on every Monday and Friday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/detail/superior03/1.jpg',
                '/images/detail/superior03/2.jpg',
                '/images/detail/superior03/3.jpg',
                '/images/detail/superior03/4.jpg',
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
            'boat_id' => $boat3->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/superior03/5.jpg',
            'max_guests' => '2-4',
            'price_per_guest' => 4400000,
        ]);
        Cabin::create([
            'boat_id' => $boat3->id,
            'type' => 'Full Ocean Cabin',
            'image' => '/images/detail/superior03/6.jpg',
            'max_guests' => '2-4',
            'price_per_guest' => 3300000,
        ]);
        Cabin::create([
            'boat_id' => $boat3->id,
            'type' => '3 Sharing Cabin',
            'image' => '/images/detail/superior03/7.jpg',
            'max_guests' => '4',
            'price_per_guest' => 2800000,
        ]);

        $boat4 = Boat::create([
            'name' => 'Superior 04',
            'category' => 'Superior',
            'price' => 2800000,
            'image' => '/images/superior04/superior04.JPG',
            'departure' => json_encode(['Friday-Sunday']),
            'max_people' => 25,
            'description' => 'The Superior boat is a Superior category phinisi. Has 7 cabins for a total of 15 person. Departures on every Monday and Friday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/detail/superior04/1.JPG',
                '/images/detail/superior04/2.jpg',
                '/images/detail/superior04/3.jpg',
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
            'boat_id' => $boat4->id,
            'type' => 'Royal Master Cabin',
            'image' => '/images/detail/superior04/4.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 4800000,
        ]);
        Cabin::create([
            'boat_id' => $boat4->id,
            'type' => '2 Master Ocean Cabin',
            'image' => '/images/detail/superior04/5.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 4300000,
        ]);
        Cabin::create([
            'boat_id' => $boat4->id,
            'type' => '4 Sharing Cabin',
            'image' => '/images/detail/superior04/6.jpg',
            'max_guests' => '4',
            'price_per_guest' => 2800000,
        ]);

        $boat5 = Boat::create([
            'name' => 'Superior 05',
            'category' => 'Superior',
            'price' => 2800000,
            'image' => '/images/amore/amore05.jpg',
            'departure' => json_encode(['Friday-Sunday']),
            'max_people' => 25,
            'description' => 'The Superior boat is a Superior category phinisi. Has 7 cabins for a total of 15 person. Departures on every Monday and Friday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/detail/superior05/1.jpg',
                '/images/detail/superior05/2.jpg',
                '/images/detail/superior05/3.jpg',
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
            'boat_id' => $boat5->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/superior05/4.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 4200000,
        ]);
        Cabin::create([
            'boat_id' => $boat5->id,
            'type' => '2 Deluxe Cabin',
            'image' => '/images/detail/superior05/5.jpg',
            'max_guests' => '2',
            'price_per_guest' => 3800000,
        ]);
        Cabin::create([
            'boat_id' => $boat5->id,
            'type' => '2 Private Cabin',
            'image' => '/images/detail/superior05/6.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 3300000,
        ]);
        Cabin::create([
            'boat_id' => $boat5->id,
            'type' => 'Sharing Cabin',
            'image' => '/images/detail/superior05/7.jpg',
            'max_guests' => '5',
            'price_per_guest' => 2800000,
        ]);
        $boat6 = Boat::create([
            'name' => 'Superior 06',
            'category' => 'Superior',
            'price' => 2800000,
            'image' => '/images/amore/amore06.jpg',
            'departure' => json_encode(['Friday-Sunday']),
            'max_people' => 15,
            'description' => 'The Superior boat is a Superior category phinisi. Has 6 cabins for a total of 15 person. Departures on every Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/detail/superior06/1.jpg',
                '/images/detail/superior06/2.jpg',
                '/images/detail/superior06/3.jpg',
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
            'boat_id' => $boat6->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/superior06/4.jpg',
            'max_guests' => '2',
            'price_per_guest' => 4200000,
        ]);
        Cabin::create([
            'boat_id' => $boat6->id,
            'type' => '2 Deluxe Cabin',
            'image' => '/images/detail/superior06/5.jpg',
            'max_guests' => '2',
            'price_per_guest' => 4200000,
        ]);
        Cabin::create([
            'boat_id' => $boat6->id,
            'type' => '2 Private Cabin',
            'image' => '/images/detail/superior06/6.jpg',
            'max_guests' => '2/3',
            'price_per_guest' => 3300000,
        ]);
        Cabin::create([
            'boat_id' => $boat6->id,
            'type' => 'Sharing Cabin',
            'image' => '/images/detail/superior06/7.jpg',
            'max_guests' => '4',
            'price_per_guest' => 2800000,
        ]);
        $boat7 = Boat::create([
            'name' => 'Superior 07',
            'category' => 'Superior',
            'price' => 2850000,
            'image' => '/images/amore/amore07.JPG',
            'departure' => json_encode(['Monday-Wednesday', 'Friday-Sunday']),
            'max_people' => 14,
            'description' => 'The Superior boat is a Superior category phinisi. Has 5 cabins for a total of 14 person. Departures on every Monday-Wednesday Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/amore/amore07.JPG',
                '/images/detail/superior07/1.JPG',
                '/images/detail/superior07/2.JPG',
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
            'boat_id' => $boat7->id,
            'type' => 'Full Ocean Cabin',
            'image' => '/images/detail/superior07/3.JPG',
            'max_guests' => '2',
            'price_per_guest' => 3850000,
        ]);
        Cabin::create([
            'boat_id' => $boat7->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/superior07/4.JPG',
            'max_guests' => '2',
            'price_per_guest' => 3650000,
        ]);
        Cabin::create([
            'boat_id' => $boat7->id,
            'type' => 'Private Cabin',
            'image' => '/images/detail/superior07/5.JPG',
            'max_guests' => '2',
            'price_per_guest' => 3350000,
        ]);
        Cabin::create([
            'boat_id' => $boat7->id,
            'type' => '2 Sharing Cabin',
            'image' => '/images/detail/superior07/6.JPG',
            'max_guests' => '4',
            'price_per_guest' => 2850000,
        ]);
        $boat8 = Boat::create([
            'name' => 'Superior 08',
            'category' => 'Superior',
            'price' => 2950000,
            'image' => '/images/amore/amore08.jpg',
            'departure' => json_encode(['Monday-Wednesday', 'Friday-Sunday']),
            'max_people' => 16,
            'description' => 'The Superior boat is a Superior category phinisi. Has 5 cabins for a total of 16 person. Departures on every Monday-Wednesday Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/amore/amore08.jpg',
                '/images/detail/superior08/1.jpg',
                '/images/detail/superior08/2.jpg',
                '/images/detail/superior08/3.jpg',
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
            'boat_id' => $boat8->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/superior08/4.jpg',
            'max_guests' => '2',
            'price_per_guest' => 3850000,
        ]);
        Cabin::create([
            'boat_id' => $boat8->id,
            'type' => '2 Private Cabin',
            'image' => '/images/detail/superior08/5.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 3450000,
        ]);
        Cabin::create([
            'boat_id' => $boat8->id,
            'type' => 'Sharing Cabin 1',
            'image' => '/images/detail/superior08/5.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 3050000,
        ]);
        Cabin::create([
            'boat_id' => $boat8->id,
            'type' => ' Sharing Cabin 2',
            'image' => '/images/detail/superior08/6.JPG',
            'max_guests' => '6',
            'price_per_guest' => 2950000,
        ]);
        Cabin::create([
            'boat_id' => $boat8->id,
            'type' => ' Sharing Cabin 2',
            'image' => '/images/detail/superior08/6.JPG',
            'max_guests' => '6',
            'price_per_guest' => 2950000,
        ]);
        $boat9 = Boat::create([
            'name' => 'Superior 09',
            'category' => 'Superior',
            'price' => 3250000,
            'image' => '/images/amore/amore09.PNG',
            'departure' => json_encode(['Friday-Sunday']),
            'max_people' => 14,
            'description' => 'The Superior boat is a Superior category phinisi. Has 5 cabins for a total of 14 person. Departures on every Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/amore/amore09.jpg',
                '/images/detail/superior09/1.jpeg',
                '/images/detail/superior09/2.PNG',
                '/images/detail/superior09/6.PNG',
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
            'boat_id' => $boat9->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/superior09/3.PNG',
            'max_guests' => '2',
            'price_per_guest' => 4250000,
        ]);
        Cabin::create([
            'boat_id' => $boat9->id,
            'type' => '2 Private Cabin',
            'image' => '/images/detail/superior09/4.PNG',
            'max_guests' => '2-3',
            'price_per_guest' => 3750000,
        ]);
        Cabin::create([
            'boat_id' => $boat9->id,
            'type' => '2 Sharing Cabin',
            'image' => '/images/detail/superior09/5.PNG',
            'max_guests' => '4',
            'price_per_guest' => 3250000,
        ]);
        $boat10 = Boat::create([
            'name' => 'Superior 10',
            'category' => 'Superior',
            'price' => 3100000,
            'image' => '/images/amore/amore10.png',
            'departure' => json_encode(['Friday-Sunday']),
            'max_people' => 10,
            'description' => 'The Superior boat is a Superior category phinisi. Has 5 cabins for a total of 10 person. Departures on every Monday-Wednesday Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/amore/amore10.png',
                '/images/detail/superior10/1.jpg',
                '/images/detail/superior10/2.jpeg',
                '/images/detail/superior10/3.jpg',
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
            'boat_id' => $boat10->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/superior10/4.jpg',
            'max_guests' => '2',
            'price_per_guest' => 3900000,
        ]);
        Cabin::create([
            'boat_id' => $boat10->id,
            'type' => 'Private Cabin',
            'image' => '/images/detail/superior10/5.jpg',
            'max_guests' => '2',
            'price_per_guest' => 3550000,
        ]);
        Cabin::create([
            'boat_id' => $boat10->id,
            'type' => '2 Capsule Cabin',
            'image' => '/images/detail/superior10/6.jpg',
            'max_guests' => '2',
            'price_per_guest' => 3300000,
        ]);
        Cabin::create([
            'boat_id' => $boat10->id,
            'type' => 'Sharing Cabin',
            'image' => '/images/detail/superior10/7.jpg',
            'max_guests' => '4',
            'price_per_guest' => 3300000,
        ]);

        $boat11 = Boat::create([
            'name' => 'Superior 11',
            'category' => 'Superior',
            'price' => 3000000,
            'image' => '/images/amore/amore11.jpg',
            'departure' => json_encode(['Monday-Wednesday', 'Friday-Sunday']),
            'max_people' => 14,
            'description' => 'The Superior boat is a Superior category phinisi. Has 4 cabins for a total of 10 person. Departures on every Monday-Wednesday Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/amore/amore11.jpg',
                '/images/detail/superior11/1.png',
                '/images/detail/superior11/2.png',
                '/images/detail/superior11/3.jpg',
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
            'boat_id' => $boat11->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/superior11/4.png',
            'max_guests' => '2-3',
            'price_per_guest' => 4350000,
        ]);
        Cabin::create([
            'boat_id' => $boat11->id,
            'type' => 'Family Cabin',
            'image' => '/images/detail/superior11/5.png',
            'max_guests' => '2-3',
            'price_per_guest' => 3350000,
        ]);
        Cabin::create([
            'boat_id' => $boat11->id,
            'type' => 'Sharing Cabin',
            'image' => '/images/detail/superior11/6.png',
            'max_guests' => '6',
            'price_per_guest' => 3000000,
        ]);
        $boat12 = Boat::create([
            'name' => 'Superior 12',
            'category' => 'Superior',
            'price' => 2500000,
            'image' => '/images/detail/superior12/1.png',
            'departure' => json_encode(['Monday-Wednesday']),
            'max_people' => 14,
            'description' => 'The Superior boat is a Superior category phinisi. Has 4 cabins for a total of 14 person. Departures on every Monday-Wednesday Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/detail/superior12/1.png',
                '/images/detail/superior12/2.jpg',
                '/images/detail/superior12/3.jpg',
                '/images/detail/superior12/4.jpeg',
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
            'boat_id' => $boat12->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/superior12/5.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 4500000,
        ]);
        Cabin::create([
            'boat_id' => $boat12->id,
            'type' => 'Private Cabin',
            'image' => '/images/detail/superior12/5.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 4000000,
        ]);
        Cabin::create([
            'boat_id' => $boat12->id,
            'type' => 'Private Cabin',
            'image' => '/images/detail/superior12/6.JPEG',
            'max_guests' => '2-3',
            'price_per_guest' => 4000000,
        ]);
        Cabin::create([
            'boat_id' => $boat12->id,
            'type' => 'Sharing Cabin 1',
            'image' => '/images/detail/superior12/7.JPEG',
            'max_guests' => '4',
            'price_per_guest' => 3500000,
        ]);
        Cabin::create([
            'boat_id' => $boat12->id,
            'type' => 'Sharing Cabin 2',
            'image' => '/images/detail/superior12/8.jpg',
            'max_guests' => '4',
            'price_per_guest' => 3250000,
        ]);
        $boat13 = Boat::create([
            'name' => 'Superior 13',
            'category' => 'Superior',
            'price' => 2600000,
            'image' => '/images/amore/amore13.jpg',
            'departure' => json_encode(['Monday-Wednesday', 'Friday - Sunday']),
            'max_people' => 12,
            'description' => 'The Superior boat is a Superior category phinisi. Has 5 cabins for a total of 12 person. Departures on every Monday-Wednesday Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/amore/amore13.jpg',
                '/images/detail/superior12/2.jpg',
                '/images/detail/superior12/3.jpg',
                '/images/detail/superior12/4.jpeg',
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
            'boat_id' => $boat13->id,
            'type' => 'Sharing Cabin 2',
            'image' => '/images/detail/superior12/8.jpg',
            'max_guests' => '4',
            'price_per_guest' => 3250000,
        ]);
        $boat14 = Boat::create([
            'name' => 'Deluxe 01',
            'category' => 'Deluxe',
            'price' => 2750000,
            'image' => '/images/deluxe/deluxe01.jpeg',
            'departure' => json_encode(['Monday-Wednesday', 'Friday - Sunday']),
            'max_people' => 16,
            'description' => 'The Superior boat is a Superior category phinisi. Has 6 cabins for a total of 16 person. Departures on every Monday-Wednesday Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/deluxe/deluxe01.jpeg',
                '/images/detail/deluxe01/2.jpeg',
                '/images/detail/deluxe01/3.jpeg',
                '/images/detail/deluxe01/4.jpeg',
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
            'boat_id' => $boat14->id,
            'type' => '2 Master Cabin',
            'image' => '/images/detail/deluxe01/5.jpeg',
            'max_guests' => '2-3',
            'price_per_guest' => 4350000,
        ]);
        Cabin::create([
            'boat_id' => $boat14->id,
            'type' => '2 Private Cabin',
            'image' => '/images/detail/deluxe01/6.jpg',
            'max_guests' => '2',
            'price_per_guest' => 3850000,
        ]);
        Cabin::create([
            'boat_id' => $boat14->id,
            'type' => '2 Private Cabin',
            'image' => '/images/detail/deluxe01/6.jpg',
            'max_guests' => '2',
            'price_per_guest' => 3850000,
        ]);
        $boat15 = Boat::create([
            'name' => 'Deluxe 02',
            'category' => 'Deluxe',
            'price' => 3600000,
            'image' => '/images/deluxe/deluxe02.png',
            'departure' => json_encode(['Friday - Sunday']),
            'max_people' => 20,
            'description' => 'The Superior boat is a Superior category phinisi. Has 6 cabins for a total of 20 person. Departures on every Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/deluxe/deluxe02.png',
                '/images/detail/deluxe02/2.JPG',
                '/images/detail/deluxe02/3.jpg',
                '/images/detail/deluxe02/4.jpg',
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
            'boat_id' => $boat15->id,
            'type' => 'Honeymoon Cabin',
            'image' => '/images/detail/deluxe02/5.jpg',
            'max_guests' => '2',
            'price_per_guest' => 4450000,
        ]);
        Cabin::create([
            'boat_id' => $boat15->id,
            'type' => '2 Private Cabin',
            'image' => '/images/detail/deluxe02/6.jpg',
            'max_guests' => '2',
            'price_per_guest' => 4200000,
        ]);
        Cabin::create([
            'boat_id' => $boat15->id,
            'type' => '3 Sharing Cabin',
            'image' => '/images/detail/deluxe02/7.jpg',
            'max_guests' => '4-6',
            'price_per_guest' => 3600000,
        ]);
        $boat16 = Boat::create([
            'name' => 'Deluxe 03',
            'category' => 'Deluxe',
            'price' => 3900000,
            'image' => '/images/deluxe/deluxe03.jpeg',
            'departure' => json_encode(['Friday - Sunday']),
            'max_people' => 12,
            'description' => 'The Superior boat is a Superior category phinisi. Has 6 cabins for a total of 20 person. Departures on every Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/deluxe/deluxe03.jpeg',
                '/images/detail/deluxe03/2.JPG',
                '/images/detail/deluxe03/3.JPG',
                '/images/detail/deluxe03/4.JPG',
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
            'boat_id' => $boat16->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/deluxe03/5.JPG',
            'max_guests' => '2-4',
            'price_per_guest' => 5500000,
        ]);
        Cabin::create([
            'boat_id' => $boat16->id,
            'type' => '2 Private Cabin',
            'image' => '/images/detail/deluxe03/6.JPG',
            'max_guests' => '2',
            'price_per_guest' => 4300000,
        ]);
        Cabin::create([
            'boat_id' => $boat16->id,
            'type' => 'Sharing Cabin',
            'image' => '/images/detail/deluxe03/7.JPG',
            'max_guests' => '4',
            'price_per_guest' => 3900000,
        ]);
        $boat17 = Boat::create([
            'name' => 'Deluxe 04',
            'category' => 'Deluxe',
            'price' => 3550000,
            'image' => '/images/deluxe/deluxe04.jpg',
            'departure' => json_encode(['Monday - Wednesday', 'Friday - Sunday']),
            'max_people' => 17,
            'description' => 'The Superior boat is a Superior category phinisi. Has 7 cabins for a total of 17 person. Departures on every Monday - Wednesday & Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/deluxe/deluxe04.jpg',
                '/images/detail/deluxe04/1.jpg',
                '/images/detail/deluxe04/2.jpg',
                '/images/detail/deluxe04/3.jpg',
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
            'boat_id' => $boat17->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/deluxe04/4.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 5850000,
        ]);
        Cabin::create([
            'boat_id' => $boat17->id,
            'type' => 'Deluxe Cabin',
            'image' => '/images/detail/deluxe04/5.jpg',
            'max_guests' => '2',
            'price_per_guest' => 4250000,
        ]);
        Cabin::create([
            'boat_id' => $boat17->id,
            'type' => 'Deluxe Cabin',
            'image' => '/images/detail/deluxe04/5.jpg',
            'max_guests' => '2',
            'price_per_guest' => 4250000,
        ]);
        Cabin::create([
            'boat_id' => $boat17->id,
            'type' => 'Sharing Cabin',
            'image' => '/images/detail/deluxe04/6.jpg',
            'max_guests' => '4',
            'price_per_guest' => 3550000,
        ]);
        $boat18 = Boat::create([
            'name' => 'Deluxe 05',
            'category' => 'Deluxe',
            'price' => 4200000,
            'image' => '/images/deluxe/deluxe05.jpg',
            'departure' => json_encode(['Monday - Wednesday', 'Friday - Sunday']),
            'max_people' => 11,
            'description' => 'The Superior boat is a Superior category phinisi. Has 5 cabins for a total of 11 person. Departures on every Monday - Wednesday & Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/deluxe/deluxe05.jpg',
                '/images/detail/deluxe05/1.JPG',
                '/images/detail/deluxe05/2.JPG',
                '/images/detail/deluxe05/3.jpg',
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
            'boat_id' => $boat18->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/deluxe05/4.JPG',
            'max_guests' => '2-3',
            'price_per_guest' => 6250000,
        ]);
        Cabin::create([
            'boat_id' => $boat18->id,
            'type' => 'Deluxe Cabin I',
            'image' => '/images/detail/deluxe05/5.JPG',
            'max_guests' => '2',
            'price_per_guest' => 5000000,
        ]);
        Cabin::create([
            'boat_id' => $boat18->id,
            'type' => 'Deluxe Cabin II',
            'image' => '/images/detail/deluxe05/6.JPG',
            'max_guests' => '2',
            'price_per_guest' => 4950000,
        ]);
        Cabin::create([
            'boat_id' => $boat18->id,
            'type' => '2 Private Cabin',
            'image' => '/images/detail/deluxe05/7.JPG',
            'max_guests' => '2',
            'price_per_guest' => 4200000,
        ]);
        $boat19 = Boat::create([
            'name' => 'Deluxe 06',
            'category' => 'Deluxe',
            'price' => 4300000,
            'image' => '/images/deluxe/deluxe06.jpg',
            'departure' => json_encode(['Friday - Sunday']),
            'max_people' => 14,
            'description' => 'The Superior boat is a Superior category phinisi. Has 6 cabins for a total of 14 person. Departures on every Monday - Wednesday & Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/deluxe/deluxe06.jpg',
                '/images/detail/deluxe06/1.jpg',
                '/images/detail/deluxe06/2.jpg',
                '/images/detail/deluxe06/3.jpg',
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
            'boat_id' => $boat19->id,
            'type' => '2 Signature Cabin',
            'image' => '/images/detail/deluxe06/4.jpg',
            'max_guests' => '2',
            'price_per_guest' => 4600000,
        ]);
        Cabin::create([
            'boat_id' => $boat19->id,
            'type' => '4 Deluxe Cabin',
            'image' => '/images/detail/deluxe06/5.jpg',
            'max_guests' => '2',
            'price_per_guest' => 4300000,
        ]);
        $boat20 = Boat::create([
            'name' => 'Deluxe 07',
            'category' => 'Deluxe',
            'price' => 4000000,
            'image' => '/images/deluxe/deluxe07.jpg',
            'departure' => json_encode(['Friday - Sunday']),
            'max_people' => 14,
            'description' => 'The Superior boat is a Superior category phinisi. Has 6 cabins for a total of 13 person. Departures on every Monday - Wednesday & Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/deluxe/deluxe07.jpg',
                '/images/detail/deluxe07/1.jpg',
                '/images/detail/deluxe07/2.jpg',
                '/images/detail/deluxe07/3.jpg',
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
            'boat_id' => $boat20->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/deluxe07/4.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 5700000,
        ]);
        Cabin::create([
            'boat_id' => $boat20->id,
            'type' => '2 Full Ocean Cabin',
            'image' => '/images/detail/deluxe07/5.jpg',
            'max_guests' => '2',
            'price_per_guest' => 5000000,
        ]);
        Cabin::create([
            'boat_id' => $boat20->id,
            'type' => '3 Superior Cabin',
            'image' => '/images/detail/deluxe07/6.jpg',
            'max_guests' => '2',
            'price_per_guest' => 4000000,
        ]);
        $boat21 = Boat::create([
            'name' => 'Deluxe 08',
            'category' => 'Deluxe',
            'price' => 4600000,
            'image' => '/images/deluxe/deluxe08.JPG',
            'departure' => json_encode(['Friday - Sunday']),
            'max_people' => 14,
            'description' => 'The Superior boat is a Superior category phinisi. Has 6 cabins for a total of 14 person. Departures on every Monday - Wednesday & Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/deluxe/deluxe08.JPG',
                '/images/detail/deluxe08/1.jpg',
                '/images/detail/deluxe08/2.jpg',
                '/images/detail/deluxe08/3.jpg',
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
            'boat_id' => $boat21->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/deluxe08/4.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 5700000,
        ]);
        Cabin::create([
            'boat_id' => $boat21->id,
            'type' => 'Deluxe Cabin',
            'image' => '/images/detail/deluxe08/5.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 5400000,
        ]);
        Cabin::create([
            'boat_id' => $boat21->id,
            'type' => 'Full Ocean Cabin',
            'image' => '/images/detail/deluxe08/6.jpg',
            'max_guests' => '2',
            'price_per_guest' => 5000000,
        ]);
        Cabin::create([
            'boat_id' => $boat21->id,
            'type' => '3 Superior Cabin',
            'image' => '/images/detail/deluxe08/7.jpg',
            'max_guests' => '2',
            'price_per_guest' => 4600000,
        ]);
        $boat22 = Boat::create([
            'name' => 'Deluxe 09',
            'category' => 'Deluxe',
            'price' => 3750000,
            'image' => '/images/deluxe/deluxe09.jpg',
            'departure' => json_encode(['Monday - Wednesday', 'Friday - Sunday']),
            'max_people' => 25,
            'description' => 'The Superior boat is a Superior category phinisi. Has 7 cabins for a total of 25 person. Departures on every Monday - Wednesday & Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/deluxe/deluxe09.jpg',
                '/images/detail/deluxe09/1.JPG',
                '/images/detail/deluxe09/2.JPG',
                '/images/detail/deluxe08/3.JPG',
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
            'boat_id' => $boat22->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/deluxe09/4.JPG',
            'max_guests' => '2-3',
            'price_per_guest' => 7000000,
        ]);
        Cabin::create([
            'boat_id' => $boat22->id,
            'type' => '2 Deluxe Cabin',
            'image' => '/images/detail/deluxe09/4.JPG',
            'max_guests' => '2-3',
            'price_per_guest' => 7000000,
        ]);
        $boat23 = Boat::create([
            'name' => 'Deluxe 11',
            'category' => 'Deluxe',
            'price' => 4500000,
            'image' => '/images/deluxe/deluxe11.jpeg',
            'departure' => json_encode(['Monday - Wednesday', 'Friday - Sunday']),
            'max_people' => 13,
            'description' => 'The Superior boat is a Superior category phinisi. Has 7 cabins for a total of 25 person. Departures on every Monday - Wednesday & Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/deluxe/deluxe11.jpeg',
                '/images/detail/deluxe11/3.jpeg',
                '/images/detail/deluxe11/4.jpeg',
                '/images/detail/deluxe11/5.jpeg',
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
            'boat_id' => $boat23->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/deluxe11/1.jpeg',
            'max_guests' => '2',
            'price_per_guest' => 6500000,
        ]);
        Cabin::create([
            'boat_id' => $boat23->id,
            'type' => 'Suite Cabin',
            'image' => '/images/detail/deluxe11/2.jpeg',
            'max_guests' => '2-4',
            'price_per_guest' => 6000000,
        ]);
        Cabin::create([
            'boat_id' => $boat23->id,
            'type' => 'Deluxe Cabin',
            'image' => '/images/detail/deluxe11/6.jpeg',
            'max_guests' => '2-3',
            'price_per_guest' => 5500000,
        ]);
        Cabin::create([
            'boat_id' => $boat23->id,
            'type' => 'Superior Cabin',
            'image' => '/images/detail/deluxe11/7.jpeg',
            'max_guests' => '2',
            'price_per_guest' => 5000000,
        ]);
        Cabin::create([
            'boat_id' => $boat23->id,
            'type' => 'Studio Cabin',
            'image' => '/images/detail/deluxe11/8.jpeg',
            'max_guests' => '2',
            'price_per_guest' => 4500000,
        ]);
        $boat24 = Boat::create([
            'name' => 'Deluxe 12',
            'category' => 'Deluxe',
            'price' => 6000000,
            'image' => '/images/deluxe/deluxe12.jpg',
            'departure' => json_encode(['Friday - Sunday']),
            'max_people' => 14,
            'description' => 'The Superior boat is a Superior category phinisi. Has 7 cabins for a total of 25 person. Departures on every Monday - Wednesday & Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/deluxe/deluxe12.jpg',
                '/images/detail/deluxe12/1.jpg',
                '/images/detail/deluxe12/2.jpg',
                '/images/detail/deluxe12/3.jpg',
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
            'boat_id' => $boat24->id,
            'type' => 'VIP Cabin',
            'image' => '/images/detail/deluxe12/8.jpeg',
            'max_guests' => '2-4',
            'price_per_guest' => 8000000,
        ]);
        Cabin::create([
            'boat_id' => $boat24->id,
            'type' => 'Deluxe Rangko Cabin',
            'image' => '/images/detail/deluxe12/8.jpeg',
            'max_guests' => '2-4',
            'price_per_guest' => 7000000,
        ]);
        Cabin::create([
            'boat_id' => $boat24->id,
            'type' => '2 Superior Cabin',
            'image' => '/images/detail/deluxe12/8.jpeg',
            'max_guests' => '2',
            'price_per_guest' => 6000000,
        ]);

        $boat25 = Boat::create([
            'name' => 'Luxury 01',
            'category' => 'Luxury',
            'price' => 4950000,
            'image' => '/images/luxury/luxury01.jpg',
            'departure' => json_encode(['Monday - Wednesday', 'Friday - Sunday']),
            'max_people' => 14,
            'description' => 'The Superior boat is a Superior category phinisi. Has 5 cabins for a total of 25 person. Departures on every Monday - Wednesday & Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/detail/luxury01/2.jpg',
                '/images/detail/luxury01/1.jpg',
                '/images/detail/luxury01/3.jpg',
                '/images/detail/luxury01/4.jpg',
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
            'boat_id' => $boat25->id,
            'type' => 'Master Cabin',
            'image' => '/images/detail/luxury01/5.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 8250000,
        ]);
        Cabin::create([
            'boat_id' => $boat25->id,
            'type' => '2 Deluxe Cabin',
            'image' => '/images/detail/luxury01/6.jpg',
            'max_guests' => '2',
            'price_per_guest' => 6950000,
        ]);
        Cabin::create([
            'boat_id' => $boat25->id,
            'type' => '2 Sharing Cabin',
            'image' => '/images/detail/luxury01/7.jpg',
            'max_guests' => '3-4',
            'price_per_guest' => 4950000,
        ]);
        $boat26 = Boat::create([
            'name' => 'Luxury 02',
            'category' => 'Luxury',
            'price' => 5250000,
            'image' => '/images/luxury/luxury02.jpg',
            'departure' => json_encode(['Friday - Sunday']),
            'max_people' => 22,
            'description' => 'The Superior boat is a Superior category phinisi. Has 8 cabins for a total of 25 person. Departures on every Monday - Wednesday & Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/luxury/luxury02.jpg',
                '/images/detail/luxury02/2.jpg',
                '/images/detail/luxury02/3.jpg',
                '/images/detail/luxury02/4.jpg',
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
            'boat_id' => $boat26->id,
            'type' => 'Santulum Cabin I',
            'image' => '/images/detail/luxury02/5.jpg',
            'max_guests' => '2-4',
            'price_per_guest' => 10500000,
        ]);
        Cabin::create([
            'boat_id' => $boat26->id,
            'type' => 'Santulum Cabin II',
            'image' => '/images/detail/luxury02/6.jpg',
            'max_guests' => '2',
            'price_per_guest' => 10000000,
        ]);
        Cabin::create([
            'boat_id' => $boat26->id,
            'type' => '2 Grandis Cabin',
            'image' => '/images/detail/luxury02/7.jpg',
            'max_guests' => '2',
            'price_per_guest' => 7750000,
        ]);
        Cabin::create([
            'boat_id' => $boat26->id,
            'type' => '2 Cafasa Cabin',
            'image' => '/images/detail/luxury02/8.jpeg',
            'max_guests' => '2',
            'price_per_guest' => 7250000,
        ]);
        Cabin::create([
            'boat_id' => $boat26->id,
            'type' => '2 Sharing Cabin',
            'image' => '/images/detail/luxury02/9.jpg',
            'max_guests' => '2',
            'price_per_guest' => 5250000,
        ]);
        $boat27 = Boat::create([
            'name' => 'Luxury 03',
            'category' => 'Luxury',
            'price' => 5850000,
            'image' => '/images/luxury/luxury03.png',
            'departure' => json_encode(['Friday - Sunday']),
            'max_people' => 13,
            'description' => 'The Superior boat is a Superior category phinisi. Has 6 cabins for a total of 25 person. Departures on every Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/luxury/luxury03.png',
                '/images/detail/luxury03/2.jpg',
                '/images/detail/luxury03/3.jpg',
                '/images/detail/luxury03/4.jpg',
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
            'boat_id' => $boat27->id,
            'type' => '4 Manta Cabin',
            'image' => '/images/detail/luxury03/5.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 6850000,
        ]);
        Cabin::create([
            'boat_id' => $boat27->id,
            'type' => '2 Turtle Cabin',
            'image' => '/images/detail/luxury03/6.jpg',
            'max_guests' => '2',
            'price_per_guest' => 5850000,
        ]);
        $boat28 = Boat::create([
            'name' => 'Luxury 05',
            'category' => 'Luxury',
            'price' => 6500000,
            'image' => '/images/luxury/luxury04.jpg',
            'departure' => json_encode(['Monday - Wednesday', 'Friday - Sunday']),
            'max_people' => 20,
            'description' => 'The Superior boat is a Superior category phinisi. Has 6 cabins for a total of 20 person. Departures on every Monday - Wednesday & Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/luxury/luxury04.jpg',
                '/images/detail/luxury04/1.JPG',
                '/images/detail/luxury04/2.JPG',
                '/images/detail/luxury04/3.JPG',
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
            'boat_id' => $boat28->id,
            'type' => '2 Western Cabin',
            'image' => '/images/detail/luxury04/4.JPG',
            'max_guests' => '2-3',
            'price_per_guest' => 8000000,
        ]);
        Cabin::create([
            'boat_id' => $boat28->id,
            'type' => '2 Japanese Cabin',
            'image' => '/images/detail/luxury04/5.JPG',
            'max_guests' => '2-4',
            'price_per_guest' => 8000000,
        ]);
        Cabin::create([
            'boat_id' => $boat28->id,
            'type' => '2 Balinese Cabin',
            'image' => '/images/detail/luxury04/6.JPG',
            'max_guests' => '2-3',
            'price_per_guest' => 6500000,
        ]);
        $boat29 = Boat::create([
            'name' => 'Luxury 05',
            'category' => 'Luxury',
            'price' => 5750000,
            'image' => '/images/luxury/luxury05.jpg',
            'departure' => json_encode(['Friday - Sunday']),
            'max_people' => 22,
            'description' => 'The Superior boat is a Superior category phinisi. Has 8 cabins for a total of 20 person. Departures on every Friday - Sunday.',
            'location' => 'Labuan Bajo, Indonesia',
            'year' => '2021', // Tambahkan ini
            'speed' => '7-8 Knots', // Tambahkan ini
            'width' => '4.7m', // Tambahkan ini
            'length' => '26.5m',
            'images' => json_encode([
                '/images/luxury/luxury05.jpg',
                '/images/detail/luxury05/1.jpg',
                '/images/detail/luxury05/2.jpg',
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
            'boat_id' => $boat28->id,
            'type' => '2 Royal Master Cabin',
            'image' => '/images/detail/luxury05/4.jpg',
            'max_guests' => '2-4',
            'price_per_guest' => 10500000,
        ]);
        Cabin::create([
            'boat_id' => $boat28->id,
            'type' => '2 Master Cabin',
            'image' => '/images/detail/luxury05/3.jpg',
            'max_guests' => '2-3',
            'price_per_guest' => 9250000,
        ]);
        Cabin::create([
            'boat_id' => $boat28->id,
            'type' => '4 Superior Cabin',
            'image' => '/images/detail/luxury05/5.jpg',
            'max_guests' => '2',
            'price_per_guest' => 5750000,
        ]);
    }
}
