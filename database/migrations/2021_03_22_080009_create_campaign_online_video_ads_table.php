<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignOnlineVideoAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_online_video_ads', function (Blueprint $table) {
            $table->id();

            $table->string('advertisement');

            $table->string('link');
            $table->string('name');
            $table->string('brand');

            $table->string('category');
            $table->string('sub_category_1');
            $table->string('sub_category_2');
            $table->string('sub_category_3');

            $table->string('target_audience');
            $table->string('from_age');
            $table->string('to_age');


            $table->text('description');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_online_video_ads');
    }
}
