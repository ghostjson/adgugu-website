<?php

namespace App\Http\Livewire\Advertiser;

use Livewire\Component;

class CampaignAssignPromoters extends Component
{
    public function render()
    {
        return view('livewire.advertiser.campaign-assign-promoters')->layout('layouts.advertiser');
    }
}
