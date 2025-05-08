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
            <div class="mb-4">
                <label for="name" class="block font-semibold mb-1">Name</label>
                <input type="text" name="name" id="name" class="w-full border rounded px-3 py-2"
                    value="{{ old('name') }}" required>
            </div>

            <div class="mb-4">
                <label for="category" class="block font-semibold mb-1">Category</label>
                <input type="text" name="category" id="category" class="w-full border rounded px-3 py-2"
                    value="{{ old('category') }}" required>
            </div>

            <div class="mb-4">
                <label for="price" class="block font-semibold mb-1">Price</label>
                <input type="number" name="price" id="price" class="w-full border rounded px-3 py-2"
                    value="{{ old('price') }}" required>
            </div>

            <div class="mb-4">
                <label for="max_people" class="block font-semibold mb-1">Max People</label>
                <input type="number" name="max_people" id="max_people" class="w-full border rounded px-3 py-2"
                    value="{{ old('max_people') }}" required>
            </div>

            <div class="mb-4">
                <label for="image" class="block font-semibold mb-1">Main Image</label>
                <input type="file" name="image" id="image" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Carousel Images</label>
                <input type="file" name="images_1" class="w-full border rounded px-3 py-2 mb-2">
                <input type="file" name="images_2" class="w-full border rounded px-3 py-2 mb-2">
                <input type="file" name="images_3" class="w-full border rounded px-3 py-2 mb-2">
                <input type="file" name="images_4" class="w-full border rounded px-3 py-2">
            </div>
            <!-- Removed Itinerary, Includes, Excludes, Departure fields as per request -->

            <div class="mb-4">
                <label for="description" class="block font-semibold mb-1">Description</label>
                <textarea name="description" id="description" class="w-full border rounded px-3 py-2" rows="4">{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="location" class="block font-semibold mb-1">Location</label>
                <input type="text" name="location" id="location" class="w-full border rounded px-3 py-2"
                    value="{{ old('location') }}">
            </div>

            <div class="mb-4">
                <label for="year" class="block font-semibold mb-1">Year</label>
                <input type="text" name="year" id="year" class="w-full border rounded px-3 py-2"
                    value="{{ old('year') }}">
            </div>

            <div class="mb-4">
                <label for="speed" class="block font-semibold mb-1">Speed</label>
                <input type="text" name="speed" id="speed" class="w-full border rounded px-3 py-2"
                    value="{{ old('speed') }}">
            </div>

            <div class="mb-4">
                <label for="width" class="block font-semibold mb-1">Width</label>
                <input type="text" name="width" id="width" class="w-full border rounded px-3 py-2"
                    value="{{ old('width') }}">
            </div>

            <div class="mb-4">
                <label for="length" class="block font-semibold mb-1">Length</label>
                <input type="text" name="length" id="length" class="w-full border rounded px-3 py-2"
                    value="{{ old('length') }}">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
            <a href="{{ route('admin.boats.index') }}" class="ml-4 text-gray-700 hover:underline">Cancel</a>
        </form>
    </div>
@endsection
