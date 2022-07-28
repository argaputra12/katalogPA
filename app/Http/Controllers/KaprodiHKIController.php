<?php

namespace App\Http\Controllers;

use App\Models\Hki;
use Illuminate\Http\Request;

class KaprodiHKIController extends Controller
{
    public function index()
    {
        return view('kaprodi.hki.index', [
            'list_hki' => Hki::all()
        ]);
    }
}
