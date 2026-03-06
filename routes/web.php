<?php

use Illuminate\Support\Facades\Route;

// Route pertama - Vallentino
Route::get('/perkenalan', function () {

    return '<h1>Halo! Nama saya Muhammad Vallentino Akbar</h1>

            <p>NIM: 4124040 | Prodi: Sistem Informasi</p>

            <p>Alhamdulillah Sedikit Banged Pak Pusingnya hehehe</p>

            <p>Saya siap belajar Laravel! Tapi Pelan-Pelan Ya Pak heheheh 🚀</p>';
});


// Route kedua - Ubedilah
Route::get('/perkenalan-ubed', function () {

    return '<h1>Halo! Nama saya Ubedilah</h1>

            <p>Bismillah Colaborasi</p>

            <p>Saya siap belajar Laravel! Tapi Pelan-Pelan Ya Pak heheheh 🚀</p>';
});