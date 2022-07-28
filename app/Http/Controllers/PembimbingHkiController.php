<?php

namespace App\Http\Controllers;

use App\Models\Hki;
use Illuminate\Http\Request;

class PembimbingHkiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pembimbing.hki.index', [
            'list_hki' => Hki::all()
        ]);
    }

    public function konfirmasiHKI(Request $request, Hki $hki)
    {
        Hki::where('id', $hki->id)->update([
            'konfirmasi' => $request->konfirmasi
        ]);
        return back()->with('success', "HKI Telah $request->konfirmasi !");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hki  $hki
     * @return \Illuminate\Http\Response
     */
    public function show(Hki $hki)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hki  $hki
     * @return \Illuminate\Http\Response
     */
    public function edit(Hki $hki)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hki  $hki
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hki $hki)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hki  $hki
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hki $hki)
    {
        //
    }
}
