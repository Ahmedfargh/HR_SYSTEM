<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionRolesController extends Controller
{
    //
    public function index(){
        return view("hr_mgr.permissions.permission");
    }
}
