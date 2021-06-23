<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    protected $table = 'bobot';
    protected $fillable = [
        'kelengkapan_alat',
        'kualitas_alat',
        'kualitas_ruangan',
        'harga',
        'pelayanan',
        'fasilitas',
        'waktu_operasional',
        'suasana_studio',
    ];
}
