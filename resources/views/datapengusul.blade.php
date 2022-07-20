@extends('layout.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-6 text-center">
        <div class="section-title mt-5">
            <h3>Form Pendaftaran HKI</h3>
            <div class="divider mx-auto my-2"></div>
        </div>
    </div>
</div>

<div class="container shadow mb-5 alice">
    <div class="row">
        <div class="col gray-bg">
            <h6 class="my-4">Data Pengusul</h6>
            <hr>

            <table class="table table-bordered table-striped">
                <thead align="center">
                    <tr>
                        <th>Action</th>
                        <th>Nama Pengusul</th>
                        <th>Fakultas / Prodi</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <tr>
                        <td>

                            <a href=""><img src="http://localhost/ci4app_PA/public/images/edit.png" style="width: 20px;" class="mr-2" alt=""></a>
                            <a href=""><img src="http://localhost/ci4app_PA/public/images/delete.png" style="width: 20px;" alt=""></a>
                        </td>
                        <td>Uden Sudrajat</td>
                        <td>D3 Sistem Informasi</td>
                        <td>udhaentea@gmail.com</td>
                        <td>Karawang</td>
                        <td class="notapprove">belum disetujui</td>

                    </tr>
                </tbody>
            </table>

            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">&raquo;</a>
            </div>
        </div>
    </div>
</div>


@endsection
