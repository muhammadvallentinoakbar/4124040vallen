<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $produk = [
            (object)[
                'id' => 1,
                'nama' => 'Whiskas',
                'deskripsi' => 'Makanan kucing berkualitas untuk kesehatan kucing.',
                'harga' => 10000,
                'gambar' => 'https://i.ibb.co.com/zV2570qy/2a06b0ff44cf72b790ca7aae4f97af8a-jpg-720x720q80.jpg'
            ],
            (object)[
                'id' => 2,
                'nama' => 'Kandang Kucing',
                'deskripsi' => 'Kandang kucing lipat yang kuat dan nyaman.',
                'harga' => 150000,
                'gambar' => 'https://i.ibb.co.com/BHdHw0Gr/b400159-cat-it-voyageur-100-small-pink-white-kandang-kucing-1-1.jpg'
            ],
            (object)[
                'id' => 3,
                'nama' => 'Cat Toy',
                'deskripsi' => 'Mainan kucing agar tetap aktif dan tidak bosan.',
                'harga' => 35000,
                'gambar' => 'https://i.ibb.co.com/Psd6173Y/2991915-1-83997.jpg'
            ]
        ];

        // SEARCH
        if ($request->filled('search')) {
            $keyword = strtolower($request->search);

            $produk = array_filter($produk, function ($item) use ($keyword) {
                return str_contains(strtolower($item->nama), $keyword);
            });

            $produk = array_values($produk);
        }

        return view('produk.index', compact('produk'));
    }

    public function show($id)
    {
        $produk = $this->index(request())->getData()['produk'] ?? [];

        $data = collect($produk)->firstWhere('id', (int)$id);

        if (!$data) {
            abort(404);
        }

        return view('produk.detail', compact('data'));
    }

    public function create()
    {
        return view('produk.create');
    }
}