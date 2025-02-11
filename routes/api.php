<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\EmployeeController;
use App\Http\Middleware\authenticateJWT;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::group(["prefix" => "v1"], function () {
    Route::get("/count/employee", [EmployeeController::class, "count"])->middleware(authenticateJWT::class);
    Route::get("/sum/salary/employee",[EmployeeController::class,"sumSalary"])->middleware(authenticateJWT::class);
    Route::get("/average/salary/employee",[EmployeeController::class,"getEmployeeWithSalary"])->middleware(authenticateJWT::class);
    Route::get("/Employee/departments",[EmployeeController::class,"getEmployeeWithSalary"])->middleware(authenticateJWT::class);
    Route::get("/Employee/calculate/{total_net}",[EmployeeController::class,"getEmployeeWithSalary"])->middleware(authenticateJWT::class);
})->middleware(authenticateJWT::class);
