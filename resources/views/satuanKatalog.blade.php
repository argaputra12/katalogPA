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
                                <button type="button" class="btn btn-outline-primary shadow col-4 demo-aplikasi" data-link="{{ $katalog->link_demo }}">Lihat Demo Aplikasi</button>
                            </div>

                            <div class="pdf">
                                <embed type="application/pdf" src="{{ Storage::url($katalog->file_buku) }}" width="900" height="940"></embed>
                            </div>
                            <div class="video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $katalog->link_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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