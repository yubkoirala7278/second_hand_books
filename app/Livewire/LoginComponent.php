<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class LoginComponent extends Component
{
    public $isLoading = false;

    public function openGoogleLoginPopup()
    {
        $this->isLoading = true;
        $this->dispatch('openGoogleLoginPopup');
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.login-component', [
            'user' => Auth::user(),
        ]);
    }
}
