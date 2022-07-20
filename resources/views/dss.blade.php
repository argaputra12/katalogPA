@extends('layout.main')

@section('container')


<div class="row justify-content-center">
    <div class="col-lg-6 text-center">
        <div class="section-title mt-5">
            <h3>Management Information System</h3>
            <div class="divider mx-auto mb-4"></div>
        </div>
    </div>
</div>


<div class="d-sm-flex align-items-center justify-content-end mb-4">

    <form action="/dashboard/proyeksi" method="get" class="d-none d-sm-inline-block shadow" >

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari PA" name="search"
                        value="{{ request('search') }}">
                    <button class="btn text-white icofont-search-1" type="submit " style="background-color: #267b9c"></button>
                </div>
    </form>
</div>


<section class="section doctors">
    <div class="container">
        <div class="col-12 text-center  mb-5">
            <div class="btn-group btn-group-toggle " data-toggle="buttons">
                <label class="btn  ">
                    <input type="radio" name="shuffle-filter" value="all" checked="checked"/>Semua Kategori
                </label>
                <label class="btn ">
                    <input type="radio" name="shuffle-filter" value="cat1"  active/>Transaction Processing System
                </label>
                <label class="btn ">
                    <input type="radio" name="shuffle-filter" value="cat2" />Management Information System
                </label>
                <label class="btn active">
                    <input type="radio" name="shuffle-filter" value="cat3" />Decision Support System
                </label>
            </div>
        </div>


        <div class="row shuffle-wrapper portfolio-gallery">

            <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item illustration" data-groups="[&quot;cat3&quot;]">
                <div class="position-relative doctor-inner-box">
                    <div class="doctor-profile">
                        <div class="doctor-img">
                            <img src="images/gambarPA.png" alt="doctor-image" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="content mt-3">
                        <h4 class="mb-0"><a href="doctor-single.html">Thomas Henry</a></h4>
                        <p>Decision Support System</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item illustration" data-groups="[&quot;cat3&quot;]">
                <div class="position-relative doctor-inner-box">
                    <div class="doctor-profile">
                        <div class="doctor-img">
                            <img src="images/gambarPA.png" alt="doctor-image" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="content mt-3">
                        <h4 class="mb-0"><a href="doctor-single.html">Thomas Henry</a></h4>
                        <p>Decision Support System</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

@endsection
