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
        if(Auth::user()){
            return view("hr_mgr.index",[
                "user"=>Auth::user(),
                "employees"=>Employee::All(),
                "attendance"=>DB::table('attendance')
                ->join('employees', 'attendance.employee_id', '=', 'employees.id')
                ->whereDay('attendance.check_in', '=', now()->day)
                ->select('employees.*', 'attendance.*')
                ->paginate(10)
            ]);
        }
        else if(Auth::attempt(['email' => $email, 'password' => $password])){
            return view("hr_mgr.index",[
                "user"=>Auth::user(),
                "employees"=>Employee::All(),
                "attendance"=> DB::table('attendance')
                ->join('employees', 'attendance.employee_id', '=', 'employees.id')
                ->whereDay('attendance.check_in', '=', now()->day)
                ->select('employees.*', 'attendance.*')
                ->paginate(10)
            ]);
        }else{
            return view("hr_mgr.login");
        }
    }
    public function getUserPage(){
        return view("hr_mgr.HrAccount");
    }
    public function assigNewPassaword(Request $req,$email){
        return view("hr_mgr.ChangePassword",[
            "email"=>$email
        ]);

    }

}
