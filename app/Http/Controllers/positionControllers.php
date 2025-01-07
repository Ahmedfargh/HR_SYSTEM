<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class positionControllers extends Controller
{
    //
    public function index(){
        return view("hr_mgr.positions");
    }
}
