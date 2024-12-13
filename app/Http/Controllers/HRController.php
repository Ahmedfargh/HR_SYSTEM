<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HRController extends Controller
{
    //
    public function Login(Request $req){
        $email=$req->input("email");
        
        $password=\Hash::make($req->input("password"));
        $record=User::where("email","=",$email)->first();
        if(\Hash::check($req->input("password"),$record->password)){
            $_SESSION["user"]=$record;
            return view("hr_mgr/index",[
                "user"=>$record
            ]);
        }else{
            return view('hr_mgr/login');
        }
    }
}
