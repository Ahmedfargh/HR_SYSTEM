<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\AggregationsValues;
use App\Observers\EmployeeObserver;
class EmployeeController extends Controller
{
    //
    public function count(){
        return [
            "message"=>"done",
            "Value"=>Employee::count(),
            "LastRead"=>AggregationsValues::where("model","=","App\Models\Employee")->where("aggregation_function","=","count")->latest()->first()->value,
        ];
    }
    public function sumSalary(){
        return [
            "message"=>"done",
            "Value"=>Employee::all()->sum("salary"),
            "lastRead"=>-1
        ];
    }
   public function getEmployeeWithSalary(Request $req,$total_net){
        
        return [
            "message"=>"done",
            "Value"=>EmployeeObserver::CalculateEmployeesSalary($total_net),
            "lastRead"=>-1
        ];
   }
   public function AverageSalary(){
        return [
            "message"=>"done",
            "EmployeeAverageSalary"=>EmployeeObserver::avergaeSalary(),
            "lastRead"=>-1
        ];
   }
   public function EmployeeWithDepartments(){
        return [
            "message"=>"done",
            "EmployeeWithDepartment"=>EmployeeObserver::EmployeeWithItsDepartments(),
            "lastRead"=>-1
        ];
   }
}
