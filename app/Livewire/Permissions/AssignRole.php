<?php

namespace App\Livewire\Permissions;

use Livewire\Component;
use App\Models\User;
use App\Models\role;
use App\Services\RolesService;
use Exception;
class AssignRole extends Component
{
    public $namekey;
    public $searchNamesResults;
    public $selectedUsers;
    public $selectedRole;
    public $roles;
    public function searchUser(){
        $this->searchNamesResults=User::where("name","like","%$this->namekey%")->get();
    }
    public function addRoleToUsers(){
        try{
            $service=new RolesService();
            $service->assingRoleToUser($this->selectedUsers,$this->selectedRole);
            session()->flash("assign_role_success","تمت عمليه اضافه الصلاحيات بنجاح");
        }catch(Exception $ex){
            session()->flash("error_message","خطأ برمجى");
        }
    }
    public function render()
    {
        $this->roles=role::all();
        return view('livewire.permissions.assign-role',[
            "searchNamesResults"=>$this->searchNamesResults,
        ]);
    }
}
