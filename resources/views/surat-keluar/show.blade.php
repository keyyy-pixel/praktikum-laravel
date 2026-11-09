@extends('layouts.app')

@section('title', 'Detail Surat Keluar')

@section('content')

    <div class="max-w-3xl mx-auto">

        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Detail Surat Keluar</h1>
            <p class="text-gray-500 mt-2">Informasi lengkap surat keluar.</p>
        </div>

        <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">

            <div class="bg-pink-400 px-6 py-5">
                <h2 class="text-xl font-bold text-white">Informasi Surat</h2>
                <p class="text-blue-100 text-sm mt-1">Detail data surat yang tersimpan.</p>
            </div>

            <div class="p-6 md:p-8 space-y-5">

                <div class="border-b border-gray-100 pb-4">
                    <p class="text-sm text-gray-500 mb-1">Nomor Surat</p>
                    <p class="font-semibold text-gray-800">
                        {{ $surat->nomor_surat }}
                    </p>
                </div>

                <div class="border-b border-gray-100 pb-4">
                    <p class="text-sm text-gray-500 mb-1">Tanggal</p>
                    <p class="font-semibold text-gray-800">
                        {{ \Carbon\Carbon::parse($surat->tanggal)->format('d-m-Y') }}
                    </p>
                </div>

                <div class="border-b border-gray-100 pb-4">
                    <p class="text-sm text-gray-500 mb-1">Pengirim</p>
                    <p class="font-semibold text-gray-800">
                        {{ $surat->pengirim }}
                    </p>
                </div>

                <div class="border-b border-gray-100 pb-4">
                    <p class="text-sm text-gray-500 mb-1">Perihal</p>
                    <p class="font-semibold text-gray-800">
                        {{ $surat->perihal }}
                    </p>
                </div>

                <div class="pb-2">
                    <p class="text-sm text-gray-500 mb-1">Keterangan</p>
                    <p class="font-semibold text-gray-800">
                        {{ $surat->keterangan ?? '-' }}
                    </p>
                </div>

            </div>

            <div class="bg-gray-50 border-t border-gray-200 px-6 py-4 flex flex-wrap gap-3">

                <a href="{{ route('surat-keluar.index') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold px-5 py-3 rounded-lg transition">
                    Kembali
                </a>

                <a href="{{ route('surat-keluar.edit', $surat->id) }}"
                    class="bg-pink-300 hover:bg-pink-400 text-white font-semibold px-5 py-3 rounded-lg transition">
                    Edit Surat
                </a>

            </div>

        </div>

    </div>

@endsection
