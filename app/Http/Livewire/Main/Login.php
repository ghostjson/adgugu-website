<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.main.login')->layout('layouts.main');
    }
}
