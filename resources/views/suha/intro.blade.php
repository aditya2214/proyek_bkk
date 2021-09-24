@extends('suha.layouts.app')

@section('content')
    <div class="intro-wrapper d-flex align-items-center justify-content-center text-center">
      <!-- Background Shape-->
      <div class="background-shape"></div>
      <div class="container"><img class="big-logo" src="suha/dist/img/logo-img/logo2.png" alt=""></div>
    </div>
    <div class="get-started-btn"><a class="btn btn-success btn-lg w-100" href="{{ url ('home') }}">Get Started</a></div>
@endsection