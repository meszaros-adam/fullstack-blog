<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloguser;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function redirect($provider)
  {
      return Socialite::driver($provider)->redirect(); 
  }
  public function callback($provider){
    $userSocial =   Socialite::driver($provider)->stateless()->user();
    $find_user       =   Bloguser::where(['email' => $userSocial->getEmail()])->first();
    if($find_user){
        Auth::guard('bloguser')->login($find_user);
        return redirect('/');
    }else{
        $user = Bloguser::create([
            'fullName'      => $userSocial->getName(),
            'email'         => $userSocial->getEmail(),
            'provider_id'   => $userSocial->getId(),
            'provider'      => $provider,
            'password'      => bcrypt('123456*'),
        ]);
        Auth::guard('bloguser')->login($user);
     return redirect('/');
    }
}
}
