<?php

namespace App\Http\Livewire\Advertiser;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.advertiser.dashboard')->layout('layouts.advertiser');
    }
}
