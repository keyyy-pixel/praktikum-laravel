<?php

namespace App\Http\Controllers;

use App\Models\Outgoingletter;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $suratKeluar = OutgoingLetter::all();
        return view('surat-keluar.index', compact('suratKeluar'));
    }

    public function show(int $id)
    {
        $suratKeluar = [
            1 => [
                'id' => 1,
                'nomer_surat' => '001/SK/FT/X/2026',
                'tanggal' => '10-10-2026',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'Undangan Rapat'
            ],
            2 => [
                'id' => 2,
                'nomer_surat' => '002/SK/FT/X/2026',
                'tanggal' => '12-10-2026',
                'pengirim' => 'BAA',
                'perihal' => 'Pemberitahuan Akademik'
            ],
            3 => [
                'id' => 3,
                'nomer_surat' => '003/SK/FT/X/2026',
                'tanggal' => '15-10-2026',
                'pengirim' => 'LPMM',
                'perihal' => 'Undangan Sosialisasi'
            ]
        ];

        $surat = $suratKeluar[$id] ?? null;

        if (!$surat) {
            abort(404);
        }

        return view('surat-keluar.show', compact('surat'));
    }
}
