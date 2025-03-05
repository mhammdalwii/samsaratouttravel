<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel to Komodo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        .faq-container {
            width: 80%;
            margin: 50px auto;
            /* Pusatkan elemen */
        }

        .accordion-body {
            text-align: justify;
        }
    </style>
</head>

<body class="bg-light">
    <x-header></x-header>
    <main class="position-relative vh-100 bg-dark text-white"
        style="background: url('/images/utama.jpg') no-repeat center center/cover;">
        <div class="position-absolute top-50 start-50 translate-middle text-center bg-dark bg-opacity-50 p-5 rounded">
            <h2 class="display-4 fw-bold">Travel to Komodo 2025</h2>
            <p class="mt-3 fs-5">Komodo Tours, Enjoy a live on board trip, is Easy</p>
            <a href="#" class="btn btn-primary mt-4 px-4 py-2">Mulai Disini</a>
        </div>
    </main>

    <section class="py-5 bg-body text-dark">
        <div class="container">
            <h2 class="text-center mb-4">Open Trip 3 days 2 Nights</h2>
            <p class="text-center text-muted mb-5">Choose a Ship, Departing Every Friday and Monday</p>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="ratio ratio-4x3">
                            <img src="/images/kapal1/kapal1.jpg" class="card-img-top img-fluid" alt="Amore">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Superior 01</h5>
                            <p class="card-text text-muted">dari Rp 3.350.000<br>max 15 orang</p>
                            <a href="{{ route('detail.amore') }}" class="btn btn-primary mt-4 px-4 py-2">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="ratio ratio-4x3">
                            <img src="/images/superior02/superior02.jpg" class="card-img-top img-fluid" alt="Amore">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Superior 02</h5>
                            <p class="card-text text-muted">dari Rp 3.350.000<br>max 15 orang</p>
                            <a href="{{ route('detail.superior02') }}" class="btn btn-primary mt-4 px-4 py-2">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="ratio ratio-4x3">
                            <img src="/images/superior03/superior03.jpg" class="card-img-top img-fluid" alt="Amore">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Superior 03</h5>
                            <p class="card-text text-muted">dari Rp 3.350.000<br>max 15 orang</p>
                            <a href="{{ route('detail.superior03') }}" class="btn btn-primary mt-4 px-4 py-2">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="ratio ratio-4x3">
                            <img src="/images/deluxe/deluxe01.jpeg" class="card-img-top img-fluid" alt="Amore">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Deluxe 01</h5>
                            <p class="card-text text-muted">dari Rp 3.350.000<br>max 15 orang</p>
                            <a href="{{ route('detail.deluxe01') }}" class="btn btn-primary mt-4 px-4 py-2">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="ratio ratio-4x3">
                            <img src="/images/deluxe/deluxe02.png" class="card-img-top img-fluid" alt="Amore">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Deluxe 02</h5>
                            <p class="card-text text-muted">dari Rp 3.350.000<br>max 15 orang</p>
                            <a href="{{ route('detail.deluxe02') }}" class="btn btn-primary mt-4 px-4 py-2">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="ratio ratio-4x3">
                            <img src="/images/deluxe/deluxe03.jpeg" class="card-img-top img-fluid" alt="Amore">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Deluxe 03</h5>
                            <p class="card-text text-muted">dari Rp 3.350.000<br>max 15 orang</p>
                            <a href="{{ route('detail.deluxe03') }}" class="btn btn-primary mt-4 px-4 py-2">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="ratio ratio-4x3">
                            <img src="/images/luxury/luxury01.jpg" class="card-img-top img-fluid" alt="Amore">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Luxury 01</h5>
                            <p class="card-text text-muted">dari Rp 3.350.000<br>max 15 orang</p>
                            <a href="{{ route('detail.luxury01') }}" class="btn btn-primary mt-4 px-4 py-2">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="ratio ratio-4x3">
                            <img src="/images/luxury/luxury02.jpg" class="card-img-top img-fluid" alt="Amore">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Luxury 02</h5>
                            <p class="card-text text-muted">dari Rp 3.350.000<br>max 15 orang</p>
                            <a href="{{ route('detail.luxury02') }}" class="btn btn-primary mt-4 px-4 py-2">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="ratio ratio-4x3">
                            <img src="/images/luxury/luxury02.jpg" class="card-img-top img-fluid" alt="Amore">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Luxury 03</h5>
                            <p class="card-text text-muted">dari Rp 3.350.000<br>max 15 orang</p>
                            <a href="{{ route('detail.luxury03') }}" class="btn btn-primary mt-4 px-4 py-2">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="{{ route('boats.index') }}" class="btn btn-primary btn-md">Lihat Semua Kapal</a>
            </div>
        </div>
    </section>
    <section class="py-5 d-flex justify-content-center align-items-center flex-column flex-md-row ">
        <div class=" order-md-2 ">
            <img src="images/home/utama1.jpg" class="img-fluid rounded shadow-lg" alt="Komodo Island"
                style="width: 450px; max-width: 100%;">
        </div>
        <div class="bg-white shadow-lg rounded p-4 text-center z-3" style="max-width: 500px;">
            <h2 class="text-primary">Halo!</h2>
            <p class="text-secondary">
                Kami akan membantu kamu untuk planning perjalanan kamu di Komodo (Labuan Bajo),
                melalui Easy Komodo, kamu bisa memilih kapal yang sesuai dengan Style Travelling kamu.
            </p>
            <a href="#" class="btn btn-primary fw-bold">Mulai Sekarang!</a>
        </div>
    </section>
    <div class="faq-container">
        <section class=" justify-content-center align-items-center text-center mx-auto ">
            <div class="mb-5">
                <h2>FAQ</h2>
                <h5>Find here the answers to your questions to travel to Komodo</h5>
            </div>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            What should I bring with me?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            Since the weather is usually sunny, you will spend most of the stay in bathing suits, so
                            bring even a few of them. You will spend most time on board barefoot, but it’s good to pack
                            some flip-flops and trainers for hikes. Occasionally, it can get a little bit cool in the
                            evenings, so a light top is useful to have. We recommend to use rash-vests as they are a
                            great solution to limit the use of sunblock. Avoid suitcases if possible and try to use soft
                            collapsible bags
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            What is the destination airport when purchasing a flight ticket?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            To join the Komodo tour, you must buy a flight ticket to Komodo Airport, Labuan Bajo,
                            Flores, NTT. Most flights will transit in Denpasar, Bali, and then continue to Labuan Bajo.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            Where is the meeting point?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            In Labuan Bajo, Flores, NTT, Indonesia. The meeting point is located at the Pelni harbor, 10
                            minutes from Komodo Airport. All participants will be picked up from their respective
                            locations half an hour before the trip.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFour">
                            What if there are large waves?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            The Komodo National Park cruise sails in bay waters, so the waves and currents are generally
                            calm.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFive">
                            Why do reservations need to send a photo of their ID card/passport?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Photo ID/Passport is required for boat permits as a mandatory requirement from the
                            government
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseSix">
                            How do I book a seat for an open trip?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <h6>A. Please confirm the availability of the trip first. </h6>
                            <h6>B. Reservations cannot be made without a down payment.</h6>
                            <h6>C. Payment is made in two steps:</h6>
                            <ul>
                                <li>A 50% deposit is required.</li>
                                <li>The remaining balance must be paid a maximum of 14 days before the trip.</li>
                                - Payments should be made to:
                                <ul>
                                    <li>Recipient Bank: Bank Negara Indonesia (BNI)</li>
                                    <li>Account Number: 6230719994</li>
                                    <li>Account Name: PT Samsara Kreatif Indonesia</li>
                                    <li>Swiftcode: BNINIDJAXXX</li>
                                </ul>
                                - Please confirm payment via WhatsApp at +62 822-9222-9450 by sending the proof of
                                transfer. </br>
                                - Samsara Komodo provides documentation, and each participant agrees to be recorded and
                                photographed during the trip. Indonesia Juara has the right to use this content for
                                social media promotion purposes.
                                By registering, participants agree to the terms and conditions for the trip.
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseSeven">
                            How to choose boat in komodo?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Please contact our Customer Service, we are ready to help you to choose the boat for your
                            trip in Komodo, <a href="http://wa.link/o01g10">Text me here</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
