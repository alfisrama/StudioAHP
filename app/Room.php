<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table        = 'rooms';
    protected $primaryKey   = 'id_booking';
    protected $fillable = [
        'id_booking',
        'id_studio', 
        'ruangan', 
        'tanggal', 
        'start',
        'end',
    ];

    public function booking() {
        return $this->belongsTo('App\Booking', 'id_booking');
    }
}
