<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $error;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.login');
    }

    public function login(){
        // Validations
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])){
            session()->flash('success', 'You have logged in successfully!');
            return redirect(route('home'));
        }else{
            $this->email = "";
            $this->password = "";
            return $this->error = "Invalid Credentials";
        }
    }
}
