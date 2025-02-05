<?php

namespace App\Livewire\Employees;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Jobs\importEmployeeExcel;
class ImportExcel extends Component
{
    use WithFileUploads;
    public $file;
    protected $rules = [
        'file' => 'required|mimes:xlsx,csv',
    ];
    public function Import(){
        $this->validate();
        $filePath = storage_path('app/public/' .$this->file->store('EmployeeImports', 'public'));
        importEmployeeExcel::dispatch($filePath);
        session()->flash('message', 'بدأت عمليه الاستيراد تفحص الاشعارات');
    }
    public function render()
    {
        return view('livewire.employees.import-excel');
    }
}
