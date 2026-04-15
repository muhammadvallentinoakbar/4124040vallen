@extends('layouts.app')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">

    <div class="bg-white p-10 rounded-2xl shadow-md max-w-md w-full text-center">

        <!-- Icon -->
        <div class="text-6xl mb-4 text-blue-900">
        </div>

        <!-- Title -->
        <h1 class="text-3xl font-bold text-gray-800 mb-2">
           404 Halaman Tidak Ditemukan
        </h1>

        <!-- Subtitle -->
        <p class="text-gray-500 mb-6">
            Maaf, halaman yang Anda cari tidak tersedia atau sudah dipindahkan.
        </p>

        <!-- Buttons -->
        <div class="flex flex-col gap-3">

            <a href="/"
               class="bg-blue-900 text-white py-2 rounded-lg hover:bg-blue-800 transition font-semibold">
                Kembali ke Beranda
            </a>

            <a href="/produk"
               class="border border-blue-900 text-blue-900 py-2 rounded-lg hover:bg-blue-900 hover:text-white transition font-semibold">
                Lihat Produk
            </a>

        </div>

        <!-- Footer small text -->
        <p class="text-xs text-gray-400 mt-6">
            Error 404 • E-commerce system
        </p>

    </div>

</div>

@endsection