<?php

namespace App\Http\Livewire\Main;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email = '';
    public $password = '';

    protected $rules = [
        'email' => ['required'],
        'password' => ['required']
    ];

    public function submit()
    {
        $this->validate();

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            return redirect()->route('home');
        } else {
            $this->addError('error', 'Email or password incorrect');
        }
    }

    public function render()
    {
        return view('livewire.main.login')->layout('layouts.main');
    }
}
