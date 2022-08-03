@extends('layout.main')

@section('container')


<!-- Slider Start -->
<div class="banner malasngoding-slider">
    <div class=isi-slider>
        <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1890&q=80" alt="Gambar 1">
        <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="Gambar 2">
        <img src="https://images.unsplash.com/photo-1533669955142-6a73332af4db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1874&q=80" alt="Gambar 3">
    </div>
</div>

<section class="features">
    <div class="container">
        <div class="row justify-content-center" data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
            <center>
                <div class="col-lg-auto shuffle-item">
                    <div class="feature-block d-lg-flex position-relative">

                        <div class="feature-item mb-4 mb-lg-0">
                            <div class="doctor-profile">

                                <center>
                                    <a href="tps">
                                        <img class="gambar1 mb-5" src="images/silogo.png" class="img-fluid w-100">
                                        <h4 class="mb-3">Transaction Processing System</h4>
                                </center>
                            </div>
                        </div>

                        <div class="feature-item mb-4 mb-lg-0">
                            <div class="feature-icon mb-1">
                                <a href="mis">
                                    <img class="gambar1 mb-5" src="images/datasciencelogo.png">
                            </div>
                            <h4 class="mb-3">Management Information System</h4>
                        </div>

                        <div class="feature-item mb-4 mb-lg-0">
                            <a href="dss">
                                <div class="feature-icon mb-1">
                                    <img class="gambar1 mb-5" src="images/datamininglogo.png">
                                </div>
                                <h4 class="mb-3">Decision Support System</h4>
                        </div>

                    </div>
                </div>
            </center>
        </div>
    </div>
</section>



