<?php

namespace App\Http\Controllers\Auth;

use App\Events\LoginSuccess;
use App\Http\Controllers\Controller;
use App\Mail\UserTest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Mail;

class SocialiteController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect($provider);
    }

    public function callback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();

            //If Provider Id Exists, then Login
            $getUser = User::where($provider . '_id', $user->id)->first();

            if ($getUser) {
                Auth::login($getUser);
                LoginSuccess::dispatch($getUser, $provider);

                //return redirect()->intended('home');
                return back();
            } else {
                //If Provider id NOT Exists, Email (Not) Exists, then (Create) Update User then Login
                $findemail = User::where('email', $user->email)->first();
                $newUser =
                    $findemail ?
                    User::where('email', $user->email)->update([$provider . '_id' => $user->id]) :
                    User::create(
                        [
                            'name' => $user->name,
                            'email' => $user->email,
                            $provider . '_id' => $user->id,
                            /*$user->getAvatar(),*/
                            'password' => encrypt('123456dummy'),
                            'email_verified_at' => now()
                        ]
                    );

                //$newUser->markEmailAsVerified();
                Auth::login($newUser);
                LoginSuccess::dispatch($newUser, $provider);
                //Send Account Creation Email
                if (!$findemail) {
                    $email = $user->email;
                    $details = [
                        'title' => 'Thank you for creating an account',
                        'body' => 'You have successfully registered to Synvast Engineeering. Thank you and enjoy shopping'
                    ];
                    Mail::to($email)->send(new UserTest($details));
                }

                return redirect('/electrical');

                //return back();
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
