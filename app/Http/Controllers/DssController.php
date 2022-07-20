<?php

namespace App\Http\Controllers;

use App\Models\Dss;
use App\Http\Requests\StoreDssRequest;
use App\Http\Requests\UpdateDssRequest;

class DssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dss');
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
     * @param  \App\Http\Requests\StoreDssRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDssRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dss  $dss
     * @return \Illuminate\Http\Response
     */
    public function show(Dss $dss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dss  $dss
     * @return \Illuminate\Http\Response
     */
    public function edit(Dss $dss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDssRequest  $request
     * @param  \App\Models\Dss  $dss
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDssRequest $request, Dss $dss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dss  $dss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dss $dss)
    {
        //
    }
}
