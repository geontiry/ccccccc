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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('subcounty_id')->constrained();
            $table->string('name');
            $table->string('incharge');
            $table->string('address');
            $table->string('website');
            $table->string('email');
            $table->string('phone');
            $table->string('costing');
            $table->string('supplage'); //app/Enums/Supplier/Supplage
            $table->string('leadtime');
            $table->timestamp('verified_at')->nullable();
            $table->timestamp('assessed_at')->nullable();
            $table->timestamp('assured_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->constrained();
            $table->timestamp('requested_at');
            $table->timestamp('received_at');
            $table->timestamp('expire_at');
            $table->string('pdf');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('quotings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quotation_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->integer('unitprice');
            $table->integer('shipdays')->nullable();
            $table->integer('minorder')->nullable();
            $table->integer('maxorder')->nullable();
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
        Schema::dropIfExists('supplies');
        Schema::dropIfExists('quotations');
        Schema::dropIfExists('quotings');
    }
};
