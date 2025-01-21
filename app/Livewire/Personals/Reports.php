<?php

namespace App\Livewire\Personals;

use Livewire\Component;

class Reports extends Component
{
    public $employee;
    public $reports;
    protected $listeners=["add_reports"=>"refresh"];
    public function refresh(){
        $this->reports=$this->employee->PerformanceReport;
    }
    public function render()
    {
        $this->reports=$this->employee->PerformanceReport;
        return view('livewire.personals.reports',[
            "employee"=>$this->employee,
            "reports"=>$this->reports,
        ]);
    }
}
