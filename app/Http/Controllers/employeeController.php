<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Jobs\sendAddingEmpsms;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeeExports;
use App\Jobs\NotifyUsers;
use App\Notifications\UserNotification;
use Illuminate\Support\Facades\Auth;
class employeeController extends Controller
{
    //
    public function register(Request $req){
        $employee=Employee::create([
            "name_"=>$req->input("name"),
            "email"=>$req->input("email"),
            "salary"=>$req->input("salary"),
            "phone"=>$req->input("phone"),
            "gender"=>$req->input("gender"),
            "address"=>$req->input("address")
        ]);
        sendAddingEmpsms::dispatch($employee);
        $notification=new UserNotification(route("show_employee",$employee->id),"تمت اضافه الموظف من قبل ".Auth::user()->name,"EMPLOYEE_ADDED");
        NotifyUsers::dispatch($notification);
        return redirect("/register/employee");
    }
    public function update(Request $req){
        Employee::find($req->input("id"))->update([
            "name_"=>$req->input("name"),
            "address"=>$req->input("address"),
            "salary"=>$req->input("salary"),
            "phone"=>$req->input("phone"),
            "email"=>$req->input("email"),
            "gender"=>$req->input("gender")
        ]);
        $notification=new UserNotification(route("show_employee",Employee::find($req->input("id"))->id),"تمت التعديل الموظف من قبل ".Auth::user()->name,"ُEMPLOYEE_UPDATED");
        NotifyUsers::dispatch($notification);
        return redirect("/register/employee");

    }
    public function delete(Request $req,$id){
        $employee=Employee::find($id);
        $notification=new UserNotification(route("employee_management"), "تمت عمليه حذف الموظف".$employee->name."من قبل الموظف ".Auth::user()->name,"EMPLOYEE_DELETED");
        Employee::destroy($id);

        NotifyUsers::dispatch($notification);
        return redirect("/register/employee");
    }
    public function show(Request $req,$id){
        return view("hr_mgr.employee_page",[
            "employee"=>Employee::find($id)        
        ]);
    }
    public function import(Request $req){
        return (new EmployeeExports)->export();
    }
}
