@extends('layouts.admin')
@php
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Str;

@endphp
@section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-semibold mb-6 text-gray-800">Boats Management</h1>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-6 shadow">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.boats.create') }}"
            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded mb-6 inline-block shadow">Add New Boat</a>

        <div class="overflow-x-auto bg-white rounded shadow">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Max
                            People</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($boats as $boat)
                        <tr class="hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $boat->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($boat->image)
                                    @php
                                        $imagePath = $boat->image;
                                        $isStorageImage = Str::startsWith($imagePath, 'images/kapal/'); // atau path yang kamu gunakan untuk upload
                                    @endphp
                                    <img src="{{ $isStorageImage ? Storage::url($imagePath) : asset($imagePath) }}"
                                        alt="{{ $boat->name }}" class="w-14 h-14 object-cover rounded-lg shadow">
                                @else
                                    <span class="text-gray-400 text-sm">No Image</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $boat->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $boat->category }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                Rp{{ number_format($boat->price, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $boat->max_people }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $boat->location }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('admin.boats.edit', $boat->id) }}"
                                    class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
                                <form action="{{ route('admin.boats.destroy', $boat->id) }}" method="POST"
                                    class="inline-block"
                                    onsubmit="return confirm('Are you sure you want to delete this boat?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $boats->links('pagination::tailwind') }}
        </div>
    </div>
@endsection
