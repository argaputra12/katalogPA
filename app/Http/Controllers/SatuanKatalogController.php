<?php

namespace App\Http\Controllers;

use App\Models\Apk1;
use App\Models\Katalog;
use App\Http\Requests\StoreApk1Request;
use App\Http\Requests\UpdateApk1Request;

class SatuanKatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = katalog::find($id);
        return view("satuanKatalog", compact("data"));
    }

    // public function satuanKatalog($id)
    // {
    //     $data = katalog::find($id);
    //     return view("satuanKatalog", compact("data"));
    // }


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
     * @param  \App\Http\Requests\StoreApk1Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApk1Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apk1  $apk1
     * @return \Illuminate\Http\Response
     */
    public function show(Apk1 $apk1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apk1  $apk1
     * @return \Illuminate\Http\Response
     */
    public function edit(Apk1 $apk1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApk1Request  $request
     * @param  \App\Models\Apk1  $apk1
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApk1Request $request, Apk1 $apk1)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apk1  $apk1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apk1 $apk1)
    {
        //
    }
}
