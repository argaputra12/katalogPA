<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarHKI extends Model
{
    use HasFactory;
    protected $table = 'daftar_hkis';
    protected $guarded = ['id'];
}
