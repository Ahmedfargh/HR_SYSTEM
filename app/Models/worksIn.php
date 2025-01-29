<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Department;
class worksIn extends Model
{
    //
    protected $table = 'role_has_permissions';
    protected $fillable = ['permission_id','role_id'];
    public function Employees(){
        return $this->belongsToMany(Employee::class);
    }
    public function Department(){
        return $this->belongsTo(Department::class);
    }
    
}
