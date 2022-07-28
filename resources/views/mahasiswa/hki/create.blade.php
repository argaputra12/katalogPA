@extends('layout.main')

@section('container')


<div class="row justify-content-center">
    <div class="col-lg-6 text-center">
        <div class="section-title mt-5">
            <h3>Form Pendaftaran HKI</h3>
            <div class="divider mx-auto my-1"></div>
        </div>
    </div>
</div>

<div class="container shadow mb-5 alice">
    @if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        <div class="col gray-bg">
            <h6 class="my-4">Form Data Pengusul</h6>
            <hr>
            <form action="/daftarHKI" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <label for="kategori_ki" class="col-sm-4 col-form-label">Kategori KI</label>
    
                    <div class="col-sm-7">
                        <!-- <input class="form-control form-control-sm" id="formFileSm" type="text mb-2"> -->
                        <div class="input-group mb-3 ">
                            <select class="form-select form-control form-control-sm @error('kategori_ki') is-invalid @enderror" id="kategori_ki" name="kategori_ki" value="{{ old('kategori_ki') }}">
                                <option selected>Pilih Kategori</option>
                                <option value="1">Daftar HKI</option>
                            </select>
                            @error('kategori_ki')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <label for="jenis_ki" class="col-sm-4 col-form-label">Jenis KI</label>
    
                    <div class="col-sm-7">
                        <!-- <input class="form-control form-control-sm" id="formFileSm" type="text mb-2"> -->
                        <div class="input-group mb-3 ">
                            <select class="form-select form-control form-control-sm @error('jenis_ki') is-invalid @enderror" id="jenis_ki" name="jenis_ki" value="{{ old('jenis_ki') }}">
                                <option selected disabled>Pilih Jenis KI</option>
                                <option value="Hak Cipta">Hak Cipta</option>
                                <option value="Paten">Paten</option>
                                <option value="Merek">Merek</option>
                                <option value="Desain Industri">Desain Industri</option>
                                <option value="Indikasi Geografis">Indikasi Geografis</option>
                                <option value="Rahasia Dagang">Rahasia Dagang</option>
                                <option value="Desain Tata Letak Sirkuit terpadu">Desain Tata Letak Sirkuit terpadu</option>
                            </select>
                            @error('jenis_ki')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <label for="subjenis_ki" class="col-sm-4 col-form-label">Subjenis KI</label>
    
                    <div class="col-sm-7">
                        <!-- <input class="form-control form-control-sm" id="formFileSm" type="text mb-2"> -->
                        <div class="input-group mb-3 ">
                            <select class="form-select form-control form-control-sm @error('subjenis_ki') is-invalid @enderror" id="subjenis_ki" name="subjenis_ki" value="{{ old('subjenis_ki') }}">
                                <option selected>Pilih Subjenis KI</option>
                                <option value="Buku">Buku</option>
                                <option value="Ceramah">Ceramah</option>
                                <option value="Alat Peraga">Alat Peraga</option>
                                <option value="Lagu atau Musik">Lagu atau Musik</option>
                                <option value="Drama">Drama</option>
                                <option value="Seni Rupa">Seni Rupa</option>
                                <option value="Arsitektur">Arsitektur</option>
                                <option value="Peta">Peta</option>
                                <option value="Seni Batik">Seni Batik</option>
                                <option value="Fotografi">Fotografi</option>
                                <option value="Terjemahan">Terjemahan</option>
                                <option value="Paten">Paten</option>
                                <option value="Paten Sederhana">Paten Sederhana</option>
                                <option value="Merek">Merek</option>
                                <option value="Desain Industri">Desain Industri</option>
                                <option value="Geografis">Geografis</option>
                                <option value="DTLST">DTLST</option>
                                <option value="Aplikasi Web">Aplikasi Web</option>
                                <option value="Aplikasi Android">Aplikasi Android</option>
                                <option value="Aplikasi iOS">Aplikasi iOS</option>
                                <option value="Aplikasi iOS">Karya Ilmiah</option>
                            </select>
                            @error('subjenis_ki')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class=" row">
                    <label for="judul_ki" class="col-sm-4 col-form-label">Judul KI</label>
                    <div class="col-sm-7">
                        <input class="form-control form-control-sm @error('judul_ki') is-invalid @enderror" id="judul_ki" name="judul_ki" type="text" value="{{ old('judul_ki') }}">
                        @error('judul_ki')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class=" row">
                    <label for="surat_pernyataan_internal" class="col-sm-4 col-form-label">Surat Pernyataan Internal</label>
                    <div class="col-sm-7">
                        <input class="form-control form-control-sm @error('surat_pernyataan_internal') is-invalid @enderror" id="surat_pernyataan_internal" name="surat_pernyataan_internal" type="file" value="{{ old('surat_pernyataan_internal') }}">
                        @error('surat_pernyataan_internal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class=" row">
                    <label for="surat_pengalihan_hakcipta" class="col-sm-4 col-form-label">Surat Pengalihan Hak Cipta</label>
                    <div class="col-sm-7">
                        <input class="form-control form-control-sm @error('surat_pengalihan_hakcipta') is-invalid @enderror" id="surat_pengalihan_hakcipta" name="surat_pengalihan_hakcipta" type="file" value="{{ old('surat_pengalihan_hakcipta') }}">
                        @error('surat_pengalihan_hakcipta')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class=" row">
                    <label for="scan_ktp" class="col-sm-4 col-form-label">Scan KTP</label>
                    <div class="col-sm-7">
                        <input class="form-control form-control-sm @error('scan_ktp') is-invalid @enderror" id="scan_ktp" name="scan_ktp" type="file" value="{{ old('scan_ktp') }}">
                        @error('scan_ktp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class=" row">
                    <label for="contoh_ciptaan" class="col-sm-4 col-form-label">Contoh Ciptaan</label>
                    <div class="col-sm-7">
                        <input class="form-control form-control-sm @error('contoh_ciptaan') is-invalid @enderror" id="contoh_ciptaan" name="contoh_ciptaan" type="file" value="{{ old('contoh_ciptaan') }}">
                        @error('contoh_ciptaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class=" row">
                    <label for="url_ciptaan" class="col-sm-4 col-form-label">URL Ciptaan</label>
                    <div class="col-sm-7">
                        <input class="form-control form-control-sm @error('url_ciptaan') is-invalid @enderror" id="url_ciptaan" name="url_ciptaan" type="text" value="{{ old('url_ciptaan') }}">
                        @error('url_ciptaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class=" row">
                    <label for="summary_katsinov" class="col-sm-4 col-form-label">Summary Katsinov</label>
                    <div class="col-sm-7">
                        <input class="form-control form-control-sm @error('summary_katsinov') is-invalid @enderror" id="summary_katsinov" name="summary_katsinov" type="text" value="{{ old('summary_katsinov') }}">
                        @error('summary_katsinov')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class=" row">
                    <label for="link_ciptaan_katsinov" class="col-sm-4 col-form-label">Link Ciptaan Katsinov</label>
                    <div class="col-sm-7">
                        <input class="form-control form-control-sm @error('link_ciptaan_katsinov') is-invalid @enderror" id="link_ciptaan_katsinov" name="link_ciptaan_katsinov" type="text" value="{{ old('link_ciptaan_katsinov') }}">
                        @error('link_ciptaan_katsinov')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <center>
                    <div class="d-grid gap-4 my-5">
                        <button type="submit" class="btn btn-outline-success shadow btn-sm col-10">Simpan dan lanjutkan</button>
                    </div>
                </center>
            </form>


        </div>
    </div>
</div>
</div>

@endsection
