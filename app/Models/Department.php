<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\worksIn;
class Department extends Model
{
    //
    protected $table="departments";
    protected $primary="id";
    protected $fillable = [
        'name',
        "super_visisor"
    ];
    public function Manager(){
        return $this->belongsTo(Employee::class,"super_visisor","id");
    }
    public function WorksIn(){
        return $this->hasOne(worksIn::class);
    }
}
