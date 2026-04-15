@extends('layouts.app')

@section('content')

<!-- HERO ELEGAN -->
<div class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-700 text-white rounded-2xl p-10 shadow-xl">

    <div class="grid md:grid-cols-2 gap-10 items-center">

        <!-- TEXT -->
        <div class="text-center md:text-left">

            <h1 class="text-4xl font-extrabold mb-3">
                Petshop Premium Online Kingdom
            </h1>

            <p class="text-slate-300 mb-6 text-lg leading-relaxed">
                Semua kebutuhan hewan peliharaan Anda dalam satu tempat.
                Produk berkualitas tinggi untuk anabul kesayangan Anda 
            </p>

            <a href="/produk"
               class="bg-amber-500 text-slate-900 px-6 py-3 rounded-lg font-bold hover:bg-amber-400 transition shadow-lg">
                Lihat Produk
            </a>

        </div>

        <!-- IMAGE -->
        <div class="flex justify-center">
            <img src="https://i.ibb.co.com/qYCrmv3R/TOKO-PETSHOP-TERDEKAT-DARI-LOKASI-SAYA.jpg"
                 alt="Petshop"
                 class="rounded-2xl shadow-2xl w-full max-w-md object-cover border-4 border-amber-500/30">
        </div>

    </div>

</div>

<!-- INFO SECTION ELEGAN -->
<div class="grid md:grid-cols-3 gap-6 mt-10">

    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition text-center border border-slate-100">
        <h3 class="font-bold text-slate-800">Produk Premium</h3>
        <p class="text-slate-500 text-sm">Kualitas terbaik untuk hewan Anda</p>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition text-center border border-slate-100">
        <h3 class="font-bold text-slate-800">Harga Terjangkau</h3>
        <p class="text-slate-500 text-sm">Kualitas tinggi dengan harga bersahabat</p>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition text-center border border-slate-100">
        <h3 class="font-bold text-slate-800">Pengiriman Cepat</h3>
        <p class="text-slate-500 text-sm">Aman dan sampai tepat waktu</p>
    </div>

</div>

@endsection