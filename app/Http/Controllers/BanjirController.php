<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanjirController extends Controller
{
    public function form()
    {
        return view('lapor.form');
    }

    public function store(Request $request)
    {
        // Ambil data inputan form
        $newData = [
            'nama' => $request->input('nama'),
            'lokasi' => $request->input('lokasi'),
            'tinggi' => $request->input('tinggi'),
        ];

        // Simpan ke dalam session agar datanya tidak hilang
        $laporanList = session()->get('laporanList', [
            ['nama' => 'Budi Santoso', 'lokasi' => 'Bojongsoang', 'tinggi' => 25],
            ['nama' => 'Siti Rahma', 'lokasi' => 'Dayeuhkolot', 'tinggi' => 50],
        ]);

        // Masukkan data baru ke urutan paling atas
        array_unshift($laporanList, $newData);
        session()->put('laporanList', $laporanList);

        return view('lapor.konfirmasi', ['data' => $newData]);
    }

    public function index()
    {
        // Ambil data dari session, jika kosong gunakan data default
        $daftarLaporan = session()->get('laporanList', [
            ['nama' => 'Budi Santoso', 'lokasi' => 'Bojongsoang', 'tinggi' => 25],
            ['nama' => 'Siti Rahma', 'lokasi' => 'Dayeuhkolot', 'tinggi' => 50],
            ['nama' => 'Ahmad Fauzi', 'lokasi' => 'Baleendah', 'tinggi' => 85],
        ]);

        return view('lapor.index', compact('daftarLaporan'));
    }
}
