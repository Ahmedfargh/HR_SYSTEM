<?php

namespace App\Livewire\Personals;

use Livewire\Component;
use App\Models\performance;
class WriteReports extends Component
{
    public $employee;
    public $comment;
    public $percentage;
    public function save_report(){
        $performance=new performance;
        $performance->employee_id=$this->employee->id;
        $performance->percentage=$this->percentage;
        $performance->notes=$this->comment;
        $performance->save();
        session()->flash("recording_reports","inserting new records");
        $this->dispatch("add_reports");
    }
    public function render()
    {
        return view('livewire.personals.write-reports');
    }
}
