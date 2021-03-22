<?php

namespace App\Http\Livewire\Advertiser;

use Livewire\Component;

class NewCampaign extends Component
{
    public function render()
    {
        return view('livewire.advertiser.new-campaign')->layout('layouts.advertiser');
    }
}
