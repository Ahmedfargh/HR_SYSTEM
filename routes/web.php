<?php
session_start();
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRController;
Route::get('/', function () {
    return view('hr_mgr/login');
});
Route::post("/auth",[HRController::class,"Login"])->name("Log_url");
Route::get("/register/employee",function(){
    return view("hr_mgr.employee");
})->name("employee_management");