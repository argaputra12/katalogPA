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

            <a href="/admin/katalog/create" class="btn btn-primary mb-3">Buat Katalog Baru</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead align="center">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Judul Katalog</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama Mahasiswa</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        @foreach ($list_katalog as $katalog)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $katalog->judul }}</td>
                                <td>{{ $katalog->nim }}</td>
                                <td>{{ $katalog->nama_mhs }}</td>
                                <td>
                                    {{-- <a href="/admin/katalog/{{ $katalog->id }}" class="badge bg-info" title="Detail">
                                        <span data-feather="eye"></span>
                                        Detail
                                    </a> --}}
                                    <a href="/admin/katalog/{{ $katalog->id }}/edit" class="badge bg-success" title="Edit">
                                        {{-- <span data-feather="edit"></span> --}}
                                        {{-- Edit --}}
                                        Detail
                                    </a>
                                    <form action="/admin/katalog/{{ $katalog->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are Your Sure?')" title="Hapus">
                                            {{-- <span data-feather="x-circle"></span> --}}
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
