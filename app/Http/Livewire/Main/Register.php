<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.main.register')->layout('layouts.main');
    }
}
