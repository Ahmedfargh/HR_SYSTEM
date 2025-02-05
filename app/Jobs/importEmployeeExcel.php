<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Spatie\SimpleExcel\SimpleExcelReader;
use App\Models\Employee;
use Illuminate\Support\Facades\Log;

class importEmployeeExcel implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public $filePath,public $start=0,public $end=1000)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        Log::info("test test");
        $rows = SimpleExcelReader::create($this->filePath)->getRows();
        $rows->each(function(array $rowProperty){
            Employee::create([
               "name_"=> $rowProperty["name"],
               "email"=> $rowProperty["email"],
               "gender"=> $rowProperty["gender"],
               "phone"=> $rowProperty["phone"],
               "salary"=> $rowProperty["salary"],
               "address"=> $rowProperty["address"],
            ]);
        });
    }
}
