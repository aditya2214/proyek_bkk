<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/logout', function () {
    Auth::logout();
    
    return view('suha.home');
});

Auth::routes();

// for admin
Route::get('/upload_lowongan', 'HomeController@upload_lowongan')->name('upload_lowongan');
Route::get('/home_admin', 'HomeController@index')->name('index');

// end for admin

//for client
// Route::get('/', function () {
//     return view('suha.intro');
// });
Route::get('/','Suha\ForClientController@home');

Route::get('/home','Suha\ForClientController@home');

Route::get('/about-us','Suha\ForClientController@about_us');

Route::get('/blog-details','Suha\ForClientController@blog_details');

Route::get('/blog-grid','Suha\ForClientController@blog_grid');

Route::get('/blog-list','Suha\ForClientController@blog_list');

Route::get('/cart','Suha\ForClientController@cart');

Route::get('/catagory','Suha\ForClientController@catagory');

Route::get('/change-password','Suha\ForClientController@change_password');

Route::get('/checkout-bank','Suha\ForClientController@checkout_bank');

Route::get('/checkout-cash','Suha\ForClientController@checkout_cash');

Route::get('/checkout-credit-card', 'Suha\ForClientController@checkout_credit_card');

Route::get('/checkout-payment', 'Suha\ForClientController@checkout_payment');

Route::get('/checkout-paypal','Suha\ForClientController@checkout_paypal');

Route::get('/checkout','Suha\ForClientController@checkout');

Route::get('/contact','Suha\ForClientController@contact');

Route::get('/edit-profile','Suha\ForClientController@edit_profile');

Route::get('/featured-products', 'Suha\ForClientController@/featured_products');

Route::get('/flash-sale','Suha\ForClientController@flash_sale');

Route::get('/forget-password-success','Suha\ForClientController@forget_password_success');

Route::get('/forget-password','Suha\ForClientController@forget_password');

// Route::get('/index', 'Suha\ForClientController@blog_details');

Route::get('/intro','Suha\ForClientController@intro');

Route::get('/language', 'Suha\ForClientController@language');

// Route::get('/login', 'Suha\ForClientController@blog_details');

Route::get('/message','Suha\ForClientController@message');

Route::get('/my-order','Suha\ForClientController@my_order');

Route::get('/notification-details', 'Suha\ForClientController@notification_details');

Route::get('/notifications','Suha\ForClientController@notifications');

Route::get('/offline', 'Suha\ForClientController@offline');

Route::get('/otp-confirm','Suha\ForClientController@otp_confirm');

Route::get('/otp','Suha\ForClientController@otp');

Route::get('/pages','Suha\ForClientController@pages');

Route::get('/payment-success', 'Suha\ForClientController@/payment_success');

Route::get('/privacy-police','Suha\ForClientController@/privacy_police');

Route::get('/profile','Suha\ForClientController@profile');

// Route::get('/register', 'Suha\ForClientController@blog_details');

Route::get('/settings','Suha\ForClientController@settings');

Route::get('/shop-grid', 'Suha\ForClientController@shop_grid');

Route::get('/shop-list','Suha\ForClientController@shop_list');

Route::get('/single-product','Suha\ForClientController@single_product');

Route::get('/sub-catagory','Suha\ForClientController@sub_catagory');

Route::get('/support','Suha\ForClientController@support');

Route::get('/wishlist-grid','Suha\ForClientController@wishlist_grid');

Route::get('/wishlist-list','Suha\ForClientController@wishlist_list');


// end for client

