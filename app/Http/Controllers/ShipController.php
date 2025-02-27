<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boat;

class ShipController extends Controller
{
    public function show($id)
    {
        $ship = Boat::find($id);

        if (!$ship) {
            abort(404, 'Kapal tidak ditemukan');
        }

        return view('ship.detail', compact('ship'));
    }
}
