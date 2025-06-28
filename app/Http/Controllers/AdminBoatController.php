<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boat;
use Illuminate\Support\Facades\Storage;

class AdminBoatController extends Controller
{
    public function index(Request $request)
    {
        $query = Boat::query();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('departure')) {
            $query->whereJsonContains('departure', $request->departure);
        }

        $boats = $query->paginate(10);
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
            'category' => 'required|string|in:Superior,Deluxe,Luxury',
            'price' => 'required|integer',
            'max_people' => 'required|integer',
            'departure' => 'nullable|array',
            'departure.*' => 'in:Monday-Wednesday,Friday-Sunday,All Departures',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'carousel_images' => 'nullable|array|max:4',
            'carousel_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:255',
            'speed' => 'nullable|string|max:255',
            'width' => 'nullable|string|max:255',
            'length' => 'nullable|string|max:255',
        ]);

        $validated['departure'] = $request->filled('departure')
            ? json_encode(array_map('trim', $request->departure))
            : json_encode([]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/boats');
            $validated['image'] = str_replace('public/', '', $imagePath);
        }

        $carouselImages = [];
        if ($request->hasFile('carousel_images')) {
            foreach ($request->file('carousel_images') as $file) {
                $path = $file->store('public/boats/carousel');
                $carouselImages[] = str_replace('public/', '', $path);
            }
        }

        $validated['images'] = !empty($carouselImages) ? json_encode($carouselImages) : null;

        Boat::create($validated);

        return redirect()->route('admin.boats.index')->with('success', 'Boat created successfully.');
    }

    public function edit($id)
    {
        $boat = Boat::findOrFail($id);


        if (!is_array($boat->departure)) {
            $boat->departure = [];
        }


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
            'category' => 'required|string|in:Superior,Deluxe,Luxury',
            'price' => 'required|integer',
            'max_people' => 'required|integer',
            'departure' => 'nullable|array',
            'departure.*' => 'in:Monday-Wednesday,Friday-Sunday,All Departures',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'carousel_images' => 'nullable|array|max:4',
            'carousel_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:255',
            'speed' => 'nullable|string|max:255',
            'width' => 'nullable|string|max:255',
            'length' => 'nullable|string|max:255',
        ]);

        $validated['departure'] = $request->filled('departure')
            ? json_encode(array_map('trim', $request->departure))
            : json_encode([]);


        if ($request->has('delete_main_image') && $request->delete_main_image == '1') {
            if ($boat->image) {
                Storage::delete('public/' . $boat->image);
            }
            $validated['image'] = null;
        } elseif ($request->hasFile('image')) {
            if ($boat->image) {
                Storage::delete('public/' . $boat->image);
            }
            $imagePath = $request->file('image')->store('public/boats');
            $validated['image'] = str_replace('public/', '', $imagePath);
        }

        $carouselImages = $request->input('existing_images', []);

        if ($request->hasFile('carousel_images')) {
            foreach ($request->file('carousel_images') as $file) {
                $path = $file->store('public/boats/carousel');
                $carouselImages[] = str_replace('public/', '', $path);
            }
        }

        $validated['images'] = json_encode($carouselImages);

        $boat->update($validated);

        return redirect()->route('admin.boats.index')->with('success', 'Boat updated successfully.');
    }

    public function destroy($id)
    {
        $boat = Boat::findOrFail($id);

        if ($boat->image) {
            Storage::delete('public/' . $boat->image);
        }

        if ($boat->images) {
            $carouselImages = json_decode($boat->images, true);
            foreach ($carouselImages as $image) {
                Storage::delete('public/' . $image);
            }
        }

        $boat->delete();

        return redirect()->route('admin.boats.index')->with('success', 'Boat deleted successfully.');
    }

    public function deleteImage(Boat $boat, Request $request)
    {
        $request->validate([
            'image_path' => 'required|string'
        ]);

        Storage::delete('public/' . $request->image_path);

        $images = json_decode($boat->images, true) ?? [];
        $images = array_filter($images, fn($img) => $img !== $request->image_path);
        $boat->images = json_encode(array_values($images));
        $boat->save();

        return back()->with('success', 'Image deleted successfully');
    }
}
