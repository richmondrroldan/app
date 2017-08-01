<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\SocialAccountService;

use Socialite;

class SocialAuthController extends Controller
{
    public function googleRedirect(){
		return Socialite::driver('google')->with(['hd' => 'benilde.edu.ph'])->redirect();
    }
    public function googleCallback(SocialAccountService $service){
    	$user = $service->googleCU(Socialite::driver('google')->user());

    	auth()->login($user);

    	return redirect()->to('/home');
    }    
}
