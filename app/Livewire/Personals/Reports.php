<?php

namespace App\Livewire\Personals;

use Livewire\Component;

class Reports extends Component
{
    public $employee;
    public function render()
    {
        return view('livewire.personals.reports',[
            "employee"=>$this->employee,
        ]);
    }
}
