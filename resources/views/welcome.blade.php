<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farmer Connect</title>
    <style>
        .content-container {
            overflow-y: auto;
            max-height: 100vh;
        }
    </style>
    <!-- Bootstrap 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="antialiased d-flex flex-column">
    <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #1E6E3E;">
        @if (Route::has('login'))
            <div class="position-absolute top-0 end-0 p-4 text-end">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-light fw-bold">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-light fw-bold">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-light fw-bold ms-2">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="container mt-5 content-container">
            <div class="row">
                <div class="col-lg-6">
                    <a href="https://www.iexplore.com/articles/travel-guides/africa/rwanda/shopping-and-leisure" class="btn btn-lg btn-light" target="_blank">
                        <h2 class="mt-4 fs-4 fw-bold">Marketplace</h2>
                        <p class="mt-3">Discover and sell agricultural products in our online marketplace.</p>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="{{ route('video') }}" class="btn btn-lg btn-light">
                        <h2 class="mt-4 fs-4 fw-bold">Learn and Share</h2>
                        <p class="mt-3">Share your knowledge and learn from other experienced farmers.</p>
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <a href="{{ route('posts') }}" class="btn btn-lg btn-light">
                        <h2 class="mt-4 fs-4 fw-bold">Experience</h2>
                        <p class="mt-3">Join a vibrant community of farmers to exchange ideas and experiences.</p>
                    </a>
                </div>
                <div class="col-lg-6">
                        <a href="{{ route('video') }}" class="btn btn-lg btn-light">
                        <h2 class="mt-4 fs-4 fw-bold">Expert Advice</h2>
                        <p class="mt-3">Get advice from agricultural experts and improve your farming practices.</p>
                        </a>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white py-3 text-center">
        <p>&copy; <script>document.write(new Date().getFullYear())</script> Farmer Connect</p>
        <p>Find us on <a href="https://github.com/ifaustin89" class="btn btn-light btn-sm" target="_blank">GitHub</a></p>
    </footer>
    <!-- Bootstrap 5 JS CDN (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
