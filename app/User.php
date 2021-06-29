<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'telefon',
        'email',
        'password',
        'level',
        'izin',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Accessor
    public function getNameAttribute($name) {
        return ucwords($name);
    }

    // Mutator
    public function setNameAttribute($name) {
        $this->attributes['name'] = strtolower($name);
    }
}
