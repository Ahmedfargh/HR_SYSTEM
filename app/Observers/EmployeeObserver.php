<?php

namespace App\Observers;
use App\Models\Employee;
use App\Models\Department;
class EmployeeObserver
{
    //
    public static function countEmployee(){
        return Employee::count();
    }
    public static function sumSalary(){
        return Employee::sum("salary");
    }
    public static function avergaeSalary(){
        return Employee::average("salary");
    }
    public static function EmployeeWithItsDepartments(){
        $employees=Employee::with("WorksIn.Department")->get();
        return $employees;
    }
    public static function CalculateEmployeesSalary($total_net){
        $employees=Employee::with("punishment")->get();
        foreach($employees as $employee){
            $total_salary_punishment=$employee->punishment->sum("total_");
            $totalSalary = $employee->salary;
            $netSalary = $totalSalary - $total_salary_punishment;
            $employee->netSalary = $netSalary;
        }
        return $total_net?$employees->sum("netSalary"):$employees->sum("salary");
    }
}
