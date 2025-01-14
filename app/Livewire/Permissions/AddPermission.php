<?php

namespace App\Livewire\Permissions;

use Livewire\Component;
use App\Models\Permissions;
use App\Models\role;
use Spatie\Permission\Contracts\Permission;
use App\Models\roleHasPermission;
class AddPermission extends Component
{
    public $name;
    public $permissions;
    public $selected_permissions=null;
    public $selected_names=[];
    public $guard_name="web";
    public function save(){
        try{
            $this->validate([
                "name"=>"required",
                "selected_permissions"=>"required"
            ]);
            $role = role::create(["name"=>$this->name,"guard_name"=>$this->guard_name]);
            foreach($this->selected_permissions as $permission){
                $role->givePermissionTo(Permissions::find($permission)->get());
                roleHasPermission::create(["permission_id"=>$permission,"role_id"=>$role->id]);
            }
            

            $this->name = "";
            $this->selected_names = [];
            $this->selected_permissions = null;
            session()->flash("message","تمت عمليه اضافه ");
            $this->dispatch("refreshTable");
        }catch(\Exception $e){
            dd($e);
        }
    }
    public function render()
    {

        $this->permissions = permissions::All();
        return view('livewire.permissions.add-permission',[
            "permissions"=>$this->permissions
        ]);
    }
}
