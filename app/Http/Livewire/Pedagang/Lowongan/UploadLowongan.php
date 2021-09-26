<?php

namespace App\Http\Livewire\Pedagang\Lowongan;

use Livewire\Component;
use DB;

class UploadLowongan extends Component
{
    public $id_loker;
    public $basic;
    public $tempat;
    public $pendidikan;
    public $lokasi;
    public $batas_akhir;
    public $desk;
    public $spesifikasi;
    public $config_form = 0;
    public function render()
    {
        $lokers = DB::table('header_loker')->get();

        return view('livewire.pedagang.lowongan.upload-lowongan',compact('lokers'));
    }

    public function resetInput(){
        $this->basic = null;
        $this->tempat = null;
        $this->pendidikan = null;
        $this->lokasi = null;
        $this->batas_akhir = null;
        $this->desk = null;
        $this->spesifikasi = null;
    }

    public function posting_loker(){
        $post_loker = DB::table('header_loker')->insert([
            'basic' => $this->basic,
            'tempat' => $this->tempat,
            'pendidikan' => $this->pendidikan,
            'lokasi' => $this->lokasi,
            'batas_akhir' => $this->batas_akhir,
            'conf' => 1,
            'deskripsi' => $this->desk,
            'spesifikasi' => $this->spesifikasi
        ]);

        $this->resetInput();
        
    }

    public function update_loker(){
        $post_loker = DB::table('header_loker')->where('id',$this->id_loker)->update([
            'basic' => $this->basic,
            'tempat' => $this->tempat,
            'pendidikan' => $this->pendidikan,
            'lokasi' => $this->lokasi,
            'batas_akhir' => $this->batas_akhir,
            'conf' => 1,
            'deskripsi' => $this->desk,
            'spesifikasi' => $this->spesifikasi
        ]);

        $this->resetInput();
        $this->config_form = 0;
    }



    public function edit_loker($id){
        $this->config_form = 1;

        $edit_loker = DB::table('header_loker')->where('id',$id)->first();
        $this->id_loker = $edit_loker->id;
        $this->basic = $edit_loker->basic;
        $this->tempat = $edit_loker ->tempat;
        $this->pendidikan = $edit_loker ->pendidikan;
        $this->lokasi = $edit_loker ->lokasi;
        $this->batas_akhir = $edit_loker ->batas_akhir;
        $this->desk = $edit_loker ->deskripsi;
        $this->spesifikasi = $edit_loker ->spesifikasi;
    }
}
