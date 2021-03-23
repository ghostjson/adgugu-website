<?php

namespace App\Http\Livewire\Advertiser;

use Livewire\Component;

class CampaignNewBudget extends Component
{
    public $budget;
    public $startDate;
    public $endDate;
    public $permission = 'only_selected';
    public $noPromoters = 5;
    public $campaign;

    protected $rules = [
        'budget' => 'required',
        'startDate' => 'required',
        'endDate' => 'required',
        'permission' => 'required',
        'noPromoters' => 'required'
    ];

    public function submit()
    {
        $this->validate();

        $this->campaign->budget = $this->budget;
        $this->campaign->step++;
        $this->campaign->start_date = $this->startDate;
        $this->campaign->end_date = $this->endDate;
        $this->campaign->permission = $this->permission;
        $this->campaign->no_promoters = $this->noPromoters;
        $this->campaign->save();

        return redirect()->route('advertiser.campaign.assign', [
            'campaign' => $this->campaign->id
        ]);
    }

    public function mount(\App\Models\Campaign $campaign)
    {
        $this->campaign = $campaign;
        $this->budget = $this->campaign->budget;
        $this->startDate = $this->campaign->start_date;
        $this->endDate = $this->campaign->end_date;
        $this->permission = $this->campaign->permission;
        $this->noPromoters = $this->campaign->no_promoters;


    }

    public function updatedBudget()
    {
        // budget logic
    }

    public function render()
    {
        return view('livewire.advertiser.campaign-new-budget')->layout('layouts.advertiser');
    }
}
