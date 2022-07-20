<?php

namespace App\Http\Controllers;

use App\Models\Formpengusul;
use App\Http\Requests\StoreFormpengusulRequest;
use App\Http\Requests\UpdateFormpengusulRequest;

class FormpengusulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formpengusul');
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
     * @param  \App\Http\Requests\StoreFormpengusulRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormpengusulRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formpengusul  $formpengusul
     * @return \Illuminate\Http\Response
     */
    public function show(Formpengusul $formpengusul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formpengusul  $formpengusul
     * @return \Illuminate\Http\Response
     */
    public function edit(Formpengusul $formpengusul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormpengusulRequest  $request
     * @param  \App\Models\Formpengusul  $formpengusul
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormpengusulRequest $request, Formpengusul $formpengusul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formpengusul  $formpengusul
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formpengusul $formpengusul)
    {
        //
    }
}
