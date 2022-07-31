@extends('dashboard.layout.main')
@section('container')

<div class="container-fluid">
  @if (auth()->user())
  <h2 class="d-none d-lg-inline text-black">Selamat datang, {{ auth()->user()->username }}!</h2>
  @endif
  <div class="row mt-4">
    <div class="col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Daftar HKI
              </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, ea?</div>
                  </div>
              <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
              </div>
          </div>
      </div>
    </div>
    <div class="col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                HKI Saya
              </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Lorem ipsum dolor sit amet.</div>
                  </div>
              <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
