<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $trip->name }} - Easy Komodo</title>
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
            <ol class="breadcrumb p-3 rounded">
                <li class="breadcrumb-item"><a href="/" class="text-decoration-none text-secondary">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">Open Trip</a>
                </li>
                <li class="breadcrumb-item active text-primary">{{ $trip->name }}</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 mb-4">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        @foreach ($trip->images as $index => $image)
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"
                                aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($trip->images as $image)
                            <img src="{{ asset($image) }}" class="d-block w-100" alt="Trip Image">
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

        <section>
            <h1 class="mb-2">{{ $trip->name }}</h1>
            <p>
                <span class="badge bg-primary">{{ $trip->duration }} DAYS</span>
                <span class="badge bg-secondary">{{ $trip->category }}</span>
                <span class="badge bg-info">{{ $trip->language }}</span>
            </p>
            <p>{{ $trip->description }}</p>

            <h3 class="mt-4">Itinerary 3 Days 2 Nights</h3>
            @foreach ($trip->itinerary as $day => $activities)
                <h6>{{ $day }}</h6>
                <ul>
                    @foreach ($activities as $activity)
                        <li>{{ $activity }}</li>
                    @endforeach
                </ul>
            @endforeach
        </section>

        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button">
                <a href="#" class="text-white text-decoration-none">📅 Cek Ketersediaan</a>
            </button>
        </div>
    </div>

    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
