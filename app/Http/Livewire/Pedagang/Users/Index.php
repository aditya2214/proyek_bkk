<?php

namespace App\Http\Livewire\Pedagang\Users;

use Livewire\Component;
use DB;
use Auth;

class Index extends Component
{
    public $search;

    protected $queryString = ['search'];

    public $listeners = [
        'handle_searching' => 'two_handle_shearching'
    ];

    public function render()
    {

        $users = DB::table('users')->where('name','like','%'.$this->search.'%')->orwhere('email','like','%'.$this->search.'%')->get();

        return view('livewire.pedagang.users.index',compact('users'));
    }

    public function set_admin($id){
        $set_admin = DB::table('users')->where('id',$id)->update([
            'role' => 1
        ]);
    }

    public function two_handle_shearching($se){
        $this->search = $se;
    }
}
