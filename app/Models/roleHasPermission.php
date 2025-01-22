<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Permissions;
use App\Models\role;
class roleHasPermission extends Model
{
    //
    protected $table = 'role_has_permissions';
    protected $fillable = ['permission_id','role_id'];
    public function permission(){
        return $this->belongsTo(Permissions::class); 
    }
    public function role(){
        return $this->belongsTo(role::class);
    }
}
