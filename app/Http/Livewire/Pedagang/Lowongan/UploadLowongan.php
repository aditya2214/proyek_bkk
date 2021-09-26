<?php

namespace App\Http\Livewire\Pedagang\Lowongan;

use Livewire\Component;
use DB;

class UploadLowongan extends Component
{
    public $basic;
    public $tempat;
    public $pendidikan;
    public $lokasi;
    public $batas_akhir;

    public function render()
    {
        return view('livewire.pedagang.lowongan.upload-lowongan');
    }

    public function posting_loker(){
        $post_loker = DB::table('header_loker')->insert([
            'basic' => $this->basic,
            'tempat' => $this->tempat,
            'pendidikan' => $this->pendidikan,
            'lokasi' => $this->lokasi,
            'batas_akhir' => $this->batas_akhir,
            'conf' => 1
        ]);
        
    }
}
