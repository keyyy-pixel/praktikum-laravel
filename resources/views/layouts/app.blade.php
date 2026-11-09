<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sistem Informasi Surat')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-[#FFF9F5] text-[#59434B]">

    <!-- HEADER -->
    <header class="bg-gradient-to-r from-[#F5B7C6] to-[#F9E8AE] shadow-md">

        <div class="max-w-7xl mx-auto px-6 py-5
                    flex flex-wrap items-center justify-between gap-4">

            <!-- LOGO DAN JUDUL -->
            <div class="flex items-center gap-3">



                <div>
                    <h1 class="text-xl md:text-2xl font-extrabold
                               text-[#704653]">
                        Sistem Informasi Surat
                    </h1>
                </div>

            </div>

            <!-- NAVIGASI -->
            <nav class="flex items-center flex-wrap gap-2">

                <!-- DASHBOARD -->
                <a href="{{ route('dashboard') }}"
                    class="px-4 py-2 rounded-xl font-semibold
                          transition duration-300
                   {{ request()->routeIs('dashboard') ? 'bg-white text-[#C45D7A] shadow-md' : 'text-[#704653] hover:bg-white/60' }}">

                    🏠 Dashboard

                </a>

                <!-- SURAT MASUK -->
                <a href="{{ route('surat-masuk.index') }}"
                    class="px-4 py-2 rounded-xl font-semibold
                          transition duration-300
                   {{ request()->routeIs('surat-masuk.*')
                       ? 'bg-white text-[#C45D7A] shadow-md'
                       : 'text-[#704653] hover:bg-white/60' }}">

                    📥 Surat Masuk

                </a>

                <!-- SURAT KELUAR -->
                <a href="{{ route('surat-keluar.index') }}"
                    class="px-4 py-2 rounded-xl font-semibold
                          transition duration-300
                   {{ request()->routeIs('surat-keluar.*')
                       ? 'bg-white text-[#C45D7A] shadow-md'
                       : 'text-[#704653] hover:bg-white/60' }}">

                    📤 Surat Keluar

                </a>

            </nav>

        </div>

    </header>


    <!-- KONTEN UTAMA -->
    <main class="flex-1 w-full max-w-7xl mx-auto px-6 py-8">

        @yield('content')

    </main>


    <!-- FOOTER -->
    <footer class="bg-white border-t border-[#F1D9D5] mt-auto">

        <div class="max-w-7xl mx-auto px-6 py-5 text-center">

            <p class="text-sm font-semibold text-[#967782]">
                © 2026 Sistem Informasi Surat
            </p>

            <p class="text-xs text-[#B08D96] mt-1">
                Pengelolaan Surat Masuk dan Surat Keluar
            </p>

        </div>

    </footer>

</body>

</html>
