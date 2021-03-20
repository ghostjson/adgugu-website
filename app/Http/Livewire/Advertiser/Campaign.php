<?php

namespace App\Http\Livewire\Advertiser;

use Livewire\Component;

class Campaign extends Component
{
    public function render()
    {
        return view('livewire.advertiser.campaign')->layout('layouts.advertiser');
    }
}
