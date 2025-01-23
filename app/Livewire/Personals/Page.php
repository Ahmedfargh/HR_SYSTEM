<?php

namespace App\Livewire\Personals;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
class Page extends Component
{
    use WithFileUploads;
    public $user;
    public $name;
    public $email;
    public $file;
    public $user_id;
    public function render()
    {
        return view('livewire.personals.page');
    }
    public function save(){
        $this->validate([
            "file"=>'required|file|max:10240',
            
        ]);
        $path = $this->file->storeAs("uploads", $this->file->getClientOriginalName(), "public");
        $user=User::find(auth()->user()->id);
        $user->personal_image="storage/".$path;
        $user->save();
        $this->dispatch("upload_image");
    }
}

?>