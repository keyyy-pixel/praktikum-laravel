@extends('layouts.app')

@section('title', 'Surat Masuk')

@section('content')

    <h1>Detail Surat Masuk</h1>

    @if ($surat)

        <p>
            <strong>Nomer Surat:</strong>
            {{ $surat['nomer_surat']}}
        </p>

        <p>
            <strong>Tanggal:</strong>
            {{ $surat['tanggal']}}
        </p>

        <p>
            <strong>Pengirim:</strong>
            {{ $surat['pengirim']}}
        </p>

        <p>
            <strong>Perihal:</strong>
            {{ $surat['perihal']}}
        </p>
    @else
        <p>Surat Tidak Ditemukan.</p>

    @endif

    <a href="{{ route('surat-masuk.index')}}">Kembali</a>

@endsection