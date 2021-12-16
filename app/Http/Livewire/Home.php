<?php

namespace App\Http\Livewire;

use App\Models\todo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public $title;
    public function render()
    {
        $data = todo::where('user_id', Auth::id())->get();
        return view('livewire.home', [ "data" => $data]);
    }

    public function add(){
        // Validations
        $this->validate([
            'title' => 'required|min:3'
        ]);

        // Add to db
        $todo = todo::create([
            'title' => $this->title,
            'user_id' => Auth::id()
        ]);

        if($todo){
            $this->title = "";
            Session()->flash('success', 'Item Added successfully');
        }else{
            $this->error = "Something went wrong";
        }
    }

    public function del($id){
        $del = todo::find($id)->delete();
    }
}
