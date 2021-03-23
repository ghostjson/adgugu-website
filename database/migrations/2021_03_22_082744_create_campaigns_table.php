<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();

            $table->string('campaign_type');
            $table->string('campaign_id');
            $table->string('user_id');

            $table->string('budget')->nullable();

            $table->boolean('completed')->default(false);
            $table->string('step')->default(0);

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->string('permission')->nullable();
            $table->integer('no_promoters')->nullable();

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
        Schema::dropIfExists('campaigns');
    }
}
