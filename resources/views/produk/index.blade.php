@extends('layouts.app')

@php use Illuminate\Support\Str; @endphp

@section('content')

<!-- HEADER -->
<div class="flex justify-between items-center mb-6">

    <h1 class="text-2xl font-bold text-blue-900">
        Produk Petshop
    </h1>

    <a href="/produk/create"
       class="bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition">
        + Tambah
    </a>

</div>

<!-- GRID PRODUK -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    @forelse ($produk as $item)

        <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

            <!-- IMAGE -->
            <img src="{{ $item->gambar }}"
            class="w-full h-44 object-cover"
            alt="{{ $item->nama }}">

            <!-- CONTENT -->
            <div class="p-4">

                <h2 class="font-bold text-lg text-blue-900">
                    {{ $item->nama }}
                </h2>

                <p class="text-gray-600 text-sm mt-1">
                    {{ Str::limit($item->deskripsi, 60) }}
                </p>

                <p class="mt-2 font-bold text-blue-900">
                    Rp {{ number_format($item->harga, 0, ',', '.') }}
                </p>

                <!-- BUTTON -->
            <a href="/produk/{{ $item->id }}"
                class="block text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Detail
            </a>

            </div>

        </div>

    @empty

        <p class="col-span-3 text-center text-gray-500">
            Tidak ada produk
        </p>

    @endforelse

</div>

@endsection