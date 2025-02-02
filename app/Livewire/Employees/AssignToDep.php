<?php

namespace App\Livewire\Employees;

use Livewire\Component;
use App\Models\Department;
use App\Models\worksIn;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Session;

class AssignToDep extends Component
{
    public $employee;
    public $dep;

    public function render()
    {
        return view('livewire.employees.assign-to-dep',[
            "Departments"=>Department::All(),
        ]);
    }
    public function  move_to_dep()
    {
        try{
            $works_in=worksIn::where("employees_id","=",$this->employee->id)->get();
            //dd($works_in);
            //dd($works_in->count());
            if($works_in->count()){
                $works_in=$works_in->first();
                $works_in->departments_id=$this->dep;
                $works_in->save();
            }else{
                worksIn::create([
                    "departments_id"=>$this->dep,
                    "employees_id"=>$this->employee->id
                ]);

            }
            Session::flash("messsage","تمت عمليه التحديث بنجاح");

        }catch(Exception $ex){
            Log::info($ex->getMessage());
        }
    }
}
