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
        'pelayanan',
        'harga',
        'fasilitas_alat',
        'waktu_operasional',
        'fasilitas_rekaman',
    ];

    public function studio() {
        return $this->belongsTo('App\Studio', 'id_studio');
    }
}