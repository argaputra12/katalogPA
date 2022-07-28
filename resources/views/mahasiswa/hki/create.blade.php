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
                                <option value="Daftar HKI" @if (old('jenis_ki') == "Daftar HKI") selected @endif>Daftar HKI</option>
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
                                <option value="Hak Cipta" @if (old('jenis_ki') == "Hak Cipta") selected @endif>Hak Cipta</option>
                                <option value="Paten" @if (old('jenis_ki') == "Paten") selected @endif>Paten</option>
                                <option value="Merek" @if (old('jenis_ki') == "Merek") selected @endif>Merek</option>
                                <option value="Desain Industri" @if (old('jenis_ki') == "Desain Industri") selected @endif>Desain Industri</option>
                                <option value="Indikasi Geografis" @if (old('jenis_ki') == "Indikasi Geografis") selected @endif>Indikasi Geografis</option>
                                <option value="Rahasia Dagang" @if (old('jenis_ki') == "Rahasia Dagang") selected @endif>Rahasia Dagang</option>
                                <option value="Desain Tata Letak Sirkuit terpadu" @if (old('jenis_ki') == "Desain Tata Letak Sirkuit terpadu") selected @endif>Desain Tata Letak Sirkuit terpadu</option>
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
                                <option @if (old('subjenis_ki') == "Buku") selected @endif value="Buku">Buku</option>
                                <option @if (old('subjenis_ki') == "Ceramah") selected @endif value="Ceramah">Ceramah</option>
                                <option @if (old('subjenis_ki') == "Alat Peraga") selected @endif value="Alat Peraga">Alat Peraga</option>
                                <option @if (old('subjenis_ki') == "Lagu atau Musik") selected @endif value="Lagu atau Musik">Lagu atau Musik</option>
                                <option @if (old('subjenis_ki') == "Drama") selected @endif value="Drama">Drama</option>
                                <option @if (old('subjenis_ki') == "Seni Rupa") selected @endif value="Seni Rupa">Seni Rupa</option>
                                <option @if (old('subjenis_ki') == "Arsitektur") selected @endif value="Arsitektur">Arsitektur</option>
                                <option @if (old('subjenis_ki') == "Peta") selected @endif value="Peta">Peta</option>
                                <option @if (old('subjenis_ki') == "Seni Batik") selected @endif value="Seni Batik">Seni Batik</option>
                                <option @if (old('subjenis_ki') == "Fotografi") selected @endif value="Fotografi">Fotografi</option>
                                <option @if (old('subjenis_ki') == "Terjemahan") selected @endif value="Terjemahan">Terjemahan</option>
                                <option @if (old('subjenis_ki') == "Paten") selected @endif value="Paten">Paten</option>
                                <option @if (old('subjenis_ki') == "Paten Sederhana") selected @endif value="Paten Sederhana">Paten Sederhana</option>
                                <option @if (old('subjenis_ki') == "Merek") selected @endif value="Merek">Merek</option>
                                <option @if (old('subjenis_ki') == "Desain Industri") selected @endif value="Desain Industri">Desain Industri</option>
                                <option @if (old('subjenis_ki') == "Geografis") selected @endif value="Geografis">Geografis</option>
                                <option @if (old('subjenis_ki') == "DTLST") selected @endif value="DTLST">DTLST</option>
                                <option @if (old('subjenis_ki') == "Aplikasi Web") selected @endif value="Aplikasi Web">Aplikasi Web</option>
                                <option @if (old('subjenis_ki') == "Aplikasi Android") selected @endif value="Aplikasi Android">Aplikasi Android</option>
                                <option @if (old('subjenis_ki') == "Aplikasi iOS") selected @endif value="Aplikasi iOS">Aplikasi iOS</option>
                                <option @if (old('subjenis_ki') == "Karya Ilmiah") selected @endif value="Aplikasi iOS">Karya Ilmiah</option>
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
