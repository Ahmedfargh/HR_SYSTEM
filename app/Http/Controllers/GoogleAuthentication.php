<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
class GoogleAuthentication extends Controller
{
    //
    public function redirect(){
        return Socialite::driver("google")->redirect();
    }
    public function CallBack(){
        try{
            $google_user=Socialite::driver("google")->user();
            $user=User::where("google_id",$google_user->id)->first();
            if(!$user){
                $new_user=User::create([
                    "name"=>$google_user->getName(),
                    "google_id"=>$google_user->getId(),
                    "email"=>$google_user->getEmail()
                ]);
                Auth::Login($new_user);
                return redirect()->intended("/auth");
            }else{
                Auth::Login($user);
                return redirect()->intended("/auth");
            }
        }catch(Exception $ex){
            throw $ex;
        }
    }
}
