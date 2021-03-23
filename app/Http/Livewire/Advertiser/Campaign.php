<?php

namespace App\Http\Livewire\Advertiser;

use Livewire\Component;

class Campaign extends Component
{
    public $campaigns;

    public function mount()
    {
        $this->campaigns = auth()->user()->campaigns;
    }

    public function render()
    {
        return view('livewire.advertiser.campaign')->layout('layouts.advertiser');
    }
}
