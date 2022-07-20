<?php

namespace App\Http\Controllers;

use App\Models\DaftarHKI;
use App\Http\Requests\StoreDaftarHKIRequest;
use App\Http\Requests\UpdateDaftarHKIRequest;

class DaftarHKIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('daftarHKI');
        //
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
     * @param  \App\Http\Requests\StoreDaftarHKIRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDaftarHKIRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DaftarHKI  $daftarHKI
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarHKI $daftarHKI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DaftarHKI  $daftarHKI
     * @return \Illuminate\Http\Response
     */
    public function edit(DaftarHKI $daftarHKI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDaftarHKIRequest  $request
     * @param  \App\Models\DaftarHKI  $daftarHKI
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDaftarHKIRequest $request, DaftarHKI $daftarHKI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarHKI  $daftarHKI
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftarHKI $daftarHKI)
    {
        //
    }
}
