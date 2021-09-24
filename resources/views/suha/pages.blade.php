@extends('suha.layouts.app')

@section('content')
<div>
     <!-- Header Area-->
     <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper-->
        <div class="logo-wrapper"><a href="{{ url ('home') }}"><img src="suha/dist/img/core-img/logo-small.png" alt=""></a></div>
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
    <div class="page-content-wrapper py-3">
      <div class="container">
        <ul class="page-nav ps-0">
          <li><a href="{{ url ('home') }}">Home<span class="badge bg-danger ms-1">Updated</span><i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('shop-grid') }}">Shop Grid<span class="badge bg-danger ms-1">Updated</span><i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('shop-list') }}">Shop List<span class="badge bg-danger ms-1">Updated</span><i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('single-product') }}">Product Details<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('catagory') }}">Catagory<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('sub-catagory') }}">Sub Catagory<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('wishlist-grid') }}">Wishlist Grid<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('wishlist-list') }}">Wishlist List<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('flash-sale') }}">Flash Sale<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('featured-products') }}">Featured Products<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('cart') }}">Cart<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('checkout-bank') }}">Checkout Bank<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('checkout-cash') }}">Checkout Cash<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('checkout-credit-card') }}">Checkout Credit Card<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('checkout-payment') }}">Checkout Payment<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('checkout-paypal') }}">Checkout PayPal<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('checkout') }}">Checkout<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('blog-grid') }}">Blog Grid<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('blog-list') }}">Blog List<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('blog-details') }}">Blog Details<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('change-password') }}">Change Password<i class="lni lni-chevron-right">                   </i></a></li>
          <li><a href="{{ url ('edit-profile') }}">Edit Profile<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('language') }}">Select Language<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('intro') }}">Intro Page<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('login') }}">Login<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('register') }}">Register<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('otp') }}">OTP Send<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('otp-confirm') }}">OTP Confirmation<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('forget-password-success') }}">Forget Password Success<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('forget-password') }}">Forget Password<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('about-us') }}">About Us<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('contact') }}">Contact Us<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('offline') }}">Offline<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('message') }}">Message<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('my-order') }}">Order Status<span class="badge bg-danger ms-1">Updated</span><i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('notification-details') }}">Notifications Details<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('notifications') }}">Notifications<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('payment-success') }}">Payment Success<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('privacy-policy') }}">Privacy Policy<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('profile') }}">Profile<i class="lni lni-chevron-right"></i></a></li>
          <li><a href="{{ url ('settings') }}">Settings<i class="lni lni-chevron-right">                   </i></a></li>
          <li><a href="{{ url ('support') }}">Support<i class="lni lni-chevron-right"></i></a></li>
        </ul>
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