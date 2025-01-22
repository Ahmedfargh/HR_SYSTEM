<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Positions;
use App\Models\Department;
class AddPosition extends Component
{
    public $description;
    public $department;
    public $salary;
    public $title;
    public $position_id;
    public function create(){
        $this->validate([
            "description"=>"required",
            "department"=>"required",
            "salary"=>"required",
            "title"=>"required"
        ]);
        Positions::create([
            "title"=>$this->description,
            "department_id"=>$this->department,
            "salary"=>$this->salary,
            "description"=>$this->description
        ]);
        session()->flash('message', 'تمت عمليه الاضافه بنجاح');
        $this->description="";
        $this->department="";
        $this->salary="";
        $this->title="";
        $this->dispatch("refreshTable");
    }
    public function render()
    {
        $departments=Department::all();
        return view('livewire.position.add-position',[
            "departments"=>$departments
        ]);
    }
}
