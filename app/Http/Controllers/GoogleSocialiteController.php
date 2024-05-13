<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;




use Illuminate\Http\Request;

class GoogleSocialiteController extends Controller
{
    

    //login with google
    public function redirectToGoogle()
    {
        // redirect user to "login with Google account" page
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback()
    {
        try {
            // get user data from Google
            $user = Socialite::driver('google')->user();

            // find user in the database where the social id is the same with the id provided by Google
            $finduser = User::where('email', $user->email)->first();

            if ($finduser)  // if user found then do this
            {
                // Log the user in
                Auth::login($finduser);

                // redirect user to dashboard page
                return redirect('/dashboard');
            }
            else
            {
                // if user not found then this is the first time he/she try to login with Google account
                // create user data with their Google account data
                $newUser = User::create([
          
                    'name' => $user->name, // Combine full name
                    'email' => $user->email,
                    'username'=> bcrypt('my-google-username'),
                    'social_type' => 'google',  
                    'password' => bcrypt('my-google'), 
                ]);
                
                Auth::login($newUser);

                return redirect('/dashboard');
            }

        }
        catch (Exception $e)
        {
            dd($e->getMessage());
        }
    }
}
