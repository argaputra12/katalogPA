<?php

namespace App\Http\Controllers;

use App\Models\DaftarHKI;
use Illuminate\Http\Request;

class KaprodiHKIController extends Controller
{
    public function index()
    {
        return view('kaprodi.hki.index', [
            'list_hki' => DaftarHKI::all()
        ]);
    }
}
