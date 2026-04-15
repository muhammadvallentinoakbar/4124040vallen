@extends('layouts.app')

@section('content')

<!-- HERO -->
<div class="bg-slate-800 text-white py-20">
    <div class="max-w-6xl mx-auto text-center px-4">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
            Tentang Kami
        </h1>
        <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto">
            Kami menyediakan berbagai kebutuhan terbaik untuk kucing Anda dengan kualitas unggulan, harga terjangkau, dan pelayanan maksimal.
        </p>
    </div>
</div>

<!-- CONTENT -->
<div class="bg-slate-800 py-16">
    <div class="max-w-6xl mx-auto px-4">

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div class="bg-white rounded-2xl p-6 shadow hover:shadow-xl transition border-t-4 border-gray-800">
                <h3 class="text-xl font-bold mb-2 text-gray-800">Produk Berkualitas</h3>
                <p class="text-gray-600 text-sm">
                    Kami menyediakan produk terbaik mulai dari makanan, kandang, hingga aksesoris kucing dengan kualitas terjamin.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl p-6 shadow hover:shadow-xl transition border-t-4 border-gray-800">
                <h3 class="text-xl font-bold mb-2 text-gray-800">Harga Terjangkau</h3>
                <p class="text-gray-600 text-sm">
                    Harga yang kompetitif dan ramah di kantong tanpa mengurangi kualitas produk yang kami tawarkan.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl p-6 shadow hover:shadow-xl transition border-t-4 border-gray-800">
                <h3 class="text-xl font-bold mb-2 text-gray-800">Pelayanan Terbaik</h3>
                <p class="text-gray-600 text-sm">
                    Pelayanan cepat, ramah, dan profesional untuk memberikan pengalaman terbaik bagi pelanggan.
                </p>
            </div>

        </div>

    </div>
</div>

@endsection