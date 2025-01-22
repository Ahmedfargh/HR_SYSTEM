<?php
session_start();

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\punishmentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\positionControllers;
use App\Http\Controllers\candidateController;
use App\Http\Controllers\PermissionRolesController;
use Illuminate\Support\Facades\Mail;
use App\Mail\employeeAdded;
use Twilio\Rest\Client;
Route::get('/', function () {
    return view('hr_mgr/login');
});
Route::post("/auth",[HRController::class,"Login"])->name("Log_url");
Route::get("/register/employee",function(){
    return view("hr_mgr.employee");
})->name("employee_management");

Route::group(["prefix"=>"/Employee"],function(){
    Route::post("/Register",[employeeController::class,"register"])->name("register_employee");
    Route::post("/Update",[employeeController::class,"update"])->name("update_employe");
    Route::get("/Delete/{id}",[employeeController::class,"delete"])->name("delete_employee");
    Route::post("/sign/punishment",[punishmentController::class,"Register_punishment_perc"])->name("sign_punish_days");
    Route::post("/sign/punishment/fee",[punishmentController::class,"Register_punishment_perc"])->name("sign_punish_fee");
    Route::get("/page/{id}",[employeeController::class,"show"])->name("show_employee");
});
Route::group(["prefix"=>"/department"],function(){
    Route::get("/index",[DepartmentController::class,"index"])->name("department_index");
    Route::post("/index/add",[DepartmentController::class,"create"])->name("add_department");
    Route::get("/index/delete/{id}",[DepartmentController::class,"destroy"])->name("delete_department_action");
    Route::get("/index/update/{id}",[DepartmentController::class,"edit"])->name("update_department_action");
});
Route::group(["prefix"=>"/candidate"],function(){
    Route::get("/index",[candidateController::class,"index"])->name("candidate_index");
    Route::post("/index/add",[candidateController::class,"create"])->name("add_candidate");
    Route::get("/index/delete/{id}",[candidateController::class,"delete"])->name("delete_candidate");
});
Route::group(["prefix"=>"/position"],function(){
    Route::get("/index",[positionControllers::class,"index"])->name("position_index");
   
});
Route::group(["prefix"=>"permissions_roles"],function(){
    Route::get("/index",[PermissionRolesController::class,"index"])->name("permissions_roles_index");
    
});
Route::group(["prefix"=>"User"],function(){
    Route::get("/account",[HRController::class,"getUserPage"])->name("getUserPage");
});
