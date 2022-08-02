@extends('layout.main')

@section('container')

<section class="section blog-wrap ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-5">
                        @foreach($data2 as $katalog)
                        <div class="blog-item-content">
                            <div class="mb-4">
                                <h3>{{ $katalog->judul }}</h3>
                                <a>{{ $katalog->nama_mhs }}</a> <a>/</a>
                                <a>{{ $katalog->nim }}</a> <br>
                            </div>
                            <div class="pdf">
                                <embed type="application/pdf" src="/images/PA_kelvin.pdf" width="900" height="940"></embed>
                            </div>
                            <div class="video">
                                <embed type="application/pdf" src="/images/PA_kelvin.pdf" width="900" height="940"></embed>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection