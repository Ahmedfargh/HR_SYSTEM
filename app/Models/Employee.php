<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table="employees";
    protected $primary="id";
    protected $fillable = [
        'name_',
        'email',
        'gender',
        "phone",
        "salary",
        "address"
    ];
    public function punishment(){
        return $this->hasMany("App\Models\Punishment");
    }
    public function department(){
        return $this->hasOne("App\Models\Department");
    }
    public function attendance(){
        return $this->hasMany("App\Models\Attendance");
    }
}
