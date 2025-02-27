<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $ship->name }} - Easy Komodo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
            <div class="col-md-12 mb-4">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        @foreach (json_decode($ship->images ?? '[]') as $index => $image)
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                                aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach (json_decode($ship->images ?? '[]') as $index => $image)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset($image) }}" class="d-block w-100 img-carousel"
                                    alt="kapal{{ $index + 1 }}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
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
                <h3 class="mt-4">Itinerary 3 Days 2 Nights</h3>
                @foreach (json_decode($ship->itinerary ?? '[]', true) as $day => $activities)
                    <h6>{{ $day }} – {{ implode(', ', $activities) }}</h6>
                    <ul class="mt-2">
                        @foreach ($activities as $activity)
                            <li>{{ $activity }}</li>
                        @endforeach
                    </ul>
                @endforeach
                <h3 class="mt-2">Include:</h3>
                <ul>
                    @foreach (json_decode($ship->includes ?? '[]') as $include)
                        <li>{{ $include }}</li>
                    @endforeach
                </ul>
                <h3 class="mt-2">Exclude:</h3>
                <ul>
                    @foreach (json_decode($ship->excludes ?? '[]') as $exclude)
                        <li>{{ $exclude }}</li>
                    @endforeach
                    <ul style="list-style-type:circle">
                        <li>Domestic : IDR 300.000-400.000</li>
                        <li>Foreigner : IDR 600.000-700.000</li>
                    </ul>
                </ul>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">
                    <a href="#" class="text-white text-decoration-none">📅 Cek Ketersediaan</a>
                </button>
            </div>
        </section>
    </div>
    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
