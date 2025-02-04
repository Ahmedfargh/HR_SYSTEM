<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Mail\ResetPasswordOtp;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Vonage\SMS\Message\SMS;

class sendResetPasswordOtpJob implements ShouldQueue
{
    use Queueable;
    /**
     * Create a new job instance.
     */
    public function __construct(public User $user)
    {
        //
    }
    private function generateRandomSixDigitInteger() {
        return rand(100000, 999999);
    }
    private function formate_text($otp){
        return "this is your OTP is active for 5 mintues only ".$otp;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        $otp=$this->generateRandomSixDigitInteger();
        Log::info($otp);
        Cache::put($this->user->email."_reset_password_otp",$otp,50);
        Log::info(Cache::get($this->user->email."_reset_password_otp"));
        Cache::put($otp,$this->user->email,50);
        $message=$this->formate_text($this->user->email."_reset_password_otp");
        $basic  = new \Vonage\Client\Credentials\Basic(env("vonage_user"), env("vonage_token"));
        $client = new \Vonage\Client($basic);
        $response = $client->sms()->send(
           new SMS($this->user->phone, "Reset Password In HR Dashboard", $message)
        );
        
        $message = $response->current();
        
        if ($message->getStatus() == 0) {
            Log::info("The message was sent successfully\n");
        } else {
            Log::info( "The message failed with status: " . $message->getStatus() . "\n");
        }
    }
}
