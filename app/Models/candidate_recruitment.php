<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Positions;
class candidate_recruitment extends Model
{
    //
    protected $table="candidate_recruitment";
    protected $primary="id";
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'reruitment_date',
        'status',
        'experience',
        'notes',
        'position_id',
    ];
    public function Positions(){
        return $this->belongsTo(Positions::class,"position_id","id");
    }
}
