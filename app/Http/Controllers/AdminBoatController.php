<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boat;
use Illuminate\Support\Facades\Log;

class AdminBoatController extends Controller
{
    public function index()
    {
        $boats = Boat::paginate(10);
        return view('admin.boats.index', compact('boats'));
    }

    public function create()
    {
        return view('admin.boats.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|integer',
            'max_people' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images_4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:255',
            'speed' => 'nullable|string|max:255',
            'width' => 'nullable|string|max:255',
            'length' => 'nullable|string|max:255',
        ]);

        // Folder tujuan
        $uploadPath = 'images/kapal/foto_kapal_di_sini';

        // Simpan file utama
        $validated['image'] = $request->file('image')->store($uploadPath, 'public');

        // Simpan gambar tambahan jika ada
        foreach (['images_1', 'images_2', 'images_3', 'images_4'] as $field) {
            if ($request->hasFile($field)) {
                $validated[$field] = $request->file($field)->store($uploadPath, 'public');
            }
        }

        Boat::create($validated);

        return redirect()->route('admin.boats.index')->with('success', 'Boat created successfully.');
    }


    public function edit($id)
    {
        $boat = Boat::findOrFail($id);

        // Decode JSON fields to strings or arrays as needed
        $jsonFields = ['images_1', 'images_2', 'images_3', 'images_4'];
        foreach ($jsonFields as $field) {
            if (isset($boat->$field) && is_string($boat->$field)) {
                $decoded = json_decode($boat->$field, true);
                if (json_last_error() === JSON_ERROR_NONE) {
                    $boat->$field = $decoded;
                }
            }
        }

        // Ensure image is string
        if (!is_string($boat->image)) {
            $boat->image = is_scalar($boat->image) ? (string) $boat->image : '';
        }

        return view('admin.boats.edit', compact('boat'));
    }

    public function update(Request $request, $id)
    {
        $boat = Boat::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|integer',
            'max_people' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images_4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:255',
            'speed' => 'nullable|string|max:255',
            'width' => 'nullable|string|max:255',
            'length' => 'nullable|string|max:255',
        ]);

        $uploadPath = 'images/kapal/foto_kapal_di_sini';

        // Proses upload jika ada file baru
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store($uploadPath, 'public');
        }

        foreach (['images_1', 'images_2', 'images_3', 'images_4'] as $field) {
            if ($request->hasFile($field)) {
                $validated[$field] = $request->file($field)->store($uploadPath, 'public');
            }
        }

        $boat->update($validated);

        return redirect()->route('admin.boats.index')->with('success', 'Boat updated successfully.');
    }


    public function destroy($id)
    {
        $boat = Boat::findOrFail($id);
        $boat->delete();

        return redirect()->route('admin.boats.index')->with('success', 'Boat deleted successfully.');
    }
}
