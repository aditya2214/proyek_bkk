<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth,DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        if (Auth::user()->role == 0) {
            $lokers = DB::table('header_loker')->where('conf',1)->get();
            $view = view('suha.home',compact('lokers'));
            return $view;
        }else{
            $view = view('home');
            return $view;

        }    
    }


    public function produk(){
        
        return view('produk');
    }

    public function pengguna(){
        
        return view('pengguna');
    }

    public function upload_lowongan(){

        return view('upload_lowongan');
    }
}

