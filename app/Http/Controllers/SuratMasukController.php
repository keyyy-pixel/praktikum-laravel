<?php

namespace App\Http\Controllers;


class SuratMasukController extends Controller
{
    public function index()
    {
        $suratMasuk =
        [
            [
                'id'            => 1,
                'nomer_surat'   => '001/FT/X/2026',
                'tanggal'       => '01-10-2026',
                'pengirim'      => 'Fakultas Teknik',
                'perihal'       => 'Undangan Rapat'

            ],
            [
                'id'            => 2,
                'nomer_surat'   => '002/FT/X/2026',
                'tanggal'       => '02-10-2026',
                'pengirim'      => 'BAA',
                'perihal'       => 'Pemberitahuan Akademik'
            ],
            [
                'id'            => 3,
                'nomer_surat'   => '003/FT/X/2026',
                'tanggal'       => '03-10-2026',
                'pengirim'      => 'LPMM',
                'perihal'       => 'Undangan Sosialisasi'
            ]
        ];
        return view('surat-masuk.index', compact('suratMasuk'));
    }

    public function show(int $id)
    {
        //return 'Detail Surat Masuk dengan ID:' .$id;
        $surat = [
            1 =>[
                    'id'            => 1,
                    'nomer_surat'   => '001/FT/X/2026',
                    'tanggal'       => '01-10-2026',
                    'pengirim'      => 'Fakultas Teknik',
                    'perihal'       => 'Undangan Rapat'

            ],
            2 =>[
                    'id'            => 2,
                    'nomer_surat'   => '002/FT/X/2026',
                    'tanggal'       => '02-10-2026',
                    'pengirim'      => 'BAA',
                    'perihal'       => 'Pemberitahuan Akademik'
            ],
            3 =>[
                    'id'            => 3,
                    'nomer_surat'   => '003/FT/X/2026',
                    'tanggal'       => '03-10-2026',
                    'pengirim'      => 'LPMM',
                    'perihal'       => 'Undangan Sosialisasi'
            ]
        ];
        //Ambil surat berdasarkan ID
        $surat = $surat[$id] ?? null;
        return view('surat-masuk.show', compact('surat'));
    }
}

//ROUTE ->TAMPIL
//ROUTE -> CONTROLLER