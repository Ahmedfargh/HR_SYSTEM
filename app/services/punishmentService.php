<?php

namespace App\Services;

use App\Models\Employee;
use App\Models\punishment;
use PhpOption\None;

class PunishmentService
{
    // Method to get all users
    public function add_punishment(string $type,$emp_id,$total=0,$punishment_perc){
        $emp=Employee::find($emp_id);
        if($emp){
            $total=$this->calculate($type,$emp,$total,$punishment_perc);
            $punishment=punishment::create([
                "total_"=>$total,
                "emp_id"=>$emp_id,

            ]);
            return $punishment;
        }else{
            return null;
        }
    }
    private function calculate(string $type,Employee $emp,$total_=0,$punishment_perc){
        if($type=="day_punish"){
            return ($emp->salary/30)*$punishment_perc;
        }else if($type=="broken_or_fee"){
            return total;
        }
    }
}
