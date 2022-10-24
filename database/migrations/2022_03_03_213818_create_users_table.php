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
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pos_id')->constrained();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('address')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pos_id')->constrained();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('pos_id')->constrained();
            $table->timestamp('registered_at');
            $table->timestamp('confimed_at');
            $table->timestamp('approved_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('fullname');
            $table->string('phone');
            $table->string('alt_phone')->nullable();
            $table->boolean('enabled');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('firms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('billing_id')->unique()->constrained();
            $table->string('position')->nullable();
            $table->string('organization');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->unsignedTinyInteger('subcounty_id')->constrained();
            $table->unsignedSmallInteger('location_id')->nullable()->constrained();
            $table->string('address');
            $table->string('directions');
            $table->string('information')->nullable();
            $table->boolean('enabled');
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
        Schema::dropIfExists('visitors');
        Schema::dropIfExists('subscribers');
        Schema::dropIfExists('guests');
        Schema::dropIfExists('clients');
        Schema::dropIfExists('billings');
        Schema::dropIfExists('shippings');
        Schema::dropIfExists('firms');
    }
};
