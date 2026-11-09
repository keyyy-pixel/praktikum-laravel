@extends('layouts.app')

@section('title', 'Tambah Surat Keluar')

@section('content')

    <div class="max-w-3xl mx-auto">

        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Tambah Surat Keluar</h1>
            <p class="text-gray-500 mt-2">Masukkan informasi surat keluar baru.</p>
        </div>

        <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6 md:p-8">

            <form action="{{ route('surat-keluar.store') }}" method="POST">
                @csrf

                <div class="space-y-5">

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Nomor Surat
                        </label>
                        <input type="text" name="nomor_surat" value="{{ old('nomor_surat') }}"
                            placeholder="Contoh: 004/FT/X/2026"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                            required>
                        @error('nomor_surat')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Tanggal
                        </label>
                        <input type="date" name="tanggal" value="{{ old('tanggal') }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none"
                            required>
                        @error('tanggal')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Pengirim
                        </label>
                        <input type="text" name="pengirim" value="{{ old('pengirim') }}"
                            placeholder="Masukkan nama pengirim"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none"
                            required>
                        @error('pengirim')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Perihal
                        </label>
                        <input type="text" name="perihal" value="{{ old('perihal') }}"
                            placeholder="Masukkan perihal surat"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none"
                            required>
                        @error('perihal')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Keterangan
                        </label>
                        <textarea name="keterangan" rows="4" placeholder="Masukkan keterangan tambahan..."
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none resize-y">{{ old('keterangan') }}</textarea>
                        @error('keterangan')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class="flex flex-col sm:flex-row gap-3 mt-8">
                    <button type="submit"
                        class="bg-pink-300 hover:bg-pink-400 text-white font-semibold px-6 py-3 rounded-lg shadow transition">
                        Simpan Surat
                    </button>

                    <a href="{{ route('surat-keluar.index') }}"
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold px-6 py-3 rounded-lg text-center transition">
                        Batal
                    </a>
                </div>

            </form>

        </div>

    </div>

@endsection
