@extends('dashboard.layout.main')

@section('container')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<div class="row">

    <!-- Isi DIsini -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengusul HKI</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead align="center">
                        <tr>
                            <th>Judul Katalog</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        <tr>
                            <td>
                                <a href=""><img src="/images/edit.png" style="width: 20px;" class="mr-3"></a>
                                <a href=""><img src="/images/delete.png" style="width: 20px;" alt="delete"></a>
                            </td>
                            <td>Uden Sudrajat</td>
                            <td>D3 Sistem Informasi</td>
                            <td>udhaentea@gmail.com</td>
                            <td>Karawang</td>
                            <td>
                                <a href="">Approve</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
