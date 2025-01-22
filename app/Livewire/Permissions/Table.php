<?php

namespace App\Livewire\Permissions;

use Livewire\Component;
use App\Models\role;
class Table extends Component
{
    public $roles=null;
    public $listeners=["refreshTable"=>'$refresh'];
    public function delete($id){
        role::destroy($id);
        $this->dispatch("refreshTable");
    }
    public function render()
    {
        $this->roles=role::All();
        return view('livewire.permissions.table',[
            "roles"=>$this->roles,
        ]);
    }
}
