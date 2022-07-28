<?php

namespace App\Http\Controllers;

use App\Models\Hki;
use Illuminate\Http\Request;

class HkiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('daftarHKI', [
            'list_hki' => Hki::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.hki.create', [
            'list_hki' => Hki::where('user_id', auth()->user()->id)->get()
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
        $validateData = $request->validate([
            'kategori_ki' => 'required|max:255',
            'jenis_ki' => 'required|max:255',
            'subjenis_ki' => 'required|max:255',
            'judul_ki' => 'required|max:255',
            'surat_pernyataan_internal' => 'file|max:100024',
            'surat_pengalihan_hakcipta' => 'file|max:100024',
            'scan_ktp' => 'file|max:100024',
            'contoh_ciptaan' => 'file|max:100024',
            'url_ciptaan' => 'required',
            'summary_katsinov' => 'required',
            'link_ciptaan_katsinov' => 'required'
        ]);

        if ($request->file('surat_pernyataan_internal')) {
            $validateData['surat_pernyataan_internal'] = $request->file('surat_pernyataan_internal')->store('surat-pernyataan-internal');
        }
        if ($request->file('surat_pengalihan_hakcipta')) {
            $validateData['surat_pengalihan_hakcipta'] = $request->file('surat_pengalihan_hakcipta')->store('surat-pengalihan-hakcipta');
        }
        if ($request->file('scan_ktp')) {
            $validateData['scan_ktp'] = $request->file('scan_ktp')->store('scan-ktp');
        }
        if ($request->file('contoh_ciptaan')) {
            $validateData['contoh_ciptaan'] = $request->file('contoh_ciptaan')->store('contoh-ciptaan');
        }
        $validateData['user_id'] = auth()->user()->id;
        Hki::create($validateData);
        return back()->with('success', 'HKI Berhasil didaftarkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hki  $hki
     * @return \Illuminate\Http\Response
     */
    public function show(Hki $hki)
    {
        return view('mahasiswa.hki.show', [
            'hki' => $hki
        ]);
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
