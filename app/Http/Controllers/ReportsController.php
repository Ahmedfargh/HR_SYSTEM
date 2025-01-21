<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\performance;
class ReportsController extends Controller
{
    //
    public function index(Request $req,$id){
        $report=performance::find($id);
        return view("hr_mgr.Reports.report",[
            "report"=>$report,
            "employee"=>$report->employee,
        ]);
    }
}
