<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\roleHasPermission;
class Permissions extends Model
{
    //
    protected $table="permissions";
    protected $primary="id";
    public function RoleHasPermission(){
        return $this->hasMany(roleHasPermission::class);
        
    }
}
