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
                            <img src="/images/detail/deluxe01/1.jpeg" class="d-block w-100 img-carousel" alt="kapal1">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/detail/deluxe01/2.jpeg" class="d-block w-100 img-carousel" alt="kapal3">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/detail/deluxe01/3.jpeg" class="d-block w-100 img-carousel" alt="kapal4">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/detail/deluxe01/4.jpeg" class="d-block w-100 img-carousel" alt="kapal5">
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
            <h1 class="mb-2">Deluxe Phinisi Sailing Komodo Tour</h1>
            <div class="col-md-12 mt-3 ">
                <p>
                    <span class="badge bg-primary">3 DAYS</span>
                    <span class="badge bg-secondary">SHARE TRIP</span>
                    <span class="badge bg-info">ENGLISH</span>
                </p>
                <p>The <strong>Deluxe</strong> boat is a Deluxe category phinisi. Has 6 cabins for a total of 15
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
                    <!-- Master Cabin -->
                    <div class="col">
                        <div class="card border-0 shadow-sm">
                            <div class="ratio ratio-4x3">
                                <img src="/images/detail/deluxe01/5.jpeg" class="card-img-top rounded"
                                    alt="Master Cabin" style="object-fit: cover;">
                            </div>
                            <div class="card-body text-center">
                                <h6 class="fw-bold">2 Master Cabin</h6>
                                <p class="mb-1 text-muted">2-3 Guest</p>
                                <p class="fw-semibold text-dark">Rp 4.350.000 / Guest</p>
                            </div>
                        </div>
                    </div>

                    <!-- Private Cabin -->
                    <div class="col">
                        <div class="card border-0 shadow-sm">
                            <div class="ratio ratio-4x3">
                                <img src="/images/detail/deluxe01/7.jpeg" class="card-img-top rounded"
                                    alt="Private Cabin" style="object-fit: cover;">
                            </div>
                            <div class="card-body text-center">
                                <h6 class="fw-bold"> 2 Private Cabin</h6>
                                <p class="mb-1 text-muted">2 Guest</p>
                                <p class="fw-semibold text-dark">Rp 3.850.000 / Guest</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="ratio ratio-4x3">
                                <img src="/images/detail/deluxe01/6.jpg" class="card-img-top" alt="sharingCabin"
                                    style="object-fit: cover;">
                            </div>
                            <div class="card-body text-center">
                                <h6 class="fw-bold">2 Sharing Cabin</h6>
                                <p class="mb-1 text-muted"> 4 Guest</p>
                                <p class="fw-semibold text-dark">Rp 3.350.000 / Guest</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="ratio ratio-4x3">
                                <img src="/images/detail/deluxe01/4.jpeg" class="card-img-top" alt="sharingCabin"
                                    style="object-fit: cover;">
                            </div>
                            <div class="card-body text-center">
                                <h6 class="fw-bold">Extrabed</h6>
                                <p class="mb-1 text-muted"> 1 Guest</p>
                                <p class="fw-semibold text-dark">Rp 2.750.000 / Guest</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-4">Itinerary 3 Days 2 Nighs</h3>
                <h6>Day 1 – Pick up from Hotel or Airport, Transfer to Harbor, Kelor Island, Manjarite Island & Kalong
                    Island</h6>
                <ul class="mt-2">
                    <li>Start 10.00 - 11.00</li>
                    <li>Trekking at Kelor Island</li>
                    <li>Snorkeling at Manjarite Island</li>
                    <li>Sight seeing at Kalong Island</li>
                </ul>
                <h6> Day 2 – Padar Island, Pink beach, Komodo dragon, Manta Point & Taka Makassar</h6>
                <ul class="mt-2">
                    <li>Trekking at Padar Island</li>
                    <li>Snorkeling at Pink Beach/Long Beach</li>
                    <li>Trekking at Komodo/rinca Island</li>
                    <li>Snorkeling at Takamakassar</li>
                    <li>Snorkeling at Manta Point</li>
                </ul>
                <h6>Day 3 – Kanawa Island & Transfer to Hotel or Airport</h6>
                <ul>
                    <li>Snorkeling at Kanawa Island</li>
                    <li>Snorkeling at Siaba/Sebayur Island</li>
                    <li>Finish 11.00-12.00</li>
                </ul>
            </div>
            <h3 class="mt-2">Include:</h3>
            <ul>
                <li>Boat 3D2N</li>
                <li>Transportation in-out harbour</li>
                <li>Full meals and drinks</li>
                <li>Snorkeling kit</li>
                <li>Life jacket</li>
                <li>Tour guide and ranger</li>
                <li>Documentation (Mirrorless, GoPro & Drone)</li>
            </ul>
            <h3 class="mt-2">Exclude:</h3>
            <ul>
                <li>Flight tickets</li>
                <li>Personal expenses</li>
                <li>Travel Insurance</li>
                <li>Hotel (before or after sail)</li>
                <li>Tipping Guide</li>
                <li>Komodo National Entrance Fee</li>
                <ul style="list-style-type:circle">
                    <li>Domestic : IDR 300.000-400.000</li>
                    <li>Foreigner : IDR 600.000-700.000</li>
                </ul>
            </ul>
        </section>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button"><a href="#"
                    class="text-white text-decoration-none">📅 Cek
                    Ketersediaan</a></button>
        </div>
    </div>
    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
