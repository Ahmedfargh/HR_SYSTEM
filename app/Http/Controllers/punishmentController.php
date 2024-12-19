<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PunishmentService;
class punishmentController extends Controller
{
    //

    public function Register_punishment_perc(Request $request){
        $ser=new PunishmentService;
        $punishment=$ser->add_punishment("day_punish", $request->input("emp_id"), 0, $request->input("perc"));
        return redirect("/register/employee");
    }
    public function Register_punishment_charge(Request $request){
        $ser=new PunishmentService;
        $ser->add_punishment("broken_or_fee", $request->input("emp_id"),$request->input("total"), 0);
        return redirect("/register/employee");
    }
}
