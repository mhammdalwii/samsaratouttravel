<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabin;
use App\Models\Boat;

class AdminCabinController extends Controller
{
    public function index()
    {
        $cabins = Cabin::with('boat')->paginate(10);
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'max_guests' => 'required|string|max:255',
            'price_per_guest' => 'required|numeric',
        ]);

        // Simpan file ke folder public/cabin
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName(); // nama unik
        $file->move(public_path('cabin'), $filename); // simpan ke public/cabin

        // Simpan data ke database
        Cabin::create([
            'boat_id' => $validated['boat_id'],
            'type' => $validated['type'],
            'image' => 'cabin/' . $filename, // path relatif dari public
            'max_guests' => $validated['max_guests'],
            'price_per_guest' => $validated['price_per_guest'],
        ]);

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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'max_guests' => 'required|string|max:255',
            'price_per_guest' => 'required|numeric'
        ]);

        // Cek jika ada upload file gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($cabin->image && file_exists(public_path($cabin->image))) {
                unlink(public_path($cabin->image));
            }

            // Simpan gambar baru
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('cabin'), $filename);
            $validated['image'] = 'cabin/' . $filename;
        } else {
            // Tetap pakai gambar lama
            $validated['image'] = $cabin->image;
        }

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
