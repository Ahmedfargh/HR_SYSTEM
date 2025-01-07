<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Positions;
class PositionTable extends Component
{
    public $positions;
    protected $listeners = ['refresh_position_tabel' => 'refresh_table'];
    public function handleMessage($message){
        session()->flash('message', $message);
    }
    public function delete($id){
        Positions::find($id)->delete();
        session()->flash('message', 'تمم عمليه الحذف بنجاح');
        $this->positions=Positions::all();
    }
    public function refresh_table(){
        $this->positions=Positions::all();
    }
    public function render()
    {
        $this->positions=Positions::all();
        return view('livewire.position.position-table',[
            "positions"=>$this->positions
        ]);
    }
}
