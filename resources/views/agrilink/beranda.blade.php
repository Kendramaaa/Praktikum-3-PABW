<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrilink ID - Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <style>
        .navbar-agrilink { background-color: #ffffff; padding: 15px 30px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
        .navbar-brand { font-weight: bold; color: #198754 !important; }
        .nav-link { color: #333 !important; font-weight: 500; margin-left: 20px; }
        .nav-link.active { color: #198754 !important; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-agrilink fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('agrilink.beranda') }}">
                <i class="fa-solid fa-seedling me-2 text-success fs-4"></i> Agrilink ID
            </a>
            <div class="ms-auto d-flex align-items-center">
                <a class="nav-link" href="#">Cuaca</a>
                <a class="nav-link" href="#">Edukasi</a>
                <a class="nav-link active fw-bold" href="{{ route('agrilink.marketplace') }}">Marketplace</a>
                <a class="nav-link" href="#">Login</a>
            </div>
        </div>
    </nav>

    <div class="home-page" style="margin-top: 60px;">
        <section class="hero">
            <div class="hero-overlay">
                <img src="{{ asset('images/hero-bg.jpg') }}" class="hero-img" alt="Background Pertanian" onerror="this.src=
                'https://images.unsplash.com/photo-1500937386664-56d1dfef3854?auto=format&fit=crop&w=1200&q=80'">
            </div>
            
            <div class="hero-content">
                <h1>Selamat Datang di<br>Agrilink ID</h1>
                <p>Mewujudkan masa depan pertanian digital yang lebih cerdas dan terhubung.</p>
                <a href="{{ route('agrilink.marketplace') }}" class="btn-hero">Mulai Sekarang</a>
            </div>

            <!-- Tiga Card Berada di Dalam Hero Section -->
            <div class="container px-0">
                <div class="features-preview">
                    <div class="feature-card">
                        <i class="fa-solid fa-store"></i>
                        <h3>Marketplace</h3>
                        <p>Jual beli hasil panen langsung dari petani ke konsumen.</p>
                    </div>
                    <div class="feature-card">
                        <i class="fa-solid fa-cloud-sun"></i>
                        <h3>Info Cuaca</h3>
                        <p>Pantau prakiraan cuaca akurat untuk jadwal tanam optimal.</p>
                    </div>
                    <div class="feature-card">
                        <i class="fa-solid fa-book-open"></i>
                        <h3>Edukasi</h3>
                        <p>Pelajari teknik bertani modern melalui video panduan.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>