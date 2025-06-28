@php use Illuminate\Support\Str; @endphp

@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-6">Edit Boat</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.boats.update', $boat->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block font-semibold mb-1">Name</label>
                <input type="text" name="name" id="name" class="w-full border rounded px-3 py-2"
                    value="{{ old('name', $boat->name) }}" required>
            </div>

            <div class="mb-4">
                <label for="category" class="block font-semibold mb-1">Category</label>
                <select name="category" id="category" class="w-full border rounded px-3 py-2" required>
                    @foreach (['Superior', 'Deluxe', 'Luxury'] as $cat)
                        <option value="{{ $cat }}"
                            {{ old('category', $boat->category) === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="max_people" class="block font-semibold mb-1">Max People</label>
                <input type="number" name="max_people" id="max_people" class="w-full border rounded px-3 py-2"
                    value="{{ old('max_people', $boat->max_people) }}" required>
            </div>

            <div class="mb-4">
                <label for="image" class="block font-semibold mb-1">Main Image</label>
                <input type="file" name="image" id="image" class="w-full border rounded px-3 py-2">
                @if ($boat->image)
                    <div class="mt-2 relative group">
                        <img src="{{ asset('storage/' . $boat->image) }}" alt="Current Image"
                            class="w-32 h-32 object-cover rounded-lg border">
                        <button type="button"
                            class="absolute top-2 right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity"
                            onclick="confirmDeleteMainImage()">×</button>
                        <input type="hidden" name="delete_main_image" id="delete_main_image" value="0">
                    </div>
                @endif
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-2">Carousel Images</label>
                @php
                    $imagesData = $boat->images;
                    if (is_string($imagesData)) {
                        $carouselImages = json_decode($imagesData, true) ?? [];
                    } else {
                        $carouselImages = $imagesData ?? [];
                    }
                @endphp
                <div class="grid grid-cols-4 gap-4 mb-4">
                    @foreach ($carouselImages as $index => $image)
                        <div class="relative group">
                            <img src="{{ asset('storage/' . $image) }}" class="w-full h-32 object-cover rounded-lg border">
                            <button type="button"
                                class="absolute top-2 right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity"
                                onclick="confirmDeleteImage('{{ $image }}', {{ $index }})">×</button>
                            <input type="hidden" name="existing_images[]" value="{{ $image }}">
                        </div>
                    @endforeach
                </div>
                <input type="file" name="carousel_images[]" multiple class="w-full border rounded px-3 py-2"
                    accept="image/*">
                <small class="text-sm text-gray-500">Upload new carousel images (max 4 total).</small>
            </div>

            <div class="mb-4">
                <label for="description" class="block font-semibold mb-1">Description</label>
                <textarea name="description" id="description" class="w-full border rounded px-3 py-2" rows="4">{{ old('description', $boat->description) }}</textarea>
            </div>

            @foreach (['price', 'location', 'year', 'speed', 'width', 'length'] as $field)
                <div class="mb-4">
                    <label for="{{ $field }}" class="block font-semibold mb-1">{{ ucfirst($field) }}</label>
                    <input type="text" name="{{ $field }}" id="{{ $field }}"
                        class="w-full border rounded px-3 py-2" value="{{ old($field, $boat->$field) }}">
                </div>
            @endforeach

            <div class="mb-4">
                <label class="block font-semibold mb-2">Departure Days</label>
                @php
                    $departureOptions = ['Monday-Wednesday', 'Friday-Sunday', 'All Departures'];
                    $selectedData = old('departure', $boat->departure);
                    if (is_string($selectedData)) {
                        $selectedDepartures = json_decode($selectedData, true) ?? [];
                    } else {
                        $selectedDepartures = $selectedData ?? [];
                    }
                @endphp
                @foreach ($departureOptions as $option)
                    <label class="inline-flex items-center mr-4 mb-2">
                        <input type="checkbox" name="departure[]" value="{{ $option }}" class="form-checkbox"
                            {{ in_array($option, $selectedDepartures ?? []) ? 'checked' : '' }}>
                        <span class="ml-2">{{ $option }}</span>
                    </label>
                @endforeach
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update
                    Boat</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        function confirmDeleteImage(imagePath, index) {
            if (confirm('Are you sure you want to delete this image?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ route('admin.boats.deleteImage', $boat->id) }}';

                const csrf = document.createElement('input');
                csrf.type = 'hidden';
                csrf.name = '_token';
                csrf.value = '{{ csrf_token() }}';
                form.appendChild(csrf);

                const method = document.createElement('input');
                method.type = 'hidden';
                method.name = '_method';
                method.value = 'DELETE';
                form.appendChild(method);

                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'image_path';
                input.value = imagePath;
                form.appendChild(input);

                document.body.appendChild(form);
                form.submit();
            }
        }

        function confirmDeleteMainImage() {
            if (confirm('Are you sure you want to delete the main image?')) {
                document.getElementById('delete_main_image').value = '1';
                document.querySelector('div[class*="relative group"]').style.display = 'none';
            }
        }
    </script>
@endpush
