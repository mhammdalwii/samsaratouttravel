<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabin;
use App\Models\Boat;

class AdminCabinController extends Controller
{
    public function index()
    {
        $cabins = Cabin::with('boat')->get();
        return view('admin.cabins.index', compact('cabins'));
    }

    public function create()
    {
        $boats = Boat::all();
        return view('admin.cabins.create', compact('boats'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'boat_id' => 'required|exists:boats,id',
            'type' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'max_guests' => 'required|string|max:255',
            'price_per_guest' => 'required|numeric',
        ]);

        Cabin::create($validated);

        return redirect()->route('admin.cabins.index')->with('success', 'Cabin created successfully.');
    }

    public function edit($id)
    {
        $cabin = Cabin::findOrFail($id);
        $boats = Boat::all();
        return view('admin.cabins.edit', compact('cabin', 'boats'));
    }

    public function update(Request $request, $id)
    {
        $cabin = Cabin::findOrFail($id);

        $validated = $request->validate([
            'boat_id' => 'required|exists:boats,id',
            'type' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'max_guests' => 'required|string|max:255',
            'price_per_guest' => 'required|numeric',
        ]);

        $cabin->update($validated);

        return redirect()->route('admin.cabins.index')->with('success', 'Cabin updated successfully.');
    }

    public function destroy($id)
    {
        $cabin = Cabin::findOrFail($id);
        $cabin->delete();

        return redirect()->route('admin.cabins.index')->with('success', 'Cabin deleted successfully.');
    }
}
