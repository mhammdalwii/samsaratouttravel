<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amore - Easy Komodo</title>
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
                <li class="breadcrumb-item active text-primary">Amore</li>
            </ol>
        </nav>
        <div class="row">
            <!-- Kolom Gambar -->
            <div class="col-md-12 mb-4">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/detail/luxury03/1.png" class="d-block w-100 img-carousel" alt="kapal1">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/detail/luxury03/2.jpg" class="d-block w-100 img-carousel" alt="kapal3">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/detail/luxury03/3.jpg" class="d-block w-100 img-carousel" alt="kapal4">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/detail/luxury03/4.jpg" class="d-block w-100 img-carousel" alt="kapal5">
                        </div>
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
            <h1 class="mb-2">Luxury Phinisi Sailing Komodo Tour</h1>
            <div class="col-md-12 mt-3 ">
                <p>
                    <span class="badge bg-primary">3 DAYS</span>
                    <span class="badge bg-secondary">SHARE TRIP</span>
                    <span class="badge bg-info">ENGLISH</span>
                </p>
                <p>The <strong>Luxury</strong> boat is a Luxurycategory phinisi. Has 6 cabins for a total of 15
                    person. Departures on every Monday and Friday.</p>
                <p><strong>Location:</strong> Labuan Bajo, Indonesia</p>

                <div class="btn-group text-center justify-content-center d-flex" role="group"
                    aria-label="Basic example">
                    <button type="button" class="btn btn-secondary">Year 2021</button>
                    <button type="button" class="btn btn-secondary">Speed 7-8 Knots</button>
                    <button type="button" class="btn btn-secondary">Width 4.7m</button>
                    <button type="button" class="btn btn-secondary">Large 26.5m</button>
                </div>
                <p class="mt-3">Check the following available rooms:</p>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

                    <div class="col">
                        <div class="card border-0 shadow-sm">
                            <div class="ratio ratio-4x3">
                                <img src="/images/detail/luxury03/5.jpg" class="card-img-top rounded" alt="Master Cabin"
                                    style="object-fit: cover;">
                            </div>
                            <div class="card-body text-center">
                                <h6 class="fw-bold">4 Manta Cabin</h6>
                                <p class="mb-1 text-muted">2-3 Guest</p>
                                <p class="fw-semibold text-dark">Rp 6.850.000 / Guest</p>
                            </div>
                        </div>
                    </div>

                    <!-- Private Cabin -->
                    <div class="col">
                        <div class="card border-0 shadow-sm">
                            <div class="ratio ratio-4x3">
                                <img src="/images/detail/luxury02/6.jpg" class="card-img-top rounded"
                                    alt="Private Cabin" style="object-fit: cover;">
                            </div>
                            <div class="card-body text-center">
                                <h6 class="fw-bold"> 2 Turtle Cabin</h6>
                                <p class="mb-1 text-muted"> 2 Guest</p>
                                <p class="fw-semibold text-dark">Rp 5.850.000 / Guest</p>
                            </div>
                        </div>
                    </div>
                </div>
                <x-iternary></x-iternary>
            </div>
            <x-footer />
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
