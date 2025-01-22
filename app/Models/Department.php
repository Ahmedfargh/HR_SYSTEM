<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
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
        return $this->belongsTo(Employee::class);
    }
}
