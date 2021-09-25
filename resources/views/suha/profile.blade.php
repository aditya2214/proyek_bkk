@extends('suha.layouts.app')

@section('content')
<div>
     <!-- Header Area-->
     <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper-->
        <div class="logo-wrapper"><a href="{{ url ('/home')}}"><img src="suha/dist/img/core-img/logo-small.png" alt=""></a></div>
        <!-- Search Form-->
        <div class="top-search-form">
          <form action="" method="">
            <input class="form-control" type="search" placeholder="Enter your keyword">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler d-flex flex-wrap" id="suhaNavbarToggler"><span></span><span></span><span></span></div>
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
    <!-- profil probadi -->
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
          <!-- User Information-->
          <div class="card user-info-card">
            <div class="card-body p-4 d-flex align-items-center">
              <div class="user-profile me-3"><img src="suha/dist/img/bg-img/9.jpg" alt=""></div>
              <div class="user-info">
                <p class="mb-0 text-white">{{ Auth::user()->email}}</p>
                <h5 class="mb-0">{{ Auth::user()->name}}</h5>
              </div>
            </div>
          </div>
          <!-- User Meta Data-->
          
          <div class="card user-data-card">
            <div class="card-body">
              @if($profile == null)
              <div class="edit-profile-btn mt-3"><a class="btn btn-info w-100" href="{{ url ('edit-profile') }}"><i class="lni lni-pencil me-2"></i>Add Profile</a></div>
              @else
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-user"></i><span>Username</span></div>
                <div class="data-content">{{ Auth::user()->email}}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-user"></i><span>Full Name</span></div>
                <div class="data-content">{{$profile->nama_lengkap}}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-phone"></i><span>Phone</span></div>
                <div class="data-content">{{ $profile->no_hp}}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i  class="lni lni-map-marker"></i><span>Address</span></div>
                <div class="data-content">{{ $profile->alamat}}                                </div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-slim"></i><span>Jenis kelamin</span></div>
                <div class="data-content">{{ $profile->jenis_kelamin}}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-calendar"></i><span>Tanggal Lahir</span></div>
                <div class="data-content">{{ $profile->tanggal_lahir }}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-zoom-in"></i><span>Tinggi Badan</span></div>
                <div class="data-content">{{ $profile->tinggi_badan }}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-weight"></i><span>Berat Badan</span></div>
                <div class="data-content">{{ $profile->berat_badan }}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-map-marker"></i><span>Alamat Lengkap</span></div>
                <div class="data-content">{{ $profile->alamat }}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-graduation"></i><span>Pendidikan</span></div>
                <div class="data-content">{{$profile->pendidikan_terakhir}}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-eraser"></i><span>Alumni</span></div>
                <div class="data-content">{{$profile->alumni}}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-slack"></i><span>Bahasa</span></div>
                <div class="data-content">{{$profile->bahasa}}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-ruler-pencil"></i><span>Keahlian</span></div>
                <div class="data-content">{{$profile->keahlian}}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-radio-button"></i><span>Pengalaman Kerja</span></div>
                <div class="data-content">{{$profile->pengalaman}}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-world"></i><span>Media Sosial</span></div>
                <div class="data-content">{{$profile->media_sosial}}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-star-filled"></i><span>Hobi</span></div>
                <div class="data-content">{{$profile->hobi}}</div>
              </div>

              <!-- Edit Profile-->
              <div class="edit-profile-btn mt-3"><a class="btn btn-info w-100" href="{{ url ('edit-profile') }}"><i class="lni lni-pencil me-2"></i>Edit Profile</a></div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- profil detail -->
    
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