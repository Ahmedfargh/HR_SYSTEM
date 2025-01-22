<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;
use App\Models\roleHasPermission;
class role extends SpatieRole
{
    //

    protected $table="roles";
    protected $primary="id";
    protected $fillable = ["name","guard_name"];
    public function RoleHasPermission(){
        return $this->hasMany(roleHasPermission::class);
    }
}
