@extends('layouts.app')

@section('title', 'Surat Masuk')

@section('content')

    <h1>Daftar Surat Masuk</h1>

    <a href="{{ route('surat-masuk.create') }}">
        + Tambah Surat Masuk
    </a>

    {{-- Notifikasi berhasil --}}
    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    {{-- Menampilkan daftar surat masuk --}}
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Tanggal</th>
                <th>Pengirim</th>
                <th>Perihal</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($suratMasuk as $surat)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $surat->nomor_surat }}</td>
                    <td>{{ $surat->tanggal }}</td>
                    <td>{{ $surat->pengirim }}</td>
                    <td>{{ $surat->perihal }}</td>
                    <td>{{ $surat->keterangan }}</td>

                    <td>
                        <a href="{{ route('surat-masuk.show', $surat->id) }}">
                            Detail
                        </a>

                        |

                        <a href="{{ route('surat-masuk.edit', $surat->id) }}">
                            Edit
                        </a>

                        |

                        <form action="{{ route('surat-masuk.destroy', $surat->id) }}" method="POST" style="display:inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit" onclick="return confirm('Yakin ingin menghapus surat ini?')">
                                Hapus
                            </button>

                        </form>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="7">
                        Belum ada data surat masuk.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
