<?php

namespace App\Livewire\Parts;

use Livewire\Component;

class Sidebar extends Component
{
    public $listeners=["upload_image"=>"render"];

    public function render()
    {
        return view('livewire.parts.sidebar');
    }
}
