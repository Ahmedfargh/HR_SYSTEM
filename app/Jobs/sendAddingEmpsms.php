<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\Employee;

use Illuminate\Support\Facades\Mail;
use App\Mail\employeeAdded;
use Illuminate\Support\Facades\Log;
use Vonage\Client\Credentials\Basic;
use Vonage\Client;
use Vonage\SMS\Message\SMS;
class sendAddingEmpsms implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(private $employee)
    {
        //

    }

    private function formate_text(){
        $text="السيد/السيده ".$this->employee->name." مبروك لقد تم تعيينك فى الشركه تكلم مع اخصائى الموارد البشريه ";
        return $text;
    }
    /**
     * Execute the job.
     */

    public function handle(): void
    {
        //
        $basic  = new \Vonage\Client\Credentials\Basic(env("vonage_user"), env("vonage_token"));
        $client = new \Vonage\Client($basic);
        $response = $client->sms()->send(
            //new SMS( "+201128715837",$this->employee->phone, "call your friend ahmed farghly he is checking you")
           new SMS($this->employee->phone, "HR in your company", $this->formate_text())
        );
        
        $message = $response->current();
        
        if ($message->getStatus() == 0) {
            Log::info("The message was sent successfully\n");
        } else {
            Log::info( "The message failed with status: " . $message->getStatus() . "\n");
        }
    }
}
