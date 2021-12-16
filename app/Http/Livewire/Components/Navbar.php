<?php

namespace App\Http\Livewire\Components;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.components.navbar');
    }

    public function logout(){
        Auth::logout();

        Session()->flash('success', 'Logged out successfully');
        return redirect(route('login'));
    }
}
