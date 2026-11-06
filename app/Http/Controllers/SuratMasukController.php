<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomingLetter;

class SuratMasukController extends Controller
{
    // Menampilkan daftar surat masuk
    public function index()
    {
        $suratMasuk = IncomingLetter::orderBy('id', 'desc')->get();

        return view('surat-masuk.index', compact('suratMasuk'));
    }

    // Menampilkan halaman tambah surat
    public function create()
    {
        return view('surat-masuk.create');
    }

    // Menyimpan surat masuk
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_surat' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'pengirim' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        IncomingLetter::create($validated);

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat Berhasil Ditambahkan.');
    }

    // Menampilkan detail surat
    public function show(int $id)
    {
        $surat = IncomingLetter::findOrFail($id);

        return view('surat-masuk.show', compact('surat'));
    }

    // Menampilkan halaman edit surat
    public function edit($id)
    {
        $surat = IncomingLetter::findOrFail($id);

        return view('surat-masuk.edit', compact('surat'));
    }

    // Memperbarui data surat
    public function update(Request $request, $id)
    {
        $surat = IncomingLetter::findOrFail($id);

        $validated = $request->validate([
            'nomor_surat' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'pengirim' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        $surat->update($validated);

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat Berhasil Diperbaharui.');
    }

    // Menghapus surat
    public function destroy($id)
    {
        $surat = IncomingLetter::findOrFail($id);

        $surat->delete();

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat Berhasil Dihapus.');
    }
}
