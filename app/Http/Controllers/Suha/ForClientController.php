<?php

namespace App\Http\Controllers\Suha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;


class ForClientController extends Controller
{
   public function home(){
       return view('suha.home');
   }

   public function about_us(){
       return view('suha.about_us');
   }

   public function blog_details(){
    return view('suha.blog-details');
   }

   public function blog_grid(){
    return view('suha.blog-grid');
   }

   public function blog_list(){
    return view('suha.blog-list');
   }

   public function cart(){
    return view('suha.cart');
   }

   public function catagory(){
    return view('suha.catagory');
   }

   public function change_password(){
    return view('suha.change-password');
   }

   public function checkout_bank(){
    return view('suha.checkout-bank');
   }

   public function checkout_cash(){
    return view('suha.checkout-cash');
   }

   public function checkout_credit_card(){
    return view('suha.checkout-credit-card');
   }

   public function checkout_payment(){
    return view('suha.checkout-payment');
   }

   public function checkout_paypal(){
    return view('suha.checkout-paypal');
   }

   public function checkout(){
    return view('suha.checkout');
   }

   public function contact(){
    return view('suha.contact');
   }

   public function edit_profile(){
    return view('suha.edit-profile');
   }

   public function featured_products(){
    return view('suha.featured-products');
   }

   public function flash_sale(){
    return view('suha.flash-sale');
   }

   public function forget_password_success(){
    return view('suha.forget-password-success');
   }

   public function forget_password(){
    return view('suha.forget-password');
   }

   public function intro(){
    return view('suha.intro');
   }

   public function language(){
    return view('suha.language');
   }

   public function message(){
    return view('suha.message');
   }

   public function my_order(){
    return view('suha.my-order');
   }

   public function notification_details(){
    return view('suha.notification-details');
   }

   public function notifications(){
    return view('suha.notifications');
   }

   public function offline(){
    return view('suha.offline');
   }

   public function otp_confirm(){
    return view('suha.otp-confirm');
   }

   public function otp(){
    return view('suha.otp');
   }

   public function pages(){
    return view('suha.pages');
   }

   public function payment_success(){
    return view('suha.payment-success');
   }

   public function privacy_police(){
    return view('suha.privacy-police');
   }

   public function profile(){
    $profile = DB::table('users')
            ->leftjoin('profil_pribadi','users.id', '=', 'profil_pribadi.id_user')
            ->leftjoin('profil_detail','profil_pribadi.id','=','profil_detail.id_profil_pribadi')
            ->select('users.*','profil_pribadi.*','profil_detail.*')
            ->where('users.id',Auth::user()->id)
            ->get();
        // return $profile;
    return view('suha.profile',compact('profile'));
   }

   public function settings(){
    return view('suha.settings');
   }

   public function shop_grid(){
    return view('suha.shop-grid');
   }

   public function shop_list(){
    return view('suha.shop-list');
   }

   public function single_product(){
    return view('suha.single-product');
   }

   public function sub_catagory(){
    return view('suha.sub-catagory');
   }

   public function support(){
    return view('suha.support');
   }

   public function wishlist_grid(){
    return view('suha.wishlist-grid');
   }

   public function wishlist_list(){
    return view('suha.wishlist-list');
   }



}
