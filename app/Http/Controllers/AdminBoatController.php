<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boat;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image; // PENTING: Library Kompresi
use Illuminate\Support\Str; // PENTING: Untuk buat nama file acak

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

    // --- FUNGSI BANTUAN UNTUK UPLOAD & KOMPRESI ---
    private function uploadAndCompress($file, $folder)
    {
        // 1. Buat nama file unik
        $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();

        // 2. Tentukan path penyimpanan (di storage/app/public/...)
        $path = storage_path('app/public/' . $folder . '/' . $filename);

        // 3. Pastikan foldernya ada, kalau tidak ada buat dulu
        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }

        // 4. PROSES KOMPRESI (Intervention Image)
        // - Resize lebar max 1200px, tinggi menyesuaikan (aspectRatio)
        // - Cegah upsize (jangan perbesar gambar kecil)
        Image::make($file)->resize(1200, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($path, 80); // 80 adalah kualitas (0-100)

        // 5. Kembalikan path string untuk database (tanpa 'public/')
        return $folder . '/' . $filename;
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // Max 5MB sebelum dikompres
            'carousel_images' => 'nullable|array|max:4',
            'carousel_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:5120',
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

        // Upload Main Image dengan Kompresi
        if ($request->hasFile('image')) {
            $validated['image'] = $this->uploadAndCompress($request->file('image'), 'boats');
        }

        // Upload Carousel dengan Kompresi
        $carouselImages = [];
        if ($request->hasFile('carousel_images')) {
            foreach ($request->file('carousel_images') as $file) {
                $carouselImages[] = $this->uploadAndCompress($file, 'boats/carousel');
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'carousel_images' => 'nullable|array|max:4',
            'carousel_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:5120',
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

        // --- UPDATE MAIN IMAGE (Dengan Kompresi) ---
        if ($request->hasFile('image')) {
            // Hapus file lama
            if ($boat->image) {
                Storage::delete('public/' . $boat->image);
                Storage::delete('public/' . ltrim($boat->image, '/'));
            }
            // Upload & Compress file baru
            $validated['image'] = $this->uploadAndCompress($request->file('image'), 'boats');
        } else {
            unset($validated['image']);
        }

        // --- UPDATE CAROUSEL (Dengan Kompresi) ---
        $carouselImages = $request->input('existing_images', []);

        if ($request->hasFile('carousel_images')) {
            foreach ($request->file('carousel_images') as $file) {
                $carouselImages[] = $this->uploadAndCompress($file, 'boats/carousel');
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
        Storage::delete('public/' . ltrim($request->image_path, '/'));

        $images = json_decode($boat->images, true) ?? [];

        $images = array_filter($images, function ($img) use ($request) {
            return ltrim($img, '/') !== ltrim($request->image_path, '/');
        });

        $boat->images = json_encode(array_values($images));
        $boat->save();

        return back()->with('success', 'Image deleted successfully');
    }
}
