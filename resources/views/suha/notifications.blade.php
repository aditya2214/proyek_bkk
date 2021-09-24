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
          <h6 class="mb-0">Notifications</h6>
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
      <div class="sidenav-profile">
        <div class="user-profile"><img src="suha/dist/img/bg-img/9.jpg" alt=""></div>
        <div class="user-info">
          <h6 class="user-name mb-0">Suha Jannat</h6>
          <p class="available-balance">Balance <span>$<span class="counter">523.98</span></span></p>
        </div>
      </div>
      <!-- Sidenav Nav-->
      <ul class="sidenav-nav ps-0">
        <li><a href="{{ url ('profile') }}"><i class="lni lni-user"></i>My Profile</a></li>
        <li><a href="{{ url ('notifications') }}"><i class="lni lni-alarm lni-tada-effect"></i>Notifications<span class="ms-3 badge badge-warning">3</span></a></li>
        <li class="suha-dropdown-menu"><a href="#"><i class="lni lni-cart"></i>Shop Pages</a>
          <ul>
            <li><a href="{{ url ('shop-grid') }}">- Shop Grid</a></li>
            <li><a href="{{ url ('shop-list') }}">- Shop List</a></li>
            <li><a href="{{ url ('single-product') }}">- Product Details</a></li>
            <li><a href="{{ url ('featured-products') }}">- Featured Products</a></li>
            <li><a href="{{ url ('flash-sale') }}">- Flash Sale</a></li>
          </ul>
        </li>
        <li><a href="{{ url ('pages') }}"><i class="lni lni-empty-file"></i>All Pages</a></li>
        <li class="suha-dropdown-menu"><a href="{{ url ('wishlist-grid') }}"><i class="lni lni-heart"></i>My Wishlist</a>
          <ul>
            <li><a href="{{ url ('wishlist-grid') }}">- Wishlist Grid</a></li>
            <li><a href="{{ url ('wishlist-list') }}">- Wishlist List</a></li>
          </ul>
        </li>
        <li><a href="{{ url ('settings') }}"><i class="lni lni-cog"></i>Settings</a></li>
        <li><a href="{{ url ('intro') }}"><i class="lni lni-power-switch"></i>Sign Out</a></li>
      </ul>
      <!-- Go Back Button-->
      <div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-left"></i></div>
    </div>
    <!-- Page Content Wrapper-->
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Section Heading-->
        <div class="section-heading d-flex align-items-center pt-3 justify-content-between">
          <h6>Notification(s)</h6><a class="notification-clear-all text-secondary" href="#">Clear All</a>
        </div>
        <!-- Notifications Area-->
        <div class="notification-area pb-2">
          <div class="list-group">
            <!-- Single Notification--><a class="list-group-item d-flex align-items-center" href="{{ url ('notification-details') }}"><span class="noti-icon"><i class="lni lni-alarm"></i></span>
              <div class="noti-info">
                <h6 class="mb-0">Suha just uploaded a new product!</h6><span>12 min ago</span>
              </div></a>
            <!-- Single Notification--><a class="list-group-item d-flex align-items-center" href="{{ url ('notification-details') }}"><span class="noti-icon"><i class="lni lni-dropbox"></i></span>
              <div class="noti-info">
                <h6 class="mb-0">Black Friday Deals in One Place</h6><span>49 min ago</span>
              </div></a>
            <!-- Single Notification--><a class="list-group-item d-flex align-items-center" href="{{ url ('notification-details') }}"><span class="noti-icon"><i class="lni lni-reply"></i></span>
              <div class="noti-info">
                <h6 class="mb-0">Share your experience, it's matters!</h6><span>58 min ago</span>
              </div></a>
            <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ url ('notification-details') }}"><span class="noti-icon"><i class="lni lni-ship"></i></span>
              <div class="noti-info">
                <h6 class="mb-0">Your order has been delivered.</h6><span>Yesterday</span>
              </div></a>
            <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ url ('notification-details') }}"><span class="noti-icon"><i class="lni lni-heart-filled"></i></span>
              <div class="noti-info">
                <h6 class="mb-0">Your wishlist is updated.</h6><span>2 days ago</span>
              </div></a>
            <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ url ('notification-details') }}"><span class="noti-icon"><i class="lni lni-thunder"></i></span>
              <div class="noti-info">
                <h6 class="mb-0">11% Price drop! Hurry up.</h6><span>2 days ago</span>
              </div></a>
            <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ url ('notification-details') }}"><span class="noti-icon"><i class="lni lni-offer"></i></span>
              <div class="noti-info">
                <h6 class="mb-0">Use 30% Discount Code</h6><span>3 days ago</span>
              </div></a>
            <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ url ('notification-details') }}"><span class="noti-icon"><i class="lni lni-ship"></i></span>
              <div class="noti-info">
                <h6 class="mb-0">Your order has been delivered.</h6><span>Yesterday</span>
              </div></a>
            <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ url ('notification-details') }}"><span class="noti-icon"><i class="lni lni-heart-filled"></i></span>
              <div class="noti-info">
                <h6 class="mb-0">Your wishlist is updated.</h6><span>2 days ago</span>
              </div></a>
            <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ url ('notification-details') }}"><span class="noti-icon"><i class="lni lni-thunder"></i></span>
              <div class="noti-info">
                <h6 class="mb-0">11% Price drop! Hurry up.</h6><span>2 days ago</span>
              </div></a>
            <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ url ('notification-details') }}"><span class="noti-icon"><i class="lni lni-offer"></i></span>
              <div class="noti-info">
                <h6 class="mb-0">Use 30% Discount Code</h6><span>3 days ago</span>
              </div></a>
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