<?php

namespace App\Livewire\Charts;

use Livewire\Component;
use App\Models\AggregationsValues;
class EmployeesChart extends Component
{
    public function render()
    {
        return view('livewire.charts.employees-chart',[
            'EmployeeCountValues'=>json_encode(AggregationsValues::where("model","=","App\Models\Employee")?->pluck("value")->toArray()),
        ]);
    }
}
