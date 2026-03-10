<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;
//Route Perkenalan
Route::get('/perkenalan', function () {
    return '<h1>Halo! Nama saya Muhammad Vallentino Akbar</h1>
            <p>NIM: 4124040 | Prodi: Sistem Informasi</p>
            <p>Alhamdulillah Sedikit Banged Pak Pusingnya hehehe</p>
            <p>Saya siap belajar Laravel! Tapi Pelan-Pelan Ya Pak 🚀</p>';
})->name('perkenalan');

Route::get('/perkenalan-ubed', function () {
    return '<h1>Halo! Nama saya Ubedilah</h1>
            <p>Bismillah Kolaborasi</p>
            <p>Saya siap belajar Laravel! 🚀</p>';
})->name('perkenalan.ubed');

//Route Statis (Animal Dictionary)
Route::get('/about', function () {
    return "<h1>About Animal Dictionary</h1>
            <p>Website sederhana untuk mengenal berbagai jenis hewan.</p>";
})->name('about');

Route::get('/creator', function () {
    return "<h1>Creator</h1>
            <p>Muhammad Vallentino Akbar</p>
            <p>Program Studi: Sistem Informasi</p>";
})->name('creator');

Route::get('/help', function () {
    return "<h1>Help</h1>
            <p>Buka /animals untuk melihat daftar hewan.</p>";
})->name('help');

//Route Animal Dictionary (Controller)
Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
Route::get('/animals/{name}', [AnimalController::class, 'show'])->name('animals.show');

//Route Katalog Hewan
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');

//Route Profil Mahasiswa
Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/{nim}', [ProfilController::class, 'show'])->name('profil.show');