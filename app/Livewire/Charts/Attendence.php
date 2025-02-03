<?php

namespace App\Livewire\Charts;

use Livewire\Component;
use App\Models\attendance;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use App\Jobs\record_aggregation_value;
use Illuminate\Support\Facades\Auth;

class Attendence extends Component
{
    public $attendence_count=null;
    public $employee_count=null;
    public $record_id=0;
    public $is_read=0;
    public function render()
    {
        if($this->record_id){

        }else {
            
            $this->attendence_count=DB::table('attendance')
            ->join('employees', 'attendance.employee_id', '=', 'employees.id')
            ->whereDay('attendance.check_in', '=', now()->day)
            ->select('employees.*', 'attendance.*')->count();
            $this->employee_count=Employee::count();
            record_aggregation_value::dispatch("App\Models\attendance",$this->attendence_count,"count",Auth::user()->id);
            record_aggregation_value::dispatch("App\Models\Employee",$this->employee_count,"count",Auth::user()->id);
            $this->is_read=1;
        }
        
        return view('livewire.charts.attendence',[
            "attendence"=>$this->attendence_count,
            "employee"=>$this->employee_count,
        ]);
    }
}
