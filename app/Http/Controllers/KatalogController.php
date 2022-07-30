<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKatalogRequest;
use App\Http\Requests\UpdateKatalogRequest;

class KatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('katalog', [
            'list_katalog' => Katalog::with('kategori')->get(),
            'list_kategori' => Kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('katalog.create', [
            'list_kategori' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKatalogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'nim' => 'required|max:255',
            'nama_mhs' => 'required|max:255',
            'pembimbing1' => 'required|max:255',
            'pembimbing2' => 'required|max:255',
            'link_video' => 'required|max:255',
            'link_demo' => 'required|max:255',
            'link_hki' => 'required|max:255',
            'kategori_id' => 'required'
        ]);

        $validateData['user_id'] = auth()->user()->id;
        Katalog::create($validateData);
        return back()->with('success', 'Katalog Telah disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function show(Katalog $katalog)
    {
        return view('katalog.show', [
            'katalog' => $katalog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function edit(Katalog $katalog)
    {
        return view('katalog.edit', [
            'katalog' => $katalog,
            'list_kategori' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKatalogRequest  $request
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Katalog $katalog)
    {
        $validateData = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'nim' => 'required|max:255',
            'nama_mhs' => 'required|max:255',
            'pembimbing1' => 'required|max:255',
            'pembimbing2' => 'required|max:255',
            'link_video' => 'required|max:255',
            'link_demo' => 'required|max:255',
            'link_hki' => 'required|max:255',
            'kategori_id' => 'required'
        ]);

        Katalog::where('id', $katalog->id)->update($validateData);
        return back()->with('success', 'Katalog Telah disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Katalog $katalog)
    {
        Katalog::destroy($katalog->id);
        return back()->with('success', 'Katalog telah dihapus / dinonaktifkan!');
    }
}
