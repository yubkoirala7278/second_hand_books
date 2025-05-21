<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GoogleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('google_id', $googleUser->id)->first();

            if ($user) {
                Auth::login($user);
            } else {
                $existingUser = User::where('email', $googleUser->email)->first();
                if ($existingUser) {
                    $existingUser->update(['google_id' => $googleUser->id]);
                    Auth::login($existingUser);
                } else {
                    $user = User::create([
                        'name' => $googleUser->name,
                        'email' => $googleUser->email,
                        'google_id' => $googleUser->id,
                        'password' => Hash::make('12345'),
                    ]);
                    $user->assignRole('user');
                    Auth::login($user);
                }
            }

            return response()->make(<<<'HTML'
            <script>
                window.opener.location.reload();
                window.close();
            </script>
            HTML);
        } catch (\Exception $e) {
            if (!request()->has('state')) {
                return redirect('/login')->with('error', 'Google login failed. Please try again.');
            }
            return response()->make(<<<'HTML'
            <script>
                alert('Google login failed. Please try again.');
                window.close();
            </script>
            HTML);
        }
    }
}
