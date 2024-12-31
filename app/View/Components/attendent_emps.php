<?php

namespace App\View\Components;

use App\Models\attendance;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
class attendent_emps extends Component
{
    /**
     * Create a new component instance.
     */
    public  $attendance;
    public function __construct($attendance)
    {
        //
        $this->attendance=DB::select("select  employees.* ,attendance.* from attendance join employees where DAY(attendance.check_in)=DAY(now()) and attendance.employee=employees.id ");
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        
        return view('components.attendent_emps',["attendance"=>$this->attendance]);
    }
}
