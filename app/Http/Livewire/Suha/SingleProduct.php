<?php

namespace App\Http\Livewire\Suha;

use Livewire\Component;

class SingleProduct extends Component
{
    public $single_product_data;

    protected $listeners = [
        'single_product' => 'handle_single_product'
    ];

    public function render()
    {
        return view('livewire.suha.single-product',[
            'single_product' => $this->single_product_data
        ]);
    }

    public function handle_single_product($id){
        $this->single_product_data = \App\Produk::where('id',$id)->first();
    }
}
