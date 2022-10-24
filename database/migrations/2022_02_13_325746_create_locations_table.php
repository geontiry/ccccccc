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
        /* --- TABLE: REGIONS --- */
        Schema::create('regions', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name')->unique();//20
            $table->timestamps();
            $table->softDeletes();
        });

        /* --- TABLE: COUNTIES --- */
        Schema::create('counties', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->unsignedTinyInteger('region_id')->constrained();
            $table->string('name')->unique();//20
            $table->boolean('status')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });

        /* --- TABLE: SUBCOUNTIES --- */
        Schema::create('subcounties', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedTinyInteger('county_id')->constrained();
            $table->string('name');//20
            $table->unique(['county_id', 'name']);
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();
        });
        /* --- TABLE: DEMOGRAPHS --- */
        Schema::create('demographs', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('subcounty_id')->constrained();
            $table->integer('population');
            $table->timestamps();
            $table->softDeletes();
        });

        /* --- TABLE: LOCATIONS --- */
        Schema::create('locations', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('subcounty_id')->constrained();
            $table->string('name', 50)->unique();
            $table->string('address', 100)->nullable();
            $table->string('directions')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
        Schema::dropIfExists('counties');
        Schema::dropIfExists('subcounties');
        Schema::dropIfExists('demographs');
        Schema::dropIfExists('locations');
    }
};
