<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\AggregationsValues;
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
}
