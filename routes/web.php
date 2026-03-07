<?php

use Illuminate\Support\Facades\Route;

// Route pertama
Route::get('/perkenalan', function () {

    return '<h1>Halo! Nama saya Muhammad Vallentino Akbar</h1>

            <p>NIM: 4124040 | Prodi: Sistem Informasi</p>

            <p>Alhamdulillah Sedikit Banged Pak Pusingnya hehehe</p>

            <p>Saya siap belajar Laravel! Tapi Pelan-Pelan Ya Pak heheheh 🚀</p>';
});

// Route kedua
Route::get('/perkenalan-ubed', function () {

    return '<h1>Halo! Nama saya Ubedilah</h1>

            <p>Bismillah Colaborasi</p>

            <p>Saya siap belajar Laravel! Tapi Pelan-Pelan Ya Pak heheheh 🚀</p>';
});

// Route ketiga
Route::get('/perkenalan-sania', function () {

    return '<h1>Halo! Nama saya Sania</h1>

            <p>Bismillah Colaborasi</p>

            <p>Saya siap belajar Laravel! Tapi Pelan-Pelan Ya Pak heheheh 🚀</p>';
});

Route::get('/animal/{nama}', function ($nama) {

    $animals = [
        "singa" => [
            "jenis" => "Karnivora",
            "deskripsi" => "Singa dikenal sebagai raja hutan dan memakan daging."
        ],
        "gajah" => [
            "jenis" => "Herbivora",
            "deskripsi" => "Gajah adalah hewan darat terbesar yang memakan rumput dan daun."
        ],
        "ayam" => [
            "jenis" => "Omnivora",
            "deskripsi" => "Ayam memakan biji-bijian, serangga, dan makanan lainnya."
        ],
        "kucing" => [
            "jenis" => "Karnivora",
            "deskripsi" => "Kucing adalah hewan peliharaan yang memakan daging."
        ]
    ];

    if(array_key_exists($nama, $animals)){
        $hewan = $animals[$nama];

        return "<h1>Animal Dictionary</h1>
                <h2>Nama Hewan: $nama</h2>
                <p>Jenis: {$hewan['jenis']}</p>
                <p>Deskripsi: {$hewan['deskripsi']}</p>";
    } else {
        return "<h1>Hewan tidak ditemukan di kamus</h1>";
    }

});

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/katalog', [KatalogController::class, 'hewan']);

Route::get('/katalog/{nama}', [KatalogController::class, 'detail']);
