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
        Schema::create('cashers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id')->constrained();
            $table->decimal('subtotal')->unsigned();
            $table->decimal('discount')->unsigned();
            $table->decimal('total')->unsigned();
            $table->string('status')->default(0); //Pending, Complete
            $table->timestamp('cashed_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('cashlists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('casher_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('package_id')->constrained();
            // $table->unsignedBigInteger('product_code');
            $table->integer('receipt_no');
            $table->integer('quantity');
            $table->double('unitprice');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('cashings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cashlist_id')->constrained();
            $table->foreignId('inventory_id')->constrained();
            $table->integer('quantity');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('compares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->decimal('subtotal')->unsigned();
            $table->decimal('discount')->unsigned();
            $table->decimal('total')->unsigned();
            $table->timestamp('requested_at');
            $table->timestamp('processed_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('delivered_at');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('quotelists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quote_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('package_id')->constrained();
            $table->integer('quantity');
            $table->double('unitprice');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('package_id')->constrained();
            // $table->unsignedBigInteger('product_code');
            $table->integer('quantity');
            $table->timestamp('chekout_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('pos_id')->nullable()->constrained();
            $table->foreignId('billing_id')->constrained();
            $table->foreignId('shipping_id')->constrained();
            // $table->foreignId('payment_id')->constrained();
            $table->decimal('subtotal')->unsigned();
            $table->decimal('savings')->unsigned();
            $table->decimal('discount')->unsigned();
            $table->decimal('shipfee')->unsigned();
            // $table->decimal('taxvat')->unsigned();
            $table->decimal('total')->unsigned();
            $table->timestamp('placed_at');
            $table->timestamp('registered_at')->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('orderlists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('package_id')->constrained();
            // $table->unsignedBigInteger('product_code');
            $table->integer('quantity');
            $table->double('unitprice');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('orderings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orderlist_id')->constrained();
            $table->foreignId('inventory_id')->constrained();
            $table->timestamp('processed_at');
            $table->timestamp('packaged_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ordering_id')->constrained();
            $table->timestamp('shipped_at');
            $table->timestamp('stationed_at')->nullable();
            $table->timestamp('delivered_at');
            $table->timestamp('checked_at');
            $table->timestamp('received_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('retuurns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('delivery_id')->constrained();
            $table->string('claim'); //
            $table->string('description');
            $table->boolean('accept');
            $table->timestamp('returned_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('refunds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('retuurn_id')->constrained();
            $table->string('remark');
            $table->timestamp('requested_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
            $table->timestamp('refunded_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('replaces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('retuurn_id')->constrained();
            $table->foreignId('ordering_id')->constrained();
            $table->string('remark');
            $table->timestamp('requested_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
            $table->timestamp('replaced_at');
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
        Schema::dropIfExists('cashers');
        Schema::dropIfExists('carts');
        Schema::dropIfExists('quotes');
        Schema::dropIfExists('compares');
        Schema::dropIfExists('favorites');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('orderlists');
        Schema::dropIfExists('orderings');
        Schema::dropIfExists('retuurns');
    }
};
