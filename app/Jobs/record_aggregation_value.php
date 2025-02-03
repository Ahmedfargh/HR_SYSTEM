<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\AggregationsValues;
class record_aggregation_value implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public $model,public $value,public $type,public $user_id)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        $agg=new AggregationsValues;
        $agg->model=$this->model;
        $agg->value=$this->value;
        $agg->user_id=$this->user_id;
        $agg->aggregation_function=$this->type;
        $agg->save();
    }
}
