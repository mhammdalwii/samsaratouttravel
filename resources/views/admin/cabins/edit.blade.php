@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Edit Cabin</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.cabins.update', $cabin->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="boat_id" class="block font-semibold mb-1">Boat</label>
                <select name="boat_id" id="boat_id" class="w-full border rounded px-3 py-2" required>
                    @foreach ($boats as $boat)
                        <option value="{{ $boat->id }}" {{ $cabin->boat_id == $boat->id ? 'selected' : '' }}>
                            {{ $boat->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="type" class="block font-semibold mb-1">Type</label>
                <input type="text" name="type" id="type" class="w-full border rounded px-3 py-2"
                    value="{{ old('type', $cabin->type) }}" required>
            </div>

            <div class="mb-4">
                <label for="image" class="block font-semibold mb-1">Image</label>
                <input type="file" name="image" id="image" class="w-full border border-gray-300 rounded px-3 py-2">

                @if ($cabin->image)
                    <p class="mt-2 text-sm text-gray-600">Current Image:</p>
                    <img src="{{ asset($cabin->image) }}" alt="Current" class="w-32 mt-1 rounded shadow">
                @endif
            </div>

            <div class="mb-4">
                <label for="max_guests" class="block font-semibold mb-1">Max Guests</label>
                <input type="number" name="max_guests" id="max_guests" class="w-full border rounded px-3 py-2"
                    value="{{ old('max_guests', $cabin->max_guests) }}" required>
            </div>

            <div class="mb-4">
                <label for="price_per_guest" class="block font-semibold mb-1">Price Per Guest</label>
                <input type="text" name="price_per_guest" id="price_per_guest" class="w-full border rounded px-3 py-2"
                    value="{{ old('price_per_guest', $cabin->price_per_guest) }}" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Cabin</button>
            <a href="{{ route('admin.cabins.index') }}" class="ml-4 text-gray-700 hover:underline">Cancel</a>
        </form>
    </div>
@endsection
