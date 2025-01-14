<?php

namespace App\Livewire\Permissions;

use Livewire\Component;

class DisplayPermissions extends Component
{
    public $data = null;
    public $label = "اظهار";
    public function render()
    {
        return view('livewire.permissions.display-permissions', [
            "data" => $this->data,
            "label" => $this->label,
        ]);
    }
}
