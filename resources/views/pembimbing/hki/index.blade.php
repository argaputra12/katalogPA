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
            <h6 class="m-0 font-weight-bold text-primary">HKI</h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-responsive" id="dataTable">
                    <thead align="center">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Kategori HKI</th>
                            <th scope="col">Jenis HKI</th>
                            <th scope="col">SubJenis HKI</th>
                            <th scope="col">Judul hki</th>
                            <th scope="col">URL Ciptaan</th>
                            <th scope="col">Ringkasan Katsinov</th>
                            <th scope="col">Link Ciptaan Katsinov</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal Upload</th>
                            <th scope="col" style="width: 300px;">Action</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        @foreach ($list_hki as $hki)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $hki->kategori_ki }}</td>
                                <td>{{ $hki->jenis_ki }}</td>
                                <td>{{ $hki->subjenis_ki }}</td>
                                <td>{{ $hki->judul_ki }}</td>
                                <td>{{ $hki->url_ciptaan }}</td>
                                <td>{{ $hki->summary_katsinov }}</td>
                                <td>{{ $hki->link_ciptaan_katsinov }}</td>
                                <td>{{ $hki->konfirmasi }}</td>
                                {{-- <td>{{ $hki->created_at->diffForHumans() }}</td> --}}
                                <td>{{ date('d-m-Y', strtotime($hki->created_at)) }}</td>
                                <td>
                                    {{-- <a href="/pembimbing/hki/{{ $hki->id }}" class="badge bg-info" title="Detail">
                                        <span data-feather="eye"></span>
                                        Detail
                                    </a> --}}
                                    @if ($hki->konfirmasi == "Belum dikonfirmasi")
                                    <form action="/pembimbing/konfirmasiHKI/{{ $hki->id }}" method="post" class="d-inline">
                                        @method('put')
                                        @csrf
                                        <input type="hidden" name="konfirmasi" value="disetujui">
                                        <button type="submit" class="btn btn-success btn-sm" title="Setujui">Setujui</button>
                                    </form>
                                    <form action="/pembimbing/konfirmasiHKI/{{ $hki->id }}" method="post" class="d-inline">
                                        @method('put')
                                        @csrf
                                        <input type="hidden" name="konfirmasi" value="ditolak">
                                        <button type="submit" class="btn btn-danger btn-sm" title="Tolak">Tolak</button>
                                    </form>
                                    @endif
                                    <a href="/pembimbing/hki/{{ $hki->id }}/edit" class="btn btn-primary btn-sm mt-2">Lihat Berkas</a>
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
