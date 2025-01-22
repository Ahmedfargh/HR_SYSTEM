<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
class performance extends Model
{
    //
    protected $table="emp_performance";
    protected $primary="id";
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
