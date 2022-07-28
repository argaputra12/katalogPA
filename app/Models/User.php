<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $guarded = ['id'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function hki()
    {
        return $this->hasMany(Hki::class);
    }

    public function katalog()
    {
        return $this->hasMany(Katalog::class);
    }

    public function daftarHki()
    {
        return $this->hasMany(DaftarHKI::class);
    }
}
