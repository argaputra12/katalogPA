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
            <h6 class="my-4">Dokumen Berkas Pendaftaran</h6>
            <hr>

            <div class=" row">


                <label for="pernyataaninternal" class="col-sm-4 col-form-label">Surat Pernyataan Internal <a href=""></a></label>
                <div class="col-sm-5">


                    <input class="form-control form-control-sm" id="formFileSm" type="file">

                    <a href="images/PermohonanHakCipta.doc" class="btn btn-outline-primary shadow icofont-download-alt" download> template </a>

                    <p>*ukuran file maksimal sebesar 5MB, file harus berbentuk .pdf</p>
                </div>
            </div>

            <div class="row">
                <label for="pengalihanHakCipta" class="col-sm-4 col-form-label">Surat Pengalihan Hak Cipta</label>
                <div class="col-sm-5">
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                    <a href="images/PengalihandanPernyataanHakCipta.doc" class="btn btn-outline-primary shadow icofont-download-alt" download> template </a>
                    <a>*ukuran file maksimal sebesar 5MB, file harus berbentuk .pdf</a>
                </div>
            </div>

            <h6 class="mt-2">Dokumen Berkas Prasyarat Administrasi</h6>
            <hr>
            <div class="row">
                <label for="pengalihanHakCipta" class="col-sm-4 col-form-label">Scan KTP Pengusul</label>
                <div class="col-sm-5">
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                    <p>*scan KTP pengusul, ukuran file maksimal sebesar 5MB, file harus berbentuk .docx</p>
                </div>
            </div>

            <div class="row">
                <label for="pengalihanHakCipta" class="col-sm-4 col-form-label">Contoh Ciptaan</label>
                <div class="col-sm-5">
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                    <p>*ukuran file maksimal sebesar 5MB, file harus berbentuk .pdf, .pg, .png</p>
                </div>
            </div>
            <div class=" row">
                <label for="pengalihanHakCipta" class="col-sm-4 col-form-label">URL / Link Contoh Ciptaan</label>
                <div class="col-sm-5">
                    <input class="form-control form-control-sm" id="formFileSm" type="text mb-2">
                    <a>*WAJIB melampirkan URL google drive (open acces) berisi aplikasi atau program komputer
                        pada permohonan Hak Cipta komputer, Ebook asli pada hak cipta buku / modul / karya tulis lainnya,
                        video asli pada sinematografi / Web Series / karya audio visual lainnya
                    </a>
                </div>
            </div>

            <h6 class="mt-1">Katsinov Meter</h6>
            <hr>
            <p>*Katsinov adalah sebuah alat ukur yang digunakan untuk mengukur tingkat kesiapan atau kematangan inbovasi yang dilakukan
                oleh suatu lembaga, perusahaan, dan / proyek/ program / kegiatan / kekayaan iinmtelektual
            </p>

            <div class="row">

                <label for="pengalihanHakCipta" class="col-sm-4 col-form-label">Summary Katsinov</label>

                <div class="col-sm-5">
                    <!-- <input class="form-control form-control-sm" id="formFileSm" type="text mb-2"> -->
                    <div class="input-group mb-3 ">
                        <select class="form-select form-control form-control-sm" id="inputGroupSelect01">
                            <option selected>Pilih Katsinov</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="row">
                <label for="pengalihanHakCipta" class="col-sm-4 col-form-label">URL / Link Contoh Ciptaan</label>
                <div class="col-sm-5">
                    <input class="form-control form-control-sm" id="formFileSm" type="text mb-2">
                    <a>*Form Katsinov mohon dapat di isi. Form ini diperlukan industrial licensing. Barang inovasi dan komersialisasi produk
                    </a>
                </div>
            </div>

            <center>

                <div class="d-grid gap-4 my-5">
                    <form action="/datapengusul">
                        <button class="btn btn-outline-primary shadow col-10">submit</button>
                    </form>
                </div>

            </center>
        </div>

    </div>
</div>
</div>

@endsection

