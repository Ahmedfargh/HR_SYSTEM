<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Department;
class worksIn extends Model
{
    //
    protected $table = 'works_in';
    protected $fillable = ['employees_id','departments_id'];
    public function Employees(){
        return $this->belongsToMany(Employee::class);
    }
    public function Department(){
        return $this->belongsTo(Department::class,"departments_id","id");
    }
    
}
