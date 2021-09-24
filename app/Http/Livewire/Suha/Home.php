<?php

namespace App\Http\Livewire\Suha;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.suha.home',[
            'produk_flash_sale' => \App\Produk::where('stock_produk', 1)->where('diskon','>',0)->get()
        ]);
    }

    public function single_product($id){
        // dd($id)
        $this->emit('single_product',$id);
    }
}
