<?php

namespace App\Http\Livewire\Pedagang\Lowongan;

use Livewire\Component;
use DB,Auth;
class ViewPeserta extends Component
{


    public function render()
    {
        $lokers = DB::table('header_loker')->where('id',$id)->get();
        $daftar_peserta = DB::table('body_loker')
                        ->join('profil_pribadi','body_loker.id_peserta', '=', 'profil_pribadi.id')
                        ->join('users','profil_pribadi.id_user','=','users.id')
                        ->select('profil_pribadi.*','users.*')
                        ->get();

        return view('livewire.pedagang.lowongan.view-peserta',compact('lokers','daftar_peserta'));
    }


    
    
}
