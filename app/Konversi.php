<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konversi extends Model
{
    protected $table        = 'konversi';
    protected $primaryKey   = 'id_studio';
    protected $hidden       = ['created_at','updated_at'];
    protected $fillable = [
        'id_studio',
        'kelengkapan_alat', 
        'kualitas_alat', 
        'kualitas_ruangan', 
        'harga',
        'pelayanan',
        'fasilitas',
        'waktu_operasional',
        'suasana_studio', 
    ];

    public function studio() {
        return $this->belongsTo('App\Studio', 'id_studio');
    }
}