<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OutgoingLetter extends Model
{
    protected $table = 'outgoingletters';

    protected $fillable = [
        'nomor_surat',
        'tanggal',
        'pengirim',
        'perihal',
        'keterangan',
    ];
}
