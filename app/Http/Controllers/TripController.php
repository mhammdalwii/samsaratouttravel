<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    public function show($code)
    {
        // Ambil data trip berdasarkan kode
        $trip = Trip::where('code', $code)->firstOrFail();

        // Kirim data trip ke view 'trip.detail'
        return view('trip.detail', compact('trip'));
    }
}
