<?php

namespace App\Http\Livewire\Advertiser;

use Livewire\Component;

class CampaignDrafts extends Component
{
    public $campaigns;


    public function continue($id)
    {
        $c = \App\Models\Campaign::find($id);

        if($c->step == 0){
            return redirect(env('APP_URL') . '/advertiser/campaign/new/'.$id.'/budget');
        }else if($c->step == 1){
            return redirect(env('APP_URL') . '/advertiser/campaign/'.$id.'/assign');
        }
    }


    public function fetchCampaigns()
    {
        $this->campaigns = \App\Models\Campaign::where('user_id', '=', auth()->id())
            ->where('step', '!=', 2)
            ->get();
    }

    public function mount()
    {
        $this->fetchCampaigns();
    }


    public function render()
    {
        return view('livewire.advertiser.campaign-drafts')->layout('layouts.advertiser');
    }
}
