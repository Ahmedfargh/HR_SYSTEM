<?php
session_start();
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\punishmentController;
Route::get('/', function () {
    return view('hr_mgr/login');
});
Route::post("/auth",[HRController::class,"Login"])->name("Log_url");
Route::get("/register/employee",function(){
    return view("hr_mgr.employee");
})->name("employee_management");
Route::post("/Emplyoee/Register",[employeeController::class,"register"])->name("register_employee");
Route::post("/Employee/Update",[employeeController::class,"update"])->name(name: "update_employe");
Route::get("/Employee/Delete/{id}",[employeeController::class,"delete"])->name("delete_employee");
Route::post("/Employee/sign/punishment",[punishmentController::class,"Register_punishment_perc"])->name("sign_punish_days");
Route::post("/Employee/sign/punishment/fee",[punishmentController::class,"Register_punishment_perc"])->name("sign_punish_fee");

