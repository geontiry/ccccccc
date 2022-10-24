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
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->unsignedSmallInteger('location_id')->constrained();
            $table->boolean('status')->default(0);
            $table->timestamp('lauched_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('phases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('facility_id')->constrained();
            $table->boolean('status')->default(0);
            $table->string('phase'); //app\Enums\Facility\FacilityPhase
            $table->string('office')->nullable();  //app\Enums\Facility\FacilityOffice
            $table->string('centre')->nullable();  //app\Enums\Facility\FacilityCentre
            $table->string('store')->nullable();  //app\Enums\Facility\FacilityStore
            $table->timestamps();
        });

        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();//AM-C1-11
            $table->unsignedSmallInteger('location_id')->constrained();
            $table->char('storage', 1);
            $table->char('rack', 1);
            $table->char('section', 1);
            $table->char('partition', 1);
            $table->char('bin', 2);
            $table->unique(['location_id', 'storage', 'rack', 'section', 'partition', 'bin']);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('pos', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('location_id')->constrained();
            $table->string('terminal');
            $table->boolean('status')->default(0);
            $table->timestamp('lauched_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('filings', function (Blueprint $table) {
            $table->id();
            $table->morphs('fileable');//Quote, Quotation, Order, Delivery
            $table->string('code');
            $table->string('name'); //app/Enums/Asset/FileName
            $table->string('title');//app/Enums/Asset/FileTitle
            $table->string('path');
            $table->string('size');
            $table->string('extension');
            $table->timestamp('uploaded_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
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
        Schema::dropIfExists('locations');
        Schema::dropIfExists('facilities');
        Schema::dropIfExists('phases');
        Schema::dropIfExists('warehouses');
        Schema::dropIfExists('pos');
        Schema::dropIfExists('filings');
    }
};
