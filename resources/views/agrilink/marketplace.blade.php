<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - Agrilink ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/marketplace.css') }}">
    <style>
        .navbar-agrilink { background-color: #ffffff; padding: 15px 30px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
        .navbar-brand { font-weight: bold; color: #198754 !important; }
        .nav-link { color: #333 !important; font-weight: 500; margin-left: 20px; }
        .nav-link.active { color: #198754 !important; }
    </style>
</head>
<body>

    <!-- Navigasi Atas -->
    <nav class="navbar navbar-expand-lg navbar-agrilink fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('agrilink.beranda') }}">
                <i class="fa-solid fa-seedling me-2 text-success fs-4"></i> Agrilink ID
            </a>
            <div class="ms-auto d-flex align-items-center">
                <a class="nav-link" href="{{ route('agrilink.beranda') }}">Cuaca</a>
                <a class="nav-link" href="#">Edukasi</a>
                <a class="nav-link active fw-bold" href="{{ route('agrilink.marketplace') }}">Marketplace</a>
                <a class="nav-link" href="#">Login</a>
            </div>
        </div>
    </nav>

    <!-- Kontainer Utama Ber-background Hijau / Gambar -->
    <div class="marketplace-page">
        <div class="marketplace-overlay">
            <img src="{{ asset('images/latar-baru.jpg') }}" class="marketplace-bg-img" alt="Background" onerror="this.src='https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=1200&q=80'">
        </div>
        
        <div class="container">
            <!-- Header Judul -->
            <div class="page-header">
                <h1>Marketplace Pertanian</h1>
                <p>Beli hasil bumi segar langsung dari para petani terbaik.</p>
            </div>

            <!-- Bagian Filter & Pencarian -->
            <div class="controls-section">
                <div class="search-box">
                    <form action="{{ route('agrilink.marketplace') }}" method="GET">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" name="search" placeholder="Cari beras, jagung, sayuran..." value="{{ request('search') }}">
                    </form>
                </div>
                <div class="category-filters">
                    <a href="{{ route('agrilink.marketplace', ['category' => 'Semua']) }}" class="{{ request('category', 'Semua') == 'Semua' ? 'active' : '' }}">Semua</a>
                    <a href="{{ route('agrilink.marketplace', ['category' => 'Grains']) }}" class="{{ request('category') == 'Grains' ? 'active' : '' }}">Grains</a>
                    <a href="{{ route('agrilink.marketplace', ['category' => 'Vegetables']) }}" class="{{ request('category') == 'Vegetables' ? 'active' : '' }}">Vegetables</a>
                    <a href="{{ route('agrilink.marketplace', ['category' => 'Fruits']) }}" class="{{ request('category') == 'Fruits' ? 'active' : '' }}">Fruits</a>
                </div>
            </div>

            <!-- Daftar Grid Produk (Sekarang Berada di Dalam Kontainer Hijau) -->
            <div class="product-grid">
                @forelse($products as $product)
                    <div class="product-card">
                        @if($product['status'] == 'TERSEDIA')
                            <span class="status-badge available">TERSEDIA</span>
                        @else
                            <span class="status-badge unavailable">TIDAK TERSEDIA</span>
                        @endif

                        <div class="card-img-wrapper">
                            <img src="{{ asset($product['image']) }}" class="card-img" alt="{{ $product['name'] }}" onerror="this.src='https://images.unsplash.com/photo-1586201375761-83865001e31c?auto=format&fit=crop&w=500&q=80'">
                        </div>

                        <div class="card-body">
                            <h3 class="card-title">{{ $product['name'] }}</h3>
                            <div class="card-price">
                                Rp {{ number_format($product['price'], 0, ',', '.') }} <span class="price-unit">/ kg</span>
                            </div>
                            
                            <div class="farmer-info">
                                <span><i class="fa-regular fa-user me-1"></i> {{ $product['farmer_name'] }}</span>
                                <span class="{{ $product['stock'] > 0 ? 'text-success fw-bold' : 'text-danger fw-bold' }}">{{ $product['stock'] }} kg ready</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="no-products">
                        <i class="fa-solid fa-box-open fa-3x mb-2"></i>
                        <p>Produk tidak ditemukan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>