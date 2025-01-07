<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Positions extends Model
{
    //
    use searchable;
    protected $table = "positions";
    protected $primary = "id";
    protected $fillable = [
        'title',
        'description',
        'salary',
        'department_id',
    ];
    public function department()
    {
        return $this->belongsTo("App\Models\Department");
    }
    public function candidate_recruitment()
    {
        return $this->hasMany("App\Models\candidate_recruitment");
    }
    public function toSearchableArray()
    {
        $array = $this->toArray();
        return $array;
    }
    public function searchableAs()
    {
        return 'index';
    }
}
