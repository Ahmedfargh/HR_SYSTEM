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
}
