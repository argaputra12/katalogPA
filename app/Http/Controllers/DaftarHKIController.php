<?php

namespace App\Http\Controllers;

use App\Models\DaftarHKI;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
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
        return view('daftarHKI', [
            'list_hki' => DaftarHKI::where('user_id', auth()->user()->id)->get()
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDaftarHKIRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kategoriKI' => 'required|max:255',
            'jenisKI' => 'required|max:255',
            'subjenisKI' => 'required|max:255',
            'judulKI' => 'required|max:255',
            'surat_pernyataan_internal' => 'file|max:100024',
            'surat_pengalihan_hakcipta' => 'file|max:100024',
            'scan_ktp' => 'file|max:100024',
            'contoh_ciptaan' => 'file|max:100024',
            'url_ciptaan' => 'required',
            'summary_katsinov' => 'required',
            'link_ciptaan_katsinov' => 'required',
            'isi' => 'required',
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
        DaftarHKI::create($validateData);
        return back()->with('success', 'HKI Berhasil didaftarkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DaftarHKI  $daftarHKI
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarHKI $daftarHKI)
    {
        return view('mahasiswa.hki.show', [
            'hki' => $daftarHKI
        ]);
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
