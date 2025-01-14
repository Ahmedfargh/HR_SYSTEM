<?php

namespace App\Livewire\Permissions;

use Livewire\Component;
use App\Models\role;
class Diplaypermissions extends Component
{
    public $data=null;
    public $label="اظهار";
    public function deleteRole($id){
        role::delete($id);
        $this->dispatch("refreshTable");
    }
    public function render()
    {
        dd($this->data);
        return view('livewire.permissions.display-permissions',[
            "data"=>$this->data,
            "label"=>$this->label,
        ]);
    }
}
