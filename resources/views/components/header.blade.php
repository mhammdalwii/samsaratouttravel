<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel to Komodo</title>
</head>

<style>
    :root,
    [data-bs-theme=light] {
        --bs-coklat: #B59B73
    }

    .navbarku {
        color: var(--bs-coklat) !important;
    }
</style>

<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg bg-light bg-gradient py-3">
            <div class="container">
                <a class="navbar-brand text-primary fw-bold" href="/">
                    <img src="images/home/logo.png" class="img-fluid" alt="Logo"
                        style="width: 150px; height: auto;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link navbarku" href="#">Private Trips</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbarku" href="#">Open Trips</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbarku" href="#">Chat with Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script>
        window.addEventListener("scroll", function() {
            let navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("opacity-75");
            } else {
                navbar.classList.remove("opacity-75");
            }
        });
    </script>
</body>

</html>
