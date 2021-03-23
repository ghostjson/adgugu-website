<?php

namespace App\Http\Livewire\Advertiser;

use App\Models\CampaignOfflineStoreAd;
use App\Models\CampaignOnlineNonVideoAd;
use App\Models\CampaignOnlineVideoAd;
use Livewire\Component;

class NewCampaign extends Component
{
    public $advertisement = 'advertise_product';
    public $adType = 'non_video';

    public $link;
    public $name;
    public $brand;
    public $category;
    public $subCategory1;
    public $subCategory2;
    public $subCategory3;
    public $targetAudience;
    public $fromAge;
    public $toAge;
    public $regularPrice;
    public $discount;
    public $discountedSalePrice;
    public $discountCouponCode;
    public $description;

    public $storeName;
    public $addressLine1;
    public $addressLine2;
    public $country;
    public $state;
    public $city;
    public $zip;
    public $telephone;

    public function submit()
    {

        $campaign = 0;

        if ($this->adType === 'non_video') {

            $this->validate([
                'advertisement' => 'required',
                'link' => 'required',
                'name' => 'required',
                'brand' => 'required',
                'category' => 'required',
                'subCategory1' => 'required',
                'subCategory2' => 'required',
                'subCategory3' => 'required',
                'targetAudience' => 'required',
                'fromAge' => 'required',
                'toAge' => 'required',
                'regularPrice' => 'required',
                'discount' => 'required',
                'discountedSalePrice' => 'required',
                'discountCouponCode' => 'required',
                'description' => 'required'
            ]);

            $campaign = CampaignOnlineNonVideoAd::create([
                'advertisement' => $this->advertisement,
                'link' => $this->link,
                'name' => $this->name,
                'brand' => $this->brand,
                'category' => $this->category,
                'sub_category_1' => $this->subCategory1,
                'sub_category_2' => $this->subCategory2,
                'sub_category_3' => $this->subCategory3,
                'target_audience' => $this->targetAudience,
                'from_age' => $this->fromAge,
                'to_age' => $this->toAge,
                'regular_price' => $this->regularPrice,
                'discount' => $this->discount,
                'discounted_sale_price' => $this->discountedSalePrice,
                'discount_coupon_code' => $this->discountCouponCode,
                'description' => $this->description
            ]);


        } else if ($this->adType === 'video') {
            $this->validate([
                'advertisement' => 'required',
                'link' => 'required',
                'name' => 'required',
                'brand' => 'required',
                'category' => 'required',
                'subCategory1' => 'required',
                'subCategory2' => 'required',
                'subCategory3' => 'required',
                'targetAudience' => 'required',
                'fromAge' => 'required',
                'toAge' => 'required',
                'description' => 'required'
            ]);


            $campaign = CampaignOnlineVideoAd::create([
                'advertisement' => $this->advertisement,
                'link' => $this->link,
                'name' => $this->name,
                'brand' => $this->brand,
                'category' => $this->category,
                'sub_category_1' => $this->subCategory1,
                'sub_category_2' => $this->subCategory2,
                'sub_category_3' => $this->subCategory3,
                'target_audience' => $this->targetAudience,
                'from_age' => $this->fromAge,
                'to_age' => $this->toAge,
                'description' => $this->description
            ]);


        } else if ($this->adType === 'offline') {
            $this->validate([
                'advertisement' => 'required',
                'link' => 'required',
                'name' => 'required',
                'brand' => 'required',
                'category' => 'required',
                'subCategory1' => 'required',
                'subCategory2' => 'required',
                'subCategory3' => 'required',
                'targetAudience' => 'required',
                'fromAge' => 'required',
                'toAge' => 'required',
                'description' => 'required'
            ]);


            $campaign = CampaignOfflineStoreAd::create([
                'advertisement' => $this->advertisement,
                'store_name' => $this->storeName,
                'name' => $this->name,
                'address_line_1' => $this->addressLine1,
                'address_line_2' => $this->addressLine2,
                'country' => $this->country,
                'state' => $this->state,
                'city' => $this->city,
                'zip' => $this->zip,
                'telephone' => $this->telephone
            ]);

        }

        $c = \App\Models\Campaign::create([
            'campaign_type' => $this->adType,
            'campaign_id' => $campaign->id,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('advertiser.campaign.list');
    }

    public function updatedDiscount()
    {
       if($this->regularPrice !== null){
          $this->discountedSalePrice = $this->regularPrice - $this->discount;
       }
    }

    public function generateCouponCode()
    {
        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $res = "";
        for ($i = 0; $i < 10; $i++) {
            $res .= $chars[mt_rand(0, strlen($chars)-1)];
        }

        $this->discountCouponCode = $res;
    }

    public function updatedName()
    {

    }

    public function render()
    {
        return view('livewire.advertiser.new-campaign')->layout('layouts.advertiser');
    }
}
