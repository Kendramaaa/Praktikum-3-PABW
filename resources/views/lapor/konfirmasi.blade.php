@extends('layouts.app')

@section('content')
    <h3>Konfirmasi Laporan Banjir</h3>

    <x-alert>
        Laporan banjir berhasil dikirim!
    </x-alert>

    <div class="card">
        <p><strong>Nama Pelapor:</strong> {{ $data['nama'] }}</p>
        <p><strong>Lokasi Kejadian:</strong> {{ $data['lokasi'] }}</p>
        <p><strong>Tinggi Genangan:</strong> {{ $data['tinggi'] }} cm</p>
    </div>

    <a href="{{ route('lapor.form') }}" style="display:inline-block; margin-top:10px; text-decoration:none; background:#0056b3; color:white; padding:8px 15px; border-radius:4px;">Kembali ke Form</a>

@endsection