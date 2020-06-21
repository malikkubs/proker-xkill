<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\User;

class GoogleController extends Controller
{
    //
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $ia = Socialite::driver($provider)->User();
        $ib = $this->ambilidata($ia, $provider);
        Auth::login($ib, true);
        return redirect('/home');
    }
    public function ambilidata($user, $provider)
    {
        $ib = User::where('provide_id', $user->id)->first();
        if ($ib) {
            return $ib;
        } else {
            $data = User::create(
                [
                    'name' => $user->name,
                    'email' => !empty($user->email) ? $user->email : '',
                    'password' => md5($user->token),
                    'provider' => $provider,
                    'provide_id' => $user->id
                ]
            );
            return $data;
        }
    }
}
