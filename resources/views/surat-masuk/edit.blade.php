@extends('layouts.app')

@section('title', 'Edit Surat Masuk')

@section('content')

    <div class="max-w-3xl mx-auto">

        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">
                Edit Surat Masuk
            </h1>
            <p class="text-gray-500 mt-2">
                Perbarui informasi surat masuk.
            </p>
        </div>

        <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6 md:p-8">

            <form action="{{ route('surat-masuk.update', $surat->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="space-y-5">

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Nomor Surat
                        </label>
                        <input type="text" name="nomor_surat" value="{{ old('nomor_surat', $surat->nomor_surat) }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none"
                            required>
                        @error('nomor_surat')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Tanggal
                        </label>
                        <input type="date" name="tanggal"
                            value="{{ old('tanggal', \Carbon\Carbon::parse($surat->tanggal)->format('Y-m-d')) }}"
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
                        <input type="text" name="pengirim" value="{{ old('pengirim', $surat->pengirim) }}"
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
                        <input type="text" name="perihal" value="{{ old('perihal', $surat->perihal) }}"
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
                        <textarea name="keterangan" rows="4"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none resize-y">{{ old('keterangan', $surat->keterangan) }}</textarea>
                        @error('keterangan')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class="flex flex-col sm:flex-row gap-3 mt-8">

                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition">
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('surat-masuk.index') }}"
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold px-6 py-3 rounded-lg text-center transition">
                        Batal
                    </a>

                </div>

            </form>

        </div>

    </div>

@endsection
