<?php
use App\Models\User;
use App\Models\Permissions;
use App\Models\roleHasPermission;
use App\Models\role;
if(!function_exists("is_allowed")){
    function is_allowed($permission){
        $role_id=auth()->user()->role_id;
        $permission=Permissions::where("name","=",$permission)->first();
        #dd($permission->RoleHasPermission);
        #return $permission->RoleHasPermission->first()->role_id==$role_id;
        return true;
    }
}
?>