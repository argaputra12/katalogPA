<?php

namespace App\Http\Controllers;

use App\Models\Datapengusul;
use App\Http\Requests\StoreDatapengusulRequest;
use App\Http\Requests\UpdateDatapengusulRequest;

class DatapengusulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datapengusul');
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
     * @param  \App\Http\Requests\StoreDatapengusulRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDatapengusulRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datapengusul  $datapengusul
     * @return \Illuminate\Http\Response
     */
    public function show(Datapengusul $datapengusul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datapengusul  $datapengusul
     * @return \Illuminate\Http\Response
     */
    public function edit(Datapengusul $datapengusul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDatapengusulRequest  $request
     * @param  \App\Models\Datapengusul  $datapengusul
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDatapengusulRequest $request, Datapengusul $datapengusul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datapengusul  $datapengusul
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datapengusul $datapengusul)
    {
        //
    }
}
