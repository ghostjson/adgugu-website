<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @property mixed campaign_type
 * @property mixed budget
 * @property mixed start_date
 * @property mixed end_date
 * @property mixed permission
 * @property mixed no_promoters
 */
class Campaign extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function campaign()
    {
       if ($this->campaign_type === 'non-video'){
           return $this->belongsTo(CampaignOnlineNonVideoAd::class, 'campaign_id', 'id');
       }else if($this->campaign_type === 'video'){
           return $this->belongsTo(CampaignOnlineVideoAd::class, 'campaign_id', 'id');
       }else if($this->campaign_type === 'offline'){
          return $this->belongsTo(CampaignOfflineStoreAd::class, 'campaign_id', 'id');
       }
    }

    public function user()
    {
       return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
