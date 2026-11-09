@extends('layouts.app')

@section('title', 'Surat Masuk')

@section('content')

    <div class="space-y-6">

        <!-- Judul Halaman -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

            <div>
                <h1 class="text-3xl font-bold text-gray-800">
                    Daftar Surat Masuk
                </h1>

                <p class="text-gray-500 mt-2">
                    Kelola seluruh data surat masuk.
                </p>
            </div>

            <a href="{{ route('surat-masuk.create') }}"
                class="inline-flex items-center justify-center bg-pink-300 hover:bg-pink-400 text-white font-semibold px-5 py-3 rounded-lg shadow transition">
                + Tambah Surat Masuk
            </a>

        </div>

        <!-- Notifikasi -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-300 text-green-700 px-5 py-3 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel Surat Masuk -->
        <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">

            <div class="px-6 py-5 border-b border-gray-200">

                <h2 class="text-lg font-bold text-gray-800">
                    Data Surat Masuk
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Berikut daftar surat masuk yang telah tersimpan.
                </p>

            </div>

            <div class="overflow-x-auto">

                <table class="w-full text-sm text-left text-gray-600">

                    <thead class="bg-blue-50 text-gray-700 uppercase text-xs">

                        <tr>
                            <th class="px-6 py-4 font-bold">No</th>
                            <th class="px-6 py-4 font-bold">Nomor Surat</th>
                            <th class="px-6 py-4 font-bold">Tanggal</th>
                            <th class="px-6 py-4 font-bold">Pengirim</th>
                            <th class="px-6 py-4 font-bold">Perihal</th>
                            <th class="px-6 py-4 font-bold">Keterangan</th>
                            <th class="px-6 py-4 font-bold text-center">Aksi</th>
                        </tr>

                    </thead>

                    <tbody class="divide-y divide-gray-200">

                        @forelse ($suratMasuk as $index => $surat)
                            <tr class="hover:bg-gray-50 transition">

                                <td class="px-6 py-4">
                                    {{ $index + 1 }}
                                </td>

                                <td class="px-6 py-4 font-medium text-gray-800">
                                    {{ $surat->nomor_surat }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ \Carbon\Carbon::parse($surat->tanggal)->format('d-m-Y') }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $surat->pengirim }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $surat->perihal }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $surat->keterangan ?? '-' }}
                                </td>

                                <td class="px-6 py-4">

                                    <div class="flex items-center justify-center gap-2">

                                        <!-- Detail -->
                                        <a href="{{ route('surat-masuk.show', $surat->id) }}"
                                            class="bg-blue-100 text-blue-700 hover:bg-blue-200 px-3 py-2 rounded-md font-medium">
                                            Detail
                                        </a>

                                        <!-- Edit -->
                                        <a href="{{ route('surat-masuk.edit', $surat->id) }}"
                                            class="bg-yellow-100 text-yellow-700 hover:bg-yellow-200 px-3 py-2 rounded-md font-medium">
                                            Edit
                                        </a>

                                        <!-- Hapus -->
                                        <form action="{{ route('surat-masuk.destroy', $surat->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus surat ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="bg-red-100 text-red-700 hover:bg-red-200 px-3 py-2 rounded-md font-medium">
                                                Hapus
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                                    Belum ada data surat masuk.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

            <!-- Footer Tabel -->
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">

                <p class="text-sm text-gray-500">
                    Total surat masuk: {{ $suratMasuk->count() }} data
                </p>

            </div>

        </div>

    </div>

@endsection
