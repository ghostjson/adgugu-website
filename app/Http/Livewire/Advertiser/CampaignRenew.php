<?php

namespace App\Http\Livewire\Advertiser;

use Livewire\Component;

class CampaignRenew extends Component
{

    public $campaigns;

    public function activate($id)
    {
        $c = \App\Models\Campaign::find($id);
        $c->status = 'Active';
        $c->save();

        $this->fetchCampaigns();
    }

    public function cancel($id)
    {
        $c = \App\Models\Campaign::find($id);
        $c->status = 'Stop';
        $c->save();

        $this->fetchCampaigns();
    }

    public function fetchCampaigns()
    {
        $this->campaigns = \App\Models\Campaign::where('user_id', '=', auth()->id())
            ->where('status', '=', 'Stop')
            ->where('step', '=', '2')
            ->get();
    }

    public function mount()
    {
        $this->fetchCampaigns();
    }

    public function render()
    {
        return view('livewire.advertiser.campaign-renew')->layout('layouts.advertiser');
    }
}
