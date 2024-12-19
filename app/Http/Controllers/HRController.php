<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class HRController extends Controller
{
    //
    public function Login(Request $req){
        $email=$req->input("email");
        $password=$req->input("password");
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return view("hr_mgr.index",[
                "user"=>Auth::user(),
                "employees"=>Employee::All(),
                "attendance"=>DB::select("select  employees.* ,attendance.* from attendance join employees where DAY(attendance.check_in)=DAY(now()) and attendance.employee=employees.id ")
            ]);
        }else{
            return view("hr_mgr.login");
        }
    }

}
