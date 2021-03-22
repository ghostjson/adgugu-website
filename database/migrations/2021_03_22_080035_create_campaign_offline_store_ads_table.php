<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignOfflineStoreAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_offline_store_ads', function (Blueprint $table) {
            $table->id();

            $table->string('advertisement');

            $table->string('store_name');
            $table->string('name');

            $table->string('address_line_1');
            $table->string('address_link_2');

            $table->string('country');
            $table->string('state');

            $table->string('city');
            $table->string('zip');

            $table->string('telephone');

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
        Schema::dropIfExists('campaign_offline_store_ads');
    }
}
