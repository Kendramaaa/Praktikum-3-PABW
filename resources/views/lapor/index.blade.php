@extends('layouts.app')

@section('content')
    <h3>Daftar Laporan Banjir</h3>

    @forelse($daftarLaporan as $laporan)
        @include('partials.laporan-card', ['laporan' => $laporan])
    @empty
        <p>Belum ada laporan banjir yang masuk.</p>
    @endforelse
@endsection