@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>

<form action="/produk" method="POST" class="space-y-3">
    @csrf

    <input type="text" name="nama" placeholder="Nama"
           class="w-full border p-2 rounded">

    <textarea name="deskripsi" placeholder="Deskripsi"
              class="w-full border p-2 rounded"></textarea>

    <input type="number" name="harga" placeholder="Harga"
           class="w-full border p-2 rounded">

    <button class="bg-blue-900 text-white px-4 py-2 rounded">
        Simpan
    </button>

</form>

@endsection