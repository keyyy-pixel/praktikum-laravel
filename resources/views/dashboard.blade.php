@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="mb-10">
        <h1 class="text-3xl font-bold text-rose-brown mb-2">
            Dashboard
        </h1>

        <p class="text-rose-brown text-lg">
            Selamat Datang di Sistem Informasi Surat.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- Kartu Surat Masuk -->
        <a href="{{ route('surat-masuk.index') }}"
            class="bg-white rounded-2xl shadow-md p-8 border-l-4 border-softpink-400 hover:shadow-xl hover:-translate-y-1 transition duration-300">

            <h3 class="text-xl font-semibold text-rose-brown mb-6">
                Surat Masuk
            </h3>

            <div class="text-5xl mb-6">
                📩
            </div>

            <p class="text-softpink-500 font-semibold">
                Lihat Surat Masuk →
            </p>

        </a>

        <!-- Kartu Surat Keluar -->
        <a href="{{ route('surat-keluar.index') }}"
            class="bg-white rounded-2xl shadow-md p-8 border-l-4 border-butter-300 hover:shadow-xl hover:-translate-y-1 transition duration-300">

            <h3 class="text-xl font-semibold text-rose-brown mb-6">
                Surat Keluar
            </h3>

            <div class="text-5xl mb-6">
                📤
            </div>

            <p class="text-softpink-500 font-semibold">
                Lihat Surat Keluar →
            </p>

        </a>

    </div>

@endsection
