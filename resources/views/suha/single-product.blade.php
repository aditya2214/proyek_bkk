@extends('suha.layouts.app')

@section('content')
<div>
        <!-- Header Area-->
        <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ url ('home') }}">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Product Details</h6>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler d-flex justify-content-between flex-wrap" id="suhaNavbarToggler"><span></span><span></span><span></span></div>
      </div>
    </div>
    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>
    <!-- Side Nav Wrapper-->
    <div class="suha-sidenav-wrapper" id="sidenavWrapper">
      <!-- Sidenav Profile-->
      @include('suha.auth')
      <!-- Go Back Button-->
      <div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-left"></i></div>
    </div>
    <div class="page-content-wrapper">
      <!-- Product Slides-->
      <div class="product-slides owl-carousel">
        <!-- Single Hero Slide-->
        <div class="single-product-slide" style="background-image: 'suha/dist/img/download.png')"></div>
        <!-- Single Hero Slide-->
        <div class="single-product-slide" style="background-image: 'suha/dist/img/download.png')"></div>
        <!-- Single Hero Slide-->
        <div class="single-product-slide" style="background-image: 'suha/dist/img/download.png')"></div>
      </div>
      <div class="product-description pb-3">
        <!-- Product Title & Meta Data-->
        <div class="product-title-meta-data bg-white mb-3 py-3">
          <div class="container d-flex justify-content-between">
            <div class="p-title-price">
              <h6 class="mb-1">{{$loker->basic}}</h6>
              <!-- <p class="sale-price mb-0">$38<span>$41</span></p> -->
            </div>
            <!-- <div class="p-wishlist-share"><a href="{{ url ('wishlist-grid') }}"><i class="lni lni-heart"></i></a></div> -->
          </div>
          <!-- Ratings-->
        </div>
        <!-- deskripsi -->
        <div class="p-specification bg-white mb-3 py-3">
          <div class="container">
            <h6>Deskripsi</h6>
            @foreach(explode("|",$loker -> deskripsi) as $desk)
            <p>{{$desk}}</p>
            @endforeach
          </div>
        </div>
        <!-- Specification-->
        <div class="p-specification bg-white mb-3 py-3">
          <div class="container">
            <h6>Spesifikasi</h6>
            @foreach(explode("|",$loker -> spesifikasi) as $spek)
            <p>{{$spek}}</p>
            @endforeach
          </div>
        </div>
        <!-- Rating & Review Wrapper-->
        <div class="row">
            <div class="col">

              <a href="{{ url ('daftar/'.$loker->id) }}" class="btn btn-primary form-control"><b>Daftar</b></a>
            </div>
        </div>
      </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
      <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
          <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
            <li class="active"><a href="{{ url ('home') }}"><i class="lni lni-home"></i>Home</a></li>
            <li><a href="{{ url ('message') }}"><i class="lni lni-life-ring"></i>Support</a></li>
            <li><a href="{{ url ('cart') }}"><i class="lni lni-shopping-basket"></i>Cart</a></li>
            <li><a href="{{ url ('pages') }}"><i class="lni lni-heart"></i>Pages</a></li>
            <li><a href="{{ url ('settings') }}"><i class="lni lni-cog"></i>Settings</a></li>
          </ul>
        </div>
      </div>
    </div>
</div>
@endsection