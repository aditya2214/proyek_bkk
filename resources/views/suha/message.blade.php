@extends('suha.layouts.app')

@section('content')
<div>
     <!-- Internet Connection Status-->
     <div class="internet-connection-status" id="internetStatus"></div>
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
          <h6 class="mb-0">Live Chat</h6>
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
    <div class="page-content-wrapper">
      <!-- Live Chat Intro-->
      <div class="live-chat-intro mb-3">
        <p>Start a conversation</p><img src="suha/dist/img/bg-img/9.jpg" alt="">
        <div class="status online">We're online</div>
        <!-- Use this code for "Offline" Status-->
        <!-- .status.offline We’ll be back soon-->
      </div>
      <!-- Support Wrapper-->
      <div class="support-wrapper py-3">
        <div class="container">
          <!-- Live Chat Wrapper-->
          <div class="live-chat-wrapper">
            <!-- Agent Message Content-->
            <div class="agent-message-content d-flex align-items-start">
              <!-- Agent Thumbnail-->
              <div class="agent-thumbnail me-2 mt-2"><img src="suha/dist/img/bg-img/9.jpg" alt=""></div>
              <!-- Agent Message Text-->
              <div class="agent-message-text">
                <div class="d-block">
                  <p>Hi there! You can start asking your question below. I am ready to help.</p>
                </div>
                <div class="d-block">
                  <p>How can I help you with?</p>
                </div><span>12:00</span>
              </div>
            </div>
            <!-- User Message Content-->
            <div class="user-message-content">
              <!-- User Message Text-->
              <div class="user-message-text">
                <div class="d-block">
                  <p>I liked your template.</p>
                </div><span>12:18</span>
              </div>
            </div>
            <!-- Agent Message Content-->
            <div class="agent-message-content d-flex align-items-start">
              <!-- Agent Thumbnail-->
              <div class="agent-thumbnail me-2 mt-2"><img src="suha/dist/img/bg-img/9.jpg" alt=""></div>
              <!-- Agent Message Text-->
              <div class="agent-message-text">
                <div class="d-block">
                  <p>Thank you.</p>
                </div><span>12:36</span>
              </div>
            </div>
            <!-- User Message Content-->
            <div class="user-message-content">
              <!-- User Message Text-->
              <div class="user-message-text">
                <div class="d-block">
                  <p>How can I buy this?</p>
                </div><span>12:42</span>
              </div>
            </div>
            <!-- Agent Message Content-->
            <div class="agent-message-content d-flex align-items-start">
              <!-- Agent Thumbnail-->
              <div class="agent-thumbnail me-2 mt-2"><img src="suha/dist/img/bg-img/9.jpg" alt=""></div>
              <!-- Agent Message Text-->
              <div class="agent-message-text">
                <div class="d-block">
                  <div class="writing-mode"><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Type Message Form-->
    <div class="type-text-form">
      <form action="#">
        <div class="form-group file-upload mb-0">
          <input type="file"><i class="lni lni-plus"></i>
        </div>
        <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Type your message"></textarea>
        <button type="submit">
          <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
          </svg>
        </button>
      </form>
    </div>
</div>
@endsection