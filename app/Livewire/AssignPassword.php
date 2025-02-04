<?php

namespace App\Livewire;

use Livewire\Component;
use App\models\User;
use Illuminate\Support\Facades\Hash;
class AssignPassword extends Component
{
    public $password="";
    public $confirm_password="";
    public $email="";
    
    public function render()
    {
        if($this->email==""){
            return $this->redirect("/reset/password");
        }
        return view('livewire.assign-password');
    }
    public function assign(){
        
        if($this->password==$this->password &&(User::where("email","=",$this->email)->exists())){
            $user=User::where("email","=",$this->email)->first();
            $user->password=Hash::make($this->password);
            $user->save();
            return $this->redirect("/");
        }
    }
}
