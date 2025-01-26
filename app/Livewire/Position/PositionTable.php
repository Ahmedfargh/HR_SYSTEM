<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Positions;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class PositionTable extends Component
{
    use WithPagination;
    public $positions;
    public $search_text="";
    
    public function handleMessage($message){
        session()->flash('message', $message);
    }
    public function delete($id){
        Positions::find($id)->delete();
        session()->flash('message', 'تمم عمليه الحذف بنجاح');
        $this->positions=Positions::all();
    }
    public function search(){
        $this->resetPage();
        session()->flash('message', 'تمم عمليه الحذف بنجاح');
        $this->positions=Positions::where('title','like','%'.$this->search_text.'%')->get();
    }
    public function refresh_table(){
        $this->positions=Positions::all();
    }
    public function render()
    {
        //$this->positions = Positions::with('department') ->where('title', 'like', '%' . $this->search_text . '%')->paginate(5);
        //dd(Positions::with('department'));
        return view('livewire.position.position-table',[
            "positions_"=> Positions::with('department')->paginate(5),
        ]);
    }
}
