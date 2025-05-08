@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Add New Cabin</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.cabins.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="boat_id" class="block font-semibold mb-1">Boat</label>
                <select name="boat_id" id="boat_id" class="w-full border border-gray-300 rounded px-3 py-2">
                    <option value="">Select a boat</option>
                    @foreach ($boats as $boat)
                        <option value="{{ $boat->id }}" {{ old('boat_id') == $boat->id ? 'selected' : '' }}>
                            {{ $boat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="type" class="block font-semibold mb-1">Cabin Type</label>
                <input type="text" name="type" id="type" value="{{ old('type') }}"
                    class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="image" class="block font-semibold mb-1">Image URL</label>
                <input type="text" name="image" id="image" value="{{ old('image') }}"
                    class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="max_guests" class="block font-semibold mb-1">Max Guests</label>
                <input type="text" name="max_guests" id="max_guests" value="{{ old('max_guests') }}"
                    class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="price_per_guest" class="block font-semibold mb-1">Price Per Guest</label>
                <input type="number" step="0.01" name="price_per_guest" id="price_per_guest"
                    value="{{ old('price_per_guest') }}" class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Add Cabin</button>
            <a href="{{ route('admin.cabins.index') }}" class="ml-4 text-gray-600 hover:underline">Cancel</a>
        </form>
    </div>
@endsection
