<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    //
    protected $table="positions";
    protected $primary="id";
    protected $fillable = [
        'title',
        'description',
        'salary',
        'department_id',
    ];
    public function department(){
        return $this->belongsTo("App\Models\Department");
    }
    public function candidate_recruitment(){
        return $this->hasMany("App\Models\candidate_recruitment");
    }
}
