<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class punishment extends Model
{
    //
    protected $table="punish";
    protected $primary="id";
    protected $fillable = [
        "total_",
        "emp_id",
        "at_"
    ];

}
