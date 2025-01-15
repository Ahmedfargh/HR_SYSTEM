<?php
namespace App\Services;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Exception;
class RolesService{
    public function __construct()
    {
        
    }
    public function assingRoleToUser($users,$roleId){
        try{
            if(is_array($users)){
                User::whereIn("id",$users)->update([
                    "role_id"=>$roleId,
                ]);
            }else if(isset($users)){
                $user=User::find($users);
                $user->role_id=$users;
                $user->save();
            }
        }catch(Exception $ex){
            Log::info($ex->getMessage());
        }
        return false;
    }
}
?>