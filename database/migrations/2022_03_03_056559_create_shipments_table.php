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
        Schema::create('ship_rates', function (Blueprint $table) {
            $table->id();
            $table->string('option');//app/Enums/Shipment/ShipmentOption
            $table->string('delivery');//app/Enums/Shipment/ShipmentDelivery
            $table->integer('fee');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('ship_zones', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('location_id')->constrained();
            $table->integer('prox'); //app/Enums/Shipment/ShipmentProx
            $table->integer('fee');
            $table->timestamps();
            $table->softDeletes();
        });

        // Schema::create('ship_dimensions', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('margin');
        //     $table->integer('fee');
        //     $table->timestamps();
        //     $table->softDeletes();
        // });

        // Schema::create('ship_weights', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('margin');
        //     $table->integer('fee');
        //     $table->timestamps();
        //     $table->softDeletes();
        // });

        Schema::create('ship_quantities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tier_id')->constrained();
            $table->integer('fee');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('ship_totals', function (Blueprint $table) {
            $table->id();
            $table->string('cluster');//app/Enums/Shipment/ShipmentCluster
            $table->integer('fee');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('shippers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ship_rate_id')->constrained();
            $table->foreignId('ship_zone_id')->constrained();
            $table->foreignId('ship_quantity_id')->constrained();
            $table->foreignId('ship_total_id')->constrained();
            $table->integer('shipfee');
            $table->timestamp('generated_at');
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
        Schema::dropIfExists('ship_rates');
        Schema::dropIfExists('ship_zones');
        // Schema::dropIfExists('ship_dimensions');
        // Schema::dropIfExists('ship_weights');
        Schema::dropIfExists('ship_quantities');
        Schema::dropIfExists('ship_totals');
        Schema::dropIfExists('shippers');
        Schema::dropIfExists('shipments');
    }
};
