<?php

namespace App\Http\Controllers;

use App\Models\Mis;
use App\Http\Requests\StoreMisRequest;
use App\Http\Requests\UpdateMisRequest;

class MisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mis');
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
     * @param  \App\Http\Requests\StoreMisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mis  $mis
     * @return \Illuminate\Http\Response
     */
    public function show(Mis $mis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mis  $mis
     * @return \Illuminate\Http\Response
     */
    public function edit(Mis $mis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMisRequest  $request
     * @param  \App\Models\Mis  $mis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMisRequest $request, Mis $mis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mis  $mis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mis $mis)
    {
        //
    }
}
