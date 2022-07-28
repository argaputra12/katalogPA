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
                            <td>{{ date('d-m-Y', strtotime($hki->created_at)) }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#berkasModal{{ $hki->id }}">Lihat Berkas</button>
                                <!-- Button trigger modal -->
                                <!-- Modal -->
                                <div class="modal fade" id="berkasModal{{ $hki->id }}" tabindex="-1" aria-labelledby="berkasModalLabel{{ $hki->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="berkasModalLabel{{ $hki->id }}">Berkas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-body text-start">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ asset("storage/$hki->surat_pernyataan_internal") }}"><i class="fa-solid fa-download"></i> Surat Pernyataan Internal</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ asset("storage/$hki->surat_pengalihan_hakcipta") }}"><i class="fa-solid fa-download"></i> Surat Pengalihan Hak Cipta</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ asset("storage/$hki->scan_ktp") }}"><i class="fa-solid fa-download"></i> Scan KTP</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ asset("storage/$hki->contoh_ciptaan") }}"><i class="fa-solid fa-download"></i> Contoh Ciptaan</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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