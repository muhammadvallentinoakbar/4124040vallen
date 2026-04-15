@extends('layouts.app')

@section('content')

<div class="bg-white p-6 rounded shadow">

    <img src="{{ $data->gambar }}" class="w-full h-64 sm:h-80 md:h-96 object-cover rounded-2xl shadow-lg transition duration-300 hover:scale-[1.02]">

    <h1 class="text-2xl font-bold mb-2">{{ $data->nama }}</h1>

    <p class="text-gray-600 mb-4">{{ $data->deskripsi }}</p>

    <p class="text-blue-900 font-bold text-xl">
        Rp {{ number_format($data->harga, 0, ',', '.') }}
    </p>

    <a href="/produk" class="inline-block mt-4 text-blue-600 hover:underline">
        ← Kembali
    </a>

</div>

@endsection