<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use League\Flysystem\Exception;
use Socialite;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $socialUser = Socialite::driver('facebook')->user();
        }
        catch(Exception $e){
            return redirect('/');
        }

        $user=User::where('Acc_id',$socialUser->getId())->first();
        if(!$user){
            $user=new User();
            $user->Name=$socialUser->getName();
            $user->Email=$socialUser->getEmail();
            $user->Acc_type="Facebook";
            $user->Acc_id=$socialUser->getId();
            $user->Avatar=$socialUser->getAvatar();
            $user->save();
        }

        Auth::login($user);
        return redirect('/');

    }
}
