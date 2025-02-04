<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Jobs\sendResetPasswordOtpJob;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class OtpResetPaswword extends Component
{
    public $email="";
    public $is_sent=false;
    public $otp;
    public function SendOtp(){
        $user=User::where("email","=",$this->email);
        if($user->exists()){
            sendResetPasswordOtpJob::dispatch($user->first());
            $this->is_sent=true;
        }else{
            Session::flash("message","هذا البريد الالكترونى غير مسجل لدينا");
        }
    }
    public function redirectToResetPassword(){
        if(Cache::has($this->email."_reset_password_otp")&&(Cache::get($this->email."_reset_password_otp")==(int)$this->otp)){
            return redirect("/assign_passwored/".$this->email);            
        }
    }
    public function render()
    {
        return view('livewire.otp-reset-paswword',[
            "email"=>$this->email,
            "is_sent"=>$this->is_sent
        ]);
    }
}
