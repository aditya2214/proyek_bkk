<?php

namespace App\Http\Livewire\Pedagang\Dashboard;

use Livewire\Component;

class Sidebar extends Component
{ 

    public function render()
    {
        return view('livewire.pedagang.dashboard.sidebar');
    }

    public function goto_upload_loker(){
        $query = 'upload_loker';
        
        $this->emit('goto_upload_loker',$query);
    }

    public function goto_shortcut(){
        $query = 'dashboard';
        
        $this->emit('goto_shortcut',$query);
    }

    public function goto_users(){
        $query = 'users';
        
        $this->emit('goto_users',$query);
    }
}
