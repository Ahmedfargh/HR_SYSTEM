<?php

namespace App\Livewire\Departments;

use Livewire\Component;
use App\Models\Department;
class Data extends Component
{
    public $department_id;
    public $department;
    public function render()
    {
        $this->department=Department::find($this->department_id);
        return view('livewire.departments.data',[
            "Department"=>$this->department,
        ]);
    }
}
