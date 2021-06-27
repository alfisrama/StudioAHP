<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = [
        'id_studio',
        'id_users',
        'ruangan',
        'tanggal',
        'start',
        'durasi',
        'end',
        'harga',
        'pembayaran',
        'foto',
    ];

    protected $dates = [
        'tanggal',
        'start',
        'end',
    ];
    public function studio(){
        return $this->belongsTo('App\Studio', 'id_studio');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id_users');
    }
}
