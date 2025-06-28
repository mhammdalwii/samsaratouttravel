@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Add New Boat</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.boats.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Basic Info --}}
            <div class="mb-4">
                <label for="name" class="block font-semibold mb-1">Name</label>
                <input type="text" name="name" id="name" class="w-full border rounded px-3 py-2"
                    value="{{ old('name') }}" required>
            </div>

            <div class="mb-4">
                <label for="category" class="block font-semibold mb-1">Category</label>
                <select name="category" id="category" class="w-full border rounded px-3 py-2" required>
                    @foreach (['Superior', 'Deluxe', 'Luxury'] as $option)
                        <option value="{{ $option }}" {{ old('category') === $option ? 'selected' : '' }}>
                            {{ $option }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Departure Days --}}
            <div class="mb-4">
                <label class="block font-semibold mb-1">Departure Days</label>
                @foreach (['Monday-Wednesday', 'Friday-Sunday', 'All Departures'] as $day)
                    <label class="inline-flex items-center mr-4">
                        <input type="checkbox" name="departure[]" value="{{ $day }}"
                            {{ is_array(old('departure')) && in_array($day, old('departure')) ? 'checked' : '' }}>
                        <span class="ml-2">{{ $day }}</span>
                    </label>
                @endforeach
            </div>

            {{-- Numeric Info --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="price" class="block font-semibold mb-1">Price</label>
                    <input type="number" name="price" id="price" class="w-full border rounded px-3 py-2"
                        value="{{ old('price') }}" required>
                </div>
                <div>
                    <label for="max_people" class="block font-semibold mb-1">Max People</label>
                    <input type="number" name="max_people" id="max_people" class="w-full border rounded px-3 py-2"
                        value="{{ old('max_people') }}" required>
                </div>
            </div>

            {{-- Uploads --}}
            <div class="mb-4 mt-4">
                <label for="image" class="block font-semibold mb-1">Main Image</label>
                <input type="file" name="image" id="image" accept="image/*" class="w-full border rounded px-3 py-2"
                    required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Carousel Images (up to 4)</label>
                <input type="file" name="carousel_images[]" multiple accept="image/*"
                    class="w-full border rounded px-3 py-2">
                <small class="text-sm text-gray-500">Only upload max 4 images.</small>
            </div>

            {{-- Description & Specs --}}
            <div class="mb-4">
                <label for="description" class="block font-semibold mb-1">Description</label>
                <textarea name="description" id="description" rows="4" class="w-full border rounded px-3 py-2">{{ old('description') }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach (['location' => 'Location', 'year' => 'Year', 'speed' => 'Speed', 'width' => 'Width', 'length' => 'Length'] as $field => $label)
                    <div>
                        <label for="{{ $field }}" class="block font-semibold mb-1">{{ $label }}</label>
                        <input type="text" name="{{ $field }}" id="{{ $field }}"
                            class="w-full border rounded px-3 py-2" value="{{ old($field) }}">
                    </div>
                @endforeach
            </div>

            {{-- Submit --}}
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                <a href="{{ route('admin.boats.index') }}" class="ml-4 text-gray-700 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
@endsection
