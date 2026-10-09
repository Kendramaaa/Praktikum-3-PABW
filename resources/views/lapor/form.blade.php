@extends('layouts.app')

@section('content')
    <h3>Form Pelaporan Kejadian Banjir</h3>
    <form action="{{ route('lapor.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 15px;">
            <label>Nama Pelapor:</label><br>
            <input type="text" name="nama" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label>Lokasi Kejadian:</label><br>
            <input type="text" name="lokasi" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label>Tinggi Genangan (cm):</label><br>
            <input type="number" name="tinggi" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>
        <button type="submit" style="padding: 10px 20px; background: #004085; color: white; border: none; border-radius: 4px; cursor: pointer;">Kirim Laporan</button>
    </form>
@endsection