<section class="section service white-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">

                <video width="350" height="250" controls autoplay muted>
                    <source src="images/video1.mp4" type="video/mp4">
                </video>
                <h6>Kelvin Yulinda Febianto</h6>
                <h6>6701174046</h6>
                <a>D3 Sistem Informasi / 2018</a>
            </div>

            <div class="col-lg-8 col-md-6">
                <div class="doctor-details mt-4 mt-lg-0">
                    <h2 class="text-md">Dashboard Daerah Rawan Gizi Buruk</h2>
                    <div class="divider my-4"></div>
                    <a>Abstrak</a>
                    <p>
                        Informasi seputar gizi buruk sangat penting untuk diketahui oleh masyarakat sebagai
                        pedoman agar kemudian hari gizi buruk dapat dicegah dan diantisipasi oleh
                        masyarakat. Dalam upaya mencegah gizi buruk dinas kesehatan selaku lembaga yang
                        berperan dalam bidang kesehatan bagi masyarakat perlu memberikan informasi
                        yang valid mengenai gizi buruk dan daerah yang rawan terjangkit gizi buruk agar
                        masyarakat dapat siap siaga untuk mengantisipasi gizi buruk. maka dari itu,
                        diperlukan aplikasi dashboard informasi daerah rawan gizi buruk. Aplikasi ini akan
                        dibangun dengan menggunakan pemrograman PHP, dengan framework Codeigniter
                        dan database nya menggunakan MySQL. Metode pembangunan aplikasi
                        meggunakan metodologi Waterfall. Aplikasi ini hanya digunakan dalam dinas
                        kesehatan dan puskesmas.
                    </p>
                    <div class="d-grid  my-5">
                        <form action="/apk1">
                            @if (auth()->user() && auth()->user()->role_id == 1)
                            <button class="btn btn-outline-primary shadow col-4">Lihat Buku PA</button>
                            @endif
                            <button type="button" class="btn btn-outline-primary shadow col-4 demo-aplikasi" data-link="https://youtu.be/1IwdeqDgsGI">Lihat Demo Aplikasi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section service gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">

                <video height="230" width="350" controls preload="metadata">

                    <source src="/xxampp/htdocs/ci4app_PA/public/images/video1.mp4" type="video/mp4" />
                </video>

                <h6>Gandi Setyo Raharjo</h6>
                <a>D3 Sistem Informasi / 2019</a>

            </div>
            <div class="col-lg-8 col-md-6">
                <div class="doctor-details mt-4 mt-lg-0">
                    <h2 class="text-md">Aplikasi Bank Sampah Goni-Goni Bersertifikat Nasional</h2>
                    <div class="divider my-4"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam tempore cumque voluptate beatae quis inventore sapiente nemo, a eligendi nostrum expedita veritatis neque incidunt ipsa doloribus provident ex, at ullam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, perferendis officiis esse quae, nobis eius explicabo quidem? Officia accusamus repudiandae ea esse non reiciendis accusantium voluptates, facilis enim, corrupti eligendi?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo recusandae veritatis minus optio quod obcaecati laborum temporibus, deleniti vero perferendis molestias, ducimus facilis, sunt minima. Tempora, amet quasi asperiores voluptas?</p>

                    <div class="d-grid  my-5">
                        <form action="/apk1">
                            @if (auth()->user() && auth()->user()->role_id == 1)
                            <button class="btn btn-outline-primary shadow col-4">Lihat Buku PA</button>
                            @endif
                            <button type="button" class="btn btn-outline-primary shadow col-4 demo-aplikasi" data-link="https://youtu.be/et2n_ymoW3E">Lihat Demo Aplikasi</button>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section service white-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">

                <video height="230" width="350" controls preload="metadata">

                    <source src="/xxampp/htdocs/ci4app_PA/public/images/video1.mp4" type="video/mp4" />
                </video>

                <h6>Gandi Setyo Raharjo</h6>
                <a>D3 Sistem Informasi / 2019</a>


            </div>
            <div class="col-lg-8 col-md-6">
                <div class="doctor-details mt-4 mt-lg-0">
                    <h2 class="text-md">Aplikasi E-Masjid Quro Karawang</h2>
                    <div class="divider my-4"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam tempore cumque voluptate beatae quis inventore sapiente nemo, a eligendi nostrum expedita veritatis neque incidunt ipsa doloribus provident ex, at ullam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, perferendis officiis esse quae, nobis eius explicabo quidem? Officia accusamus repudiandae ea esse non reiciendis accusantium voluptates, facilis enim, corrupti eligendi?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo recusandae veritatis minus optio quod obcaecati laborum temporibus, deleniti vero perferendis molestias, ducimus facilis, sunt minima. Tempora, amet quasi asperiores voluptas?</p>

                    <div class="d-grid  my-5">
                        <form action="/apk1">
                            @if (auth()->user() && auth()->user()->role_id == 1)
                            <button class="btn btn-outline-primary shadow col-4">Lihat Buku PA</button>
                            @endif
                            <button type="button" class="btn btn-outline-primary shadow col-4 demo-aplikasi" data-link="https://youtu.be/et2n_ymoW3E">Lihat Demo Aplikasi</button>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section service gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">

                <video height="230" width="350" controls preload="metadata">

                    <source src="/xxampp/htdocs/ci4app_PA/public/images/video1.mp4" type="video/mp4" />
                </video>

                <h6>Gandi Setyo Raharjo</h6>
                <a>D3 Sistem Informasi / 2019</a>

            </div>
            <div class="col-lg-8 col-md-6">
                <div class="doctor-details mt-4 mt-lg-0">
                    <h2 class="text-md">Aplikasi Bank Sampah Goni-Goni Bersertifikat Nasional</h2>
                    <div class="divider my-4"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam tempore cumque voluptate beatae quis inventore sapiente nemo, a eligendi nostrum expedita veritatis neque incidunt ipsa doloribus provident ex, at ullam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, perferendis officiis esse quae, nobis eius explicabo quidem? Officia accusamus repudiandae ea esse non reiciendis accusantium voluptates, facilis enim, corrupti eligendi?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo recusandae veritatis minus optio quod obcaecati laborum temporibus, deleniti vero perferendis molestias, ducimus facilis, sunt minima. Tempora, amet quasi asperiores voluptas?</p>

                    <div class="d-grid  my-5">
                        <form action="/apk1">
                            @if (auth()->user() && auth()->user()->role_id == 1)
                            <button class="btn btn-outline-primary shadow col-4">Lihat Buku PA</button>
                            @endif
                            <button type="button" class="btn btn-outline-primary shadow col-4 demo-aplikasi" data-link="https://youtu.be/et2n_ymoW3E">Lihat Demo Aplikasi</button>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section testimonial-2 white-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2>Terdapat 1000+ mahasiswa lulusan D3 Sistem Informasi bekerja diperusahaan Besar indonesia</h2>
                    <div class="divider mx-auto my-4"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 testimonial-wrap-2">
                <div class="testimonial-block style-2  gray-bg">
                    <i class="icofont-quote-right"></i>

                    <div class="testimonial-thumb">
                        <img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="client-info ">
                        <h4>Amazing service!</h4>
                        <span>John Partho</span>
                        <p>
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                        </p>
                    </div>
                </div>

                <div class="testimonial-block style-2  gray-bg">
                    <div class="testimonial-thumb">
                        <img src="images/team/test-thumb2.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="client-info">
                        <h4>Expert doctors!</h4>
                        <span>Mullar Sarth</span>
                        <p>
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                        </p>
                    </div>

                    <i class="icofont-quote-right"></i>
                </div>

                <div class="testimonial-block style-2  gray-bg">
                    <div class="testimonial-thumb">
                        <img src="images/team/test-thumb3.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="client-info">
                        <h4>Good Support!</h4>
                        <span>Kolis Mullar</span>
                        <p>
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                        </p>
                    </div>

                    <i class="icofont-quote-right"></i>
                </div>

                <div class="testimonial-block style-2  gray-bg">
                    <div class="testimonial-thumb">
                        <img src="images/team/test-thumb4.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="client-info">
                        <h4>Nice Environment!</h4>
                        <span>Partho Sarothi</span>
                        <p class="mt-4">
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                        </p>
                    </div>
                    <i class="icofont-quote-right"></i>
                </div>

                <div class="testimonial-block style-2  gray-bg">
                    <div class="testimonial-thumb">
                        <img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="client-info">
                        <h4>Modern Service!</h4>
                        <span>Kolis Mullar</span>
                        <p>
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                        </p>
                    </div>
                    <i class="icofont-quote-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection