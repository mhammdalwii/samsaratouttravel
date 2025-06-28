@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Cabins Management</h1>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.cabins.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add
            New Cabin</a>

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Boat</th>
                    <th class="border px-4 py-2">Type</th>
                    <th class="border px-4 py-2">Image</th>
                    <th class="border px-4 py-2">Max Guests</th>
                    <th class="border px-4 py-2">Price Per Guest</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cabins as $cabin)
                    <tr>
                        <td class="border px-4 py-2">{{ $cabin->id }}</td>
                        <td class="border px-4 py-2">{{ $cabin->boat->name ?? 'N/A' }}</td>
                        <td class="border px-4 py-2">{{ $cabin->type }}</td>
                        <td class="border px-4 py-2">
                            <img src="{{ asset($cabin->image) }}" alt="{{ $cabin->type }}" class="w-20 h-auto">
                        </td>
                        <td class="border px-4 py-2">{{ $cabin->max_guests }}</td>
                        <td class="border px-4 py-2">{{ number_format($cabin->price_per_guest, 2) }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('admin.cabins.edit', $cabin->id) }}"
                                class="text-blue-600 hover:underline mr-2">Edit</a>
                            <form action="{{ route('admin.cabins.destroy', $cabin->id) }}" method="POST"
                                class="inline-block"
                                onsubmit="return confirm('Are you sure you want to delete this cabin?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-6">
            {{ $cabins->links('pagination::tailwind') }}
        </div>
    </div>
@endsection
