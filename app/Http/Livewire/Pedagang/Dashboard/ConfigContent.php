<?php

namespace App\Http\Livewire\Pedagang\Dashboard;

use Livewire\Component;

class ConfigContent extends Component
{
    public $query;

    protected $queryString = ['query'];

    public $listeners = [
        'goto_upload_loker' => 'handle_goto_upload_loker',
        'goto_shortcut' => 'handle_goto_shortcut',
        'goto_users' => 'handle_goto_users',
    ];

    public function render()
    {
        return view('livewire.pedagang.dashboard.config-content');
    }

    public function handle_goto_upload_loker($query){
        $this->query = $query;
    }

    public function handle_goto_shortcut($query){
        $this->query = $query;
    }

    public function handle_goto_users($query){
        $this->query = $query;
    }
}
