<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $cpassword;
    public $error;

    public function render()
    {
        return view('livewire.register');
    }

    public function handlesubmit(){
        // Validations
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8|same:cpassword',
            'cpassword' => 'required'
        ]);
        
        // add to db
        $hashpass = Hash::make($this->password);
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $hashpass
        ]);

        if($user){
            Session()->flash('success', 'You have registered successfully');
            return redirect(route("login"));
        }else{
            $this->error = "Something went wrong";
        }
    }
}
