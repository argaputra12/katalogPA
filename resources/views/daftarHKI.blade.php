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
    <div class="row">
        <div class="col gray-bg">
            <h6>Form Data Pengusul</h6>
            <hr>

            <div class="row">
                <label for="pengalihanHakCipta" class="col-sm-4 col-form-label">Kategori KI</label>

                <div class="col-sm-7">
                    <!-- <input class="form-control form-control-sm" id="formFileSm" type="text mb-2"> -->
                    <div class="input-group mb-3">
                        <select class="form-select form-control form-control-sm" id="inputGroupSelect01">
                            <option selected>Pilih Kategori</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <label for="pengalihanHakCipta" class="col-sm-4 col-form-label">Jenis KI</label>

                <div class="col-sm-7">
                    <!-- <input class="form-control form-control-sm" id="formFileSm" type="text mb-2"> -->
                    <div class="input-group mb-3 ">
                        <select class="form-select form-control form-control-sm" id="inputGroupSelect01">
                            <option selected>Pilih Jenis KI</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <label for="pengalihanHakCipta" class="col-sm-4 col-form-label">Subjenis KI</label>

                <div class="col-sm-7">
                    <!-- <input class="form-control form-control-sm" id="formFileSm" type="text mb-2"> -->
                    <div class="input-group mb-3 ">
                        <select class="form-select form-control form-control-sm" id="inputGroupSelect01">
                            <option selected>Pilih Subjenis KI</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class=" row">
                <label for="pengalihanHakCipta" class="col-sm-4 col-form-label">Judul KI</label>
                <div class="col-sm-7">
                    <input class="form-control form-control-sm" id="formFileSm" type="text mb-2">
                </div>
            </div>
            <center>
                <div class="d-grid gap-4 my-5">
                    <form action="/formpengusul">
                        <button class="btn btn-outline-success shadow btn-sm col-10">Simpan dan lanjutkan</button>
                    </form>
                </div>
            </center>

        </div>
    </div>
</div>
</div>

@endsection
