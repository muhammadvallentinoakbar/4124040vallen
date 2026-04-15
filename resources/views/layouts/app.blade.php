<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Petshop App') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">

<!-- NAVBAR -->
<nav class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-700 text-white shadow">

    <div class="mx-auto px-6 py-4 flex items-center justify-between">

        <a href="/" class="text-xl font-bold">
            Petshop Kingdom
        </a>

        <div class="hidden md:flex items-center gap-6 text-sm">

            <a href="/" class="hover:text-blue-200">Home</a>
            <a href="/produk" class="hover:text-blue-200">Produk</a>
            <a href="/tentang" class="hover:text-blue-200">Tentang</a>
            <a href="/kontak" class="hover:text-blue-200">Kontak</a>

            <a href="/login"
               class="bg-white text-blue-900 px-4 py-2 rounded-lg font-semibold hover:bg-gray-200">
                Login
            </a>

        </div>

        <button id="menu-btn" class="md:hidden text-2xl">
            ☰
        </button>

    </div>

    <!-- MOBILE -->
    <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 flex flex-col gap-3 text-sm">

        <a href="/">Home</a>
        <a href="/produk">Produk</a>
        <a href="/tentang">Tentang</a>
        <a href="/kontak">Kontak</a>

        <a href="/login"
           class="bg-white text-blue-900 px-4 py-2 rounded-lg text-center font-semibold">
            Login
        </a>

    </div>

</nav>

<!-- CONTENT -->
<main class="flex-1 max-w-6xl mx-auto w-full px-4 py-6">

    @include('partials.alert')

    <div class="bg-white rounded-xl shadow p-6">
        @yield('content')
    </div>

</main>

<!-- FOOTER -->
<footer class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-700 text-white mt-auto">

    <div class="max-w-6xl mx-auto px-6 py-10">

        <div class="grid md:grid-cols-3 gap-8">

            <div>
                <h2 class="font-bold text-lg mb-2">Petshop Online</h2>
                <p class="text-blue-200 text-sm">
                    Toko kebutuhan hewan peliharaan: makanan, kandang, mainan.
                </p>
            </div>

            <div>
                <h3 class="font-semibold mb-2">Menu</h3>
                <ul class="text-blue-200 text-sm space-y-1">
                    <li><a href="/" class="hover:text-white">Home</a></li>
                    <li><a href="/produk" class="hover:text-white">Produk</a></li>
                    <li><a href="/tentang" class="hover:text-white">Tentang</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-2">Kontak</h3>
                <p class="text-blue-200 text-sm">
                    Email: petshop@gmail.com <br>
                    WA: 08123456788
                </p>
            </div>

        </div>

        <div class="border-t border-blue-900 mt-6 pt-4 text-center text-sm text-blue-300">
            © {{ date('Y') }} Petshop Online - Vallentino Akbar
        </div>

    </div>

</footer>

<!-- SCRIPT -->
<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    }
</script>

</body>
</html>