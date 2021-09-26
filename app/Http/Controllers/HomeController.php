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

    public function home_admin(){

        return view('home_admin');
    }

    public function view_peserta($id){
        $lokers = DB::table('header_loker')->where('id',$id)->get();
        $daftar_peserta = DB::table('body_loker')
                        ->join('profil_pribadi','body_loker.id_peserta', '=', 'profil_pribadi.id')
                        ->join('users','profil_pribadi.id_user','=','users.id')
                        ->select('body_loker.*','profil_pribadi.*','users.*')
                        ->where('id_loker',$id)
                        ->get();
                        // return $daftar_peserta;

        return view('livewire.pedagang.lowongan.view-peserta',compact('lokers','daftar_peserta'));
    }
}

