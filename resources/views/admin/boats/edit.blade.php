@php use Illuminate\Support\Str; @endphp

@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-6">Edit Boat</h1>

        <form action="{{ route('admin.boats.update', $boat->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block font-semibold mb-1">Name</label>
                <?php $name = old('name', $boat->name); ?>
                <input type="text" name="name" id="name" class="w-full border rounded px-3 py-2"
                    value="<?php echo htmlspecialchars(is_string($name) ? $name : ''); ?>" required>
            </div>

            <div class="mb-4">
                <label for="category" class="block font-semibold mb-1">Category</label>
                <?php $category = old('category', $boat->category); ?>
                <input type="text" name="category" id="category" class="w-full border rounded px-3 py-2"
                    value="<?php echo htmlspecialchars(is_string($category) ? $category : ''); ?>" required>
            </div>

            <div class="mb-4">
                <label for="max_people" class="block font-semibold mb-1">Max People</label>
                <?php $max_people = old('max_people', $boat->max_people); ?>
                <input type="number" name="max_people" id="max_people" class="w-full border rounded px-3 py-2"
                    value="<?php echo is_numeric($max_people) ? $max_people : ''; ?>" required>
            </div>

            <div class="mb-4">
                <label for="image" class="block font-semibold mb-1">Main Image</label>
                <input type="file" name="image" id="image" class="w-full border rounded px-3 py-2">
                @if ($boat->image)
                    <img src="{{ Str::startsWith($boat->image, 'images/') ? Storage::url($boat->image) : asset($boat->image) }}"
                        alt="Current Image" class="w-24 mt-2 rounded">
                @endif

            </div>

            {{-- Images 1 --}}
            <div class="mb-4">
                <label for="images_1" class="block font-semibold mb-1">Additional Image 1</label>
                <input type="file" name="images_1" id="images_1" class="w-full border rounded px-3 py-2">
                @if (!empty($boat->images_1))
                    <img src="{{ Str::startsWith($boat->images_1, 'images/') ? Storage::url($boat->images_1) : asset($boat->images_1) }}"
                        alt="Image 1" class="w-24 mt-2 rounded">
                @endif
            </div>

            {{-- Images 2 --}}
            <div class="mb-4">
                <label for="images_2" class="block font-semibold mb-1">Additional Image 2</label>
                <input type="file" name="images_2" id="images_2" class="w-full border rounded px-3 py-2">
                @if (!empty($boat->images_2))
                    <img src="{{ Str::startsWith($boat->images_2, 'images/') ? Storage::url($boat->images_2) : asset($boat->images_2) }}"
                        alt="Image 2" class="w-24 mt-2 rounded">
                @endif
            </div>

            {{-- Images 3 --}}
            <div class="mb-4">
                <label for="images_3" class="block font-semibold mb-1">Additional Image 3</label>
                <input type="file" name="images_3" id="images_3" class="w-full border rounded px-3 py-2">
                @if (!empty($boat->images_3))
                    <img src="{{ Str::startsWith($boat->images_3, 'images/') ? Storage::url($boat->images_3) : asset($boat->images_3) }}"
                        alt="Image 3" class="w-24 mt-2 rounded">
                @endif
            </div>

            {{-- Images 4 --}}
            <div class="mb-4">
                <label for="images_4" class="block font-semibold mb-1">Additional Image 4</label>
                <input type="file" name="images_4" id="images_4" class="w-full border rounded px-3 py-2">
                @if (!empty($boat->images_4))
                    <img src="{{ Str::startsWith($boat->images_4, 'images/') ? Storage::url($boat->images_4) : asset($boat->images_4) }}"
                        alt="Image 4" class="w-24 mt-2 rounded">
                @endif
            </div>

            <div class="mb-4">
                <label for="description" class="block font-semibold mb-1">Description</label>
                <?php $description = old('description', $boat->description); ?>
                <textarea name="description" id="description" class="w-full border rounded px-3 py-2" rows="4"><?php echo htmlspecialchars(is_string($description) ? $description : ''); ?></textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block font-semibold mb-1">Price</label>
                <?php $price = old('price', $boat->price); ?>
                <input type="number" name="price" id="price" class="w-full border rounded px-3 py-2"
                    value="<?php echo is_numeric($price) ? $price : ''; ?>" required>
            </div>

            <div class="mb-4">
                <label for="location" class="block font-semibold mb-1">Location</label>
                <?php $location = old('location', $boat->location); ?>
                <input type="text" name="location" id="location" class="w-full border rounded px-3 py-2"
                    value="<?php echo htmlspecialchars(is_string($location) ? $location : ''); ?>">
            </div>

            <div class="mb-4">
                <label for="year" class="block font-semibold mb-1">Year</label>
                <?php $year = old('year', $boat->year); ?>
                <input type="text" name="year" id="year" class="w-full border rounded px-3 py-2"
                    value="<?php echo htmlspecialchars(is_string($year) ? $year : ''); ?>">
            </div>

            <div class="mb-4">
                <label for="speed" class="block font-semibold mb-1">Speed</label>
                <?php $speed = old('speed', $boat->speed); ?>
                <input type="text" name="speed" id="speed" class="w-full border rounded px-3 py-2"
                    value="<?php echo htmlspecialchars(is_string($speed) ? $speed : ''); ?>">
            </div>

            <div class="mb-4">
                <label for="width" class="block font-semibold mb-1">Width</label>
                <?php $width = old('width', $boat->width); ?>
                <input type="text" name="width" id="width" class="w-full border rounded px-3 py-2"
                    value="<?php echo htmlspecialchars(is_string($width) ? $width : ''); ?>">
            </div>

            <div class="mb-4">
                <label for="length" class="block font-semibold mb-1">Length</label>
                <?php $length = old('length', $boat->length); ?>
                <input type="text" name="length" id="length" class="w-full border rounded px-3 py-2"
                    value="<?php echo htmlspecialchars(is_string($length) ? $length : ''); ?>">
            </div>

            <div class="mb-4">
                <!-- Itinerary, Includes, Excludes, Departure fields removed as per request -->
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update
                    Boat</button>
            </div>
        </form>
    </div>
@endsection
