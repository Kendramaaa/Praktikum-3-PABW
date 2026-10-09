<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgrilinkController extends Controller
{
    public function beranda()
    {
        return view('agrilink.beranda');
    }

    public function marketplace(Request $request)
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Beras Pandan Wangi',
                'category' => 'Grains',
                'price' => 15000,
                'stock' => 50,
                'status' => 'TERSEDIA',
                'image' => 'images/beras.jpg',
                'farmer_name' => 'Pak Budi',
                'farmer_phone' => '6281234567890'
            ],
            [
                'id' => 2,
                'name' => 'Jagung Manis',
                'category' => 'Grains',
                'price' => 8000,
                'stock' => 0,
                'status' => 'TIDAK TERSEDIA',
                'image' => 'images/jagung.jpg',
                'farmer_name' => 'Bu Tejo',
                'farmer_phone' => '6289876543210'
            ],
            [
                'id' => 3,
                'name' => 'Sayur Sawi Hijau',
                'category' => 'Vegetables',
                'price' => 5000,
                'stock' => 20,
                'status' => 'TERSEDIA',
                'image' => 'images/sawi.jpg',
                'farmer_name' => 'Mang Oleh',
                'farmer_phone' => '6281122334455'
            ]
        ];

        if ($request->has('category') && $request->category != '' && $request->category != 'Semua') {
            $cat = $request->category;
            $products = array_filter($products, function ($item) use ($cat) {
                return strcasecmp($item['category'], $cat) == 0;
            });
        }

        if ($request->has('search') && $request->search != '') {
            $keyword = strtolower($request->search);
            $products = array_filter($products, function ($item) use ($keyword) {
                return str_contains(strtolower($item['name']), $keyword);
            });
        }

        return view('agrilink.marketplace', compact('products'));
    }
}
