<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

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
                "user"=>$record,
                "employees"=>Employee::All(),
                "attendance"=>DB::select("select  employees.* ,attendance.* from attendance join employees where DAY(attendance.check_in)=DAY(now()) and attendance.employee=employees.id ")
            ]);
        }else{
            return view('hr_mgr/login');
        }
    }
    public function register(Requset $req){
        $validate=$req->validate(["name"]);
    }
}
