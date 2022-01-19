<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $table = 'studio';
    protected $fillable = [
        'nama_studio',
        'telefon',
        'jumlah_ruangan',
        'fasilitas_alat',
        'fasilitas_rekaman',
        'harga',
        'buka',
        'tutup',
        'id_users',
        'foto',
        'alamat',
    ];

    protected $dates = [
        'created_at'
    ];

    public function konversi(){
        return $this->hasOne('App\Konversi','id_studio');
    }

    public function users() {
        return $this->belongsTo('App\User', 'id_users');
    }

    // Accessor
    public function getNamaStudioAttribute($nama_studio) {
        return ucwords($nama_studio);
    }

    // Mutator
    public function setNamaStudioAttribute($nama_studio) {
        $this->attributes['nama_studio'] = strtolower($nama_studio);
    }
}
