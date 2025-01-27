<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginModal extends Component
{
    public $open = false;
    public $email;
    public $password;
    public $credentials = []; 

    public function login(){
        $this->credentials = ['email'=>$this->email,
        'password'=> $this->password];

        if (Auth::attempt($this->credentials)) {
            return redirect()->intended('/dashboard');
        }

        throw ValidationException::withMessages([
            'email' => ['These credentials do not match our records.'],
        ]);

    }
    
    public function render()
    {
        return view('livewire.login-modal');
    }

    
}
