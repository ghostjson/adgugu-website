<?php

namespace App\Http\Livewire\Advertiser;

use App\Models\User;
use Livewire\Component;

class CampaignAssignPromoters extends Component
{

    public $promoters;
    public $campaign;

    public function approve($id)
    {
       $promoter_ids = $this->campaign->promoters;
       array_push($promoter_ids, $id);
       $this->campaign->promoters = $promoter_ids;
       $this->campaign->save();
    }

    public function remove($id)
    {
        $promoter_ids = $this->campaign->promoters;
        $key = array_search($id, $promoter_ids);
        if (false !== $key) {
            unset($promoter_ids[$key]);
        }

        $this->campaign->promoters = $promoter_ids;
        $this->campaign->save();
    }

    public function done()
    {
       $this->campaign->step = 2;
       $this->campaign->save();

       return redirect(env('APP_URL') . '/advertiser/campaign');
    }

    public function mount(\App\Models\Campaign $campaign)
    {
        $this->promoters = User::where('role', '=', 'promoter')->get();
        $this->campaign = $campaign;
    }

    public function render()
    {
        return view('livewire.advertiser.campaign-assign-promoters')->layout('layouts.advertiser');
    }
}
