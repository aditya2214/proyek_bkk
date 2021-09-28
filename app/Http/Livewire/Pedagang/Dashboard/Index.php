<?php

namespace App\Http\Livewire\Pedagang\Dashboard;

use Livewire\Component;
use DB;
use Auth;



class Index extends Component

{
    public $query;

    protected $queryString = ['query'];

    protected $listeners = [
        'searching' => 'handle_searching'
    ];

    public function render()
    {
        return view('livewire.pedagang.dashboard.index');
    }

    public function handle_searching($se){

        $this->emit('handle_searching',$se);
    }
    
    public function goto_shortcut(){
        $this->query = 1;
    }

    public function goto_users(){
        $this->query = 2;
    }

    public function goto_upload_loker(){
        $this->query = 3;
    }

}
