<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketings', function (Blueprint $table) {
            $table->id();
            $table->string('strategy'); //Digital, Relation, Advert
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('channels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marketing_id')->constrained();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('channel_id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->morphs('mediable'); //Company, Business, Site
            $table->string('name'); //Facebook, Twitter, Instagram, Linkedin, Youtube
            $table->string('measure'); //Likes, Followers, Subscribers
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('audiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('media_id')->constrained();
            $table->timestamp('recorded_at');
            $table->integer('count');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('metrics', function (Blueprint $table) {
            $table->id();
            $table->string('name');//Reached, Engaged, Likes, Comments, Shares, Clicks, Retweets
            $table->timestamps();
            $table->softDeletes();
        });

        // Schema::create('sites', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->timestamps();
        //     $table->softDeletes();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marketings');
        Schema::dropIfExists('channels');
        Schema::dropIfExists('campaigns');
        Schema::dropIfExists('media');
        Schema::dropIfExists('audiences');
        Schema::dropIfExists('metrics');
    }
};
