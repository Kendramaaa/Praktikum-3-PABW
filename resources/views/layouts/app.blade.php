<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>LaporBanjir - BPBD Kabupaten Bandung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f4f4;
        }

        header {
            background: #004085;
            color: white;
            padding: 15px;
            text-align: center;
        }

        nav {
            background: #0056b3;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
            background: white;
            min-height: 400px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }

        .card {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
            background: #fafafa;
        }

        .alert {
            padding: 15px;
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <header>
        <h2>Sistem Pelaporan Banjir - LaporBanjir BPBD Kabupaten Bandung</h2>
    </header>

    <nav>
        <a href="{{ route('lapor.form') }}">Form Pelaporan</a>
        <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2026 BPBD Kabupaten Bandung</p>
    </footer>

</body>

</html>