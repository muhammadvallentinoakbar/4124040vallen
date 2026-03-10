<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
   public function index()
{
    $hewan = [
        ['id'=>1,'nama'=>'Singa','jenis'=>'Karnivora'],
        ['id'=>2,'nama'=>'Gajah','jenis'=>'Herbivora'],
        ['id'=>3,'nama'=>'Harimau','jenis'=>'Karnivora'],
        ['id'=>4,'nama'=>'Sapi','jenis'=>'Herbivora'],
        ['id'=>5,'nama'=>'Ayam','jenis'=>'Omnivora']
    ];

    return view('katalog.index', compact('hewan'));
}

    public function show($id)
{
    $hewan = [
        1 => ['nama' => 'Singa', 'jenis' => 'Karnivora', 'deskripsi' => 'Singa dikenal sebagai raja hutan dan hidup berkelompok.'],
        2 => ['nama' => 'Gajah', 'jenis' => 'Herbivora', 'deskripsi' => 'Gajah adalah mamalia darat terbesar di dunia.'],
        3 => ['nama' => 'Harimau', 'jenis' => 'Karnivora', 'deskripsi' => 'Harimau memiliki tubuh kuat dan belang hitam.'],
        4 => ['nama' => 'Sapi', 'jenis' => 'Herbivora', 'deskripsi' => 'Sapi adalah hewan ternak yang memakan rumput.'],
        5 => ['nama' => 'Ayam', 'jenis' => 'Omnivora', 'deskripsi' => 'Ayam memakan biji-bijian dan serangga.']
    ];

    $data = $hewan[$id];

    return view('katalog.show', compact('data','id'));
}
}