@extends('dashboard.layout.main')

@section('container')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<div class="row">
    @if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <!-- Isi DIsini -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Katalog</h6>
        </div>
        <div class="card-body">
            <form action="/admin/katalog/{{ $katalog->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="kategori_id">Kategori Katalog</label>
                    <select class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id" id="kategori_id">
                        <option value="" selected disabled>Pilih Kategori</option>
                        @foreach ($list_kategori as $kategori)
                            <option value="{{ $kategori->id }}" @if ($kategori->id == old('kategori_id', $katalog->kategori_id))
                                selected
                            @endif>{{ $kategori->kategori }}</option>
                        @endforeach
                    </select>
                    @error('kategori_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{ old('judul', $katalog->judul) }}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    @error('deskripsi')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $katalog->deskripsi) }}">
                    <trix-editor input="deskripsi"></trix-editor>
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="number" class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim" value="{{ old('nim', $katalog->nim) }}">
                    @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_mhs">Nama Mahasiswa</label>
                    <input type="text" class="form-control @error('nama_mhs') is-invalid @enderror" name="nama_mhs" id="nama_mhs" value="{{ old('nama_mhs', $katalog->nama_mhs) }}">
                    @error('nama_mhs')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pembimbing1">Pembimbing 1</label>
                    <input type="text" class="form-control @error('pembimbing1') is-invalid @enderror" name="pembimbing1" id="pembimbing1" value="{{ old('pembimbing1', $katalog->pembimbing1) }}">
                    @error('pembimbing1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pembimbing2">Pembimbing 2</label>
                    <input type="text" class="form-control @error('pembimbing2') is-invalid @enderror" name="pembimbing2" id="pembimbing2" value="{{ old('pembimbing2', $katalog->pembimbing2) }}">
                    @error('pembimbing2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="link_video">Link Video</label>
                        <input type="text" class="form-control @error('link_video') is-invalid @enderror" name="link_video" id="link_video" value="{{ old('link_video', $katalog->link_video) }}">
                        <small class="text-primary">
                            Ambil bagian Belakang URL Youtube Contoh : <br>
                            <s>https://youtu.be/</s>FM7MFYoylVs
                        </small>
                        @error('link_video')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col">
                        <label for="contoh">Contoh</label>
                        <img src="/img/tutorial.png" alt="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="link_demo">Link Demo</label>
                    <input type="text" class="form-control @error('link_demo') is-invalid @enderror" name="link_demo" id="link_demo" value="{{ old('link_demo', $katalog->link_demo) }}">
                    @error('link_demo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="link_hki">Link HKI</label>
                    <input type="text" class="form-control @error('link_hki') is-invalid @enderror" name="link_hki" id="link_hki" value="{{ old('link_hki', $katalog->link_hki) }}">
                    @error('link_hki')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
