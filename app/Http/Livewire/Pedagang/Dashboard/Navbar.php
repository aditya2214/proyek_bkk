<?php

namespace App\Http\Livewire\Pedagang\Dashboard;

use Livewire\Component;

class Navbar extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.pedagang.dashboard.navbar');
    }

    public function searching(){
        $se = $this->search;

        // dd($se);
        $this->emit('searching',$se);

    }
}
