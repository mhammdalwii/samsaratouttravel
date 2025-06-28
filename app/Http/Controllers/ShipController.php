<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boat;
use Illuminate\Support\Facades\Storage;

class ShipController extends Controller
{
    public function show($id)
    {
        $ship = Boat::with('cabins')->findOrFail($id);

        $images = [];

        // Tambahkan gambar utama
        if (!empty($ship->image)) {
            $images[] = $ship->image;
        }

        // Tambahkan gambar carousel
        if (!empty($ship->images)) {
            $carouselImages = json_decode($ship->images, true);
            if (is_array($carouselImages)) {
                $images = array_merge($images, $carouselImages);
            }
        }

        return view('ship.detail', compact('ship', 'images'));
    }
}
