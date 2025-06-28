<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $ship->name }} - Easy Komodo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <style>
        .container {
            max-width: 1090px;
        }

        .image-container {
            position: relative;
            display: inline-block;
        }

        .image-container h5 {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .img-carousel {
            max-height: 500px;
            width: auto;
            margin: 0 auto;
        }
    </style>
</head>

<body class="bg-light">
    <x-header></x-header>
    <div class="container py-5">
        <nav class="mt-3">
            <ol class="breadcrumb p-3 rounded ">
                <li class="breadcrumb-item"><a href="/" class="text-decoration-none text-secondary">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">Open Trip</a>
                </li>
                <li class="breadcrumb-item active text-primary">{{ $ship->name }}</li>
            </ol>
        </nav>
        <div class="row">
            <!-- Kolom Gambar -->
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    @foreach ($images as $index => $image)
                        @php
                            // Cek jika gambar ada di storage
                            if (Storage::exists('public/' . $image)) {
                                $imagePath = asset('storage/' . $image);
                            }
                            // Cek jika gambar ada di public folder
                            elseif (file_exists(public_path($image))) {
                                $imagePath = asset($image);
                            }
                            // Fallback
                            else {
                                $imagePath = asset('images/default-image.jpg');
                            }
                        @endphp

                        <div class="{{ $index === 0 ? '' : 'hidden' }} duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ $imagePath }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="Slide {{ $index + 1 }}">
                        </div>
                    @endforeach
                </div>

                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    @foreach ($images as $index => $image)
                        <button type="button" class="w-3 h-3 rounded-full"
                            aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"
                            data-carousel-slide-to="{{ $index }}"></button>
                    @endforeach
                </div>

                <!-- Controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <!-- Kolom Teks -->
        <section>
            <h1 class="mb-2">{{ $ship->name }} Phinisi Sailing Komodo Tour</h1>
            <div class="col-md-12 mt-3 ">
                <p>
                    <span class="badge bg-primary">3 DAYS</span>
                    <span class="badge bg-secondary">SHARE TRIP</span>
                    <span class="badge bg-info">ENGLISH</span>
                </p>
                <p>{{ $ship->description ?? 'Deskripsi tidak tersedia' }}</p>
                <p><strong>Location:</strong> {{ $ship->location ?? 'Lokasi tidak tersedia' }}</p>

                <div class="btn-group text-center justify-content-center d-flex" role="group"
                    aria-label="Basic example">
                    <button type="button" class="btn btn-secondary">Year {{ $ship->year }}</button>
                    <button type="button" class="btn btn-secondary">Speed {{ $ship->speed }}</button>
                    <button type="button" class="btn btn-secondary">Width {{ $ship->width }}</button>
                    <button type="button" class="btn btn-secondary">Length {{ $ship->length }}</button>
                </div>
                <p class="mt-3">Check the following available rooms:</p>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    @foreach ($ship->cabins as $cabin)
                        <div class="col">
                            <div class="card border-0 shadow-sm">
                                <div class="ratio ratio-4x3">
                                    <img src="{{ asset($cabin->image) }}" class="card-img-top rounded"
                                        alt="{{ $cabin->type }}" style="object-fit: cover;">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="fw-bold">{{ $cabin->type }}</h6>
                                    <p class="mb-1 text-muted">{{ $cabin->max_guests }} Guest</p>
                                    <p class="fw-semibold text-dark">Rp
                                        {{ number_format($cabin->price_per_guest, 0, ',', '.') }} / Guest</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <x-itenary />
            </div>
        </section>
    </div>
    <x-footer />
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
