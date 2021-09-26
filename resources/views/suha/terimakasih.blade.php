@extends('suha.layouts.app')

@section('content')
    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <!-- Background Shape-->
      <div class="background-shape"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5"><img class="big-logo" src="img/core-img/logo-white.png" alt="">
            <!-- Register Form-->
            <h1><b>Pendaftaran Anda Berhasil.</b></h1>
            <!-- View As Guest-->
            <div class="view-as-guest mt-3"><a class="btn" href="{{ url ('home') }}">Kembali Ke Awal</a></div>
          </div>
        </div>
      </div>
    </div>
@endsection