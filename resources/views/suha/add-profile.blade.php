@extends('suha.layouts.app')

@section('content')
<div>
        <!-- Header Area-->
        <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ url ('profile') }} ">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Edit Profile</h6>
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
      <div class="container">
        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
          <!-- User Information-->
          <div class="card user-info-card">
            <div class="card-body p-4 d-flex align-items-center">
              <div class="user-profile me-3"><img src="suha/dist/img/bg-img/9.jpg" alt="">
                <div class="change-user-thumb">
                  <form>
                    <input class="form-control-file" type="file">
                    <button><i class="lni lni-pencil"></i></button>
                  </form>
                </div>
              </div>
              <div class="user-info">
                <p class="mb-0 text-white">{{ Auth::user()->email}}</p>
                <h5 class="mb-0">{{ Auth::user()->name}}</h5>
              </div>
            </div>
          </div>
          <!-- profil pribadi-->
          <div class="card user-data-card">
            <div class="card-body">
              <form action="{{ url ('post-profil-pribadi') }}" method="post">
                @csrf
                <div class="mb-3">
                  <div class="title mb-2"><span>NIK</span></div>
                  <input class="form-control" type="number" name="nik" required value="">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><span>Nama Lengkap</span></div>
                  <input class="form-control" type="text" name="nama_lengkap" required value="">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><span>Nomor Telp</span></div>
                  <input class="form-control" type="tel" name="no_hp" required value="">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><span>Jenis Kelamin</span></div>
                  <input class="form-control" type="text" name="jenis_kelamin" required value="">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><span>Tanggal Lahir</span></div>
                  <input class="form-control" type="date"name="tanggal_lahir" required value="">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><span>Tinggi Badan</span></div>
                  <input class="form-control" type="number" name="tinggi_badan" value="">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><span>Berat Badan</span></div>
                  <input class="form-control" type="number" name="berat_badan" value="">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><span>Alamat Lengkap</span></div>
                  <input class="form-control" type="text" name="alamat" value="">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><span>Pendidikan Terakhir</span></div>
                  <input class="form-control" type="text" name="pendidikan_terakhir" required value="">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><span>Alumni</span></div>
                  <input class="form-control" type="text" name="alumni" value="">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><span>Bahasa</span></div>
                  <input class="form-control" type="text" name="bahasa" value="">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><span>Keahlian</span></div>
                  <input class="form-control" type="text" name="keahlian" value="">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><span>Pengalaman Kerja</span></div>
                  <input class="form-control" type="text" name="pengalaman" value="">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><span>Sosial Media</span></div>
                  <input class="form-control" type="text" name="media_sosial" value="">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><span>Hobi</span></div>
                  <input class="form-control" type="text" name="hobi" value="">
                </div>
                <button class="btn btn-success w-100" type="submit">Save All Changes</button>
              </form>
            </div>
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