<?php

namespace App\Http\Livewire\Pedagang\Dashboard;

use Livewire\Component;
use DB;
use Auth;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pedagang.dashboard.index');
    }

}
