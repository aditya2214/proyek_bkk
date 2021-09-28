<?php

namespace App\Http\Livewire\Pedagang\Lowongan;

use Livewire\Component;
use DB,Auth;
class ViewPeserta extends Component
{

    public $idd;

    public $name_search;
    public $date_search;

    protected $listeners = [
        'view_peserta' => 'handle_view_peserta'
    ];

    public function render()
    {
        $lokers = DB::table('header_loker')->where('id',$this->idd)->get();
        
        $daftar_peserta = DB::table('body_loker')
                        ->join('profil_pribadi','body_loker.id_peserta', '=', 'profil_pribadi.id')
                        ->join('users','profil_pribadi.id_user','=','users.id')
                        ->select('profil_pribadi.*','users.*','body_loker.*')
                        ->where('body_loker.id_loker',$this->idd)
                        ->where('profil_pribadi.nama_lengkap','like','%'.$this->name_search.'%')
                        ->get();
        // dd($daftar_peserta);

        return view('livewire.pedagang.lowongan.view-peserta',compact('lokers','daftar_peserta'));
    }

    public function handle_view_peserta($id){
        // dd($id);
        $this->idd = $id;
    }
    
    public function back(){
        $vp = 0;

        $this->emit('back',$vp);
    }
}
