<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminKatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.katalog.index', [
            'list_katalog' => Katalog::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.katalog.create', [
            'list_kategori' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store file buku
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
            'file_buku' => 'file|mimes:pdf|required',
            'kategori_id' => 'required'
        ]);

        // dd($validateData['judul']);

        $file = $request->file_buku;
        $fileExtension = $file->getClientOriginalExtension();
        $fileName = $file->storeAs('images/bukupa', Auth::user()->id.'.'.$fileExtension);

        // dd($fileName);
        $destinationPath = public_path('/images/bukupa');
        $file->move($destinationPath, $fileName);


        // if ($request->file('file_buku')) {
        //     $validateData['file_buku'] = $request->file('file_buku')->store('file_buku');
        // }
        // $validateData['user_id'] = auth()->user()->id;

        $inserted_data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'nim' => $request->nim,
            'nama_mhs' => $request->nama_mhs,
            'pembimbing1' => $request->pembimbing1,
            'pembimbing2' => $request->pembimbing2,
            'link_video' => $request->link_video,
            'link_demo' => $request->link_demo,
            'link_hki' => $request->link_hki,
            'file_buku' => $fileName,
            'kategori_id' => $request->kategori_id,
            'user_id' => auth()->user()->id
        ];

        Katalog::create($inserted_data);
        return redirect('/admin/katalog')->with('success', 'Katalog Telah disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function show(Katalog $katalog)
    {
        return view('admin.katalog.show', [
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
        return view('admin.katalog.edit', [
            'katalog' => $katalog,
            'list_kategori' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
            'file_buku' => 'file|mimes:pdf|required',
            'kategori_id' => 'required'
        ]);

        if ($request->file('file_buku')) {
            $validateData['file_buku'] = $request->file('file_buku')->store('file_buku');
        }

        Katalog::where('id', $katalog->id)->update($validateData);
        return redirect('/admin/katalog')->with('success', 'Katalog Telah disimpan!');
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
        return back()->with('success', 'Katalog telah dihapus!');
    }
}
