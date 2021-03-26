<?php

namespace App\Http\Livewire\Promoter;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.promoter.dashboard')->layout('layouts.promoter');
    }
}
