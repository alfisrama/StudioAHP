<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    protected $table = 'bobot';
    protected $fillable = [
        'pelayanan',
        'harga',
        'fasilitas_alat',
        'waktu_operasional',
        'fasilitas_rekaman',
    ];
}
