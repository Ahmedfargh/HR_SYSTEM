<?php

namespace App\Livewire\Personals;

use Livewire\Component;

class Page extends Component
{
    public $user;
    public $name;
    public $email;
    public function render()
    {
        return view('livewire.personals.page');
    }
}
