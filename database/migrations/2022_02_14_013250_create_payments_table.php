<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->morphs('paymentable'); //Employment, Procurement, Casher, Order, Return
            $table->integer('amount');
            $table->timestamp('generated_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
            $table->timestamp('completed_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('cashes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pos_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('cashages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cash_id')->constrained();
            $table->decimal('amount');
            $table->timestamp('cashed_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('tillings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pos_id')->constrained();
            $table->integer('mpesa_till');//5984715
            $table->integer('phone')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('tillages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tilling_id')->constrained();
            $table->decimal('trans_amount');
            $table->integer('trans_code');
            $table->integer('trans_cost');
            $table->integer('till_balance');
            $table->timestamp('tilled_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('mpesas', function (Blueprint $table) {
            $table->id('id');
            $table->integer('phone');
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('mpesages', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('mpesa_id')->constrained();
            $table->string('trans_id')->nullable();
            $table->string('trans_type')->nullable();
            $table->string('business_code')->nullable();
            $table->string('bill_ref_number')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('third_party_trans_id')->nullable();
            $table->string('MSISDN')->nullable();
            $table->decimal('trans_amount', 8, 2)->nullable();
            $table->decimal('account_balance', 8, 2)->nullable();
            $table->string('transacted_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('card_holder');
            $table->string('card_number');
            $table->string('card_expiry');
            $table->string('card_ccv');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('cardages', function (Blueprint $table) {
            $table->id();
            $table->decimal('trans_amount');
            $table->timestamp('transacted_at');
            $table->timestamps();
            $table->softDeletes();
        });
        // Schema::create('deposits', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('bank');
        //     $table->string('branch');
        //     $table->string('swift_code');
        //     $table->string('account_type');
        //     $table->string('account_no');
        //     $table->timestamps();
        //     $table->softDeletes();
        // });
        // Schema::create('depositages', function (Blueprint $table) {
        //     $table->id();
        //     $table->decimal('amount');
        //     $table->timestamp('banking_at');
        //     $table->timestamps();
        //     $table->softDeletes();
        // });
        Schema::create('methods', function (Blueprint $table) {
            $table->id();
            $table->string('transfer'); //app\Enums\Payment\PaymentTransfer
            $table->string('provider');  //app\Enums\Payment\PaymentProvider
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('payings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('method_id')->constrained();
            $table->morphs('payable'); //User, Supplier, Employee, ...Casher
            $table->morphs('methodable'); //Cash, Mtill, Mpesa, Deposit
            $table->boolean('status')->default();
            $table->timestamp('saved_at');
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_id')->constrained();
            $table->foreignId('paying_id')->constrained();
            $table->double('amount');
            $table->integer('type'); //app\Enums\Payment\PaymentType
            $table->boolean('status');
            $table->timestamp('transacted_at');
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
        Schema::dropIfExists('cashes');
        Schema::dropIfExists('cashages');
        Schema::dropIfExists('tillings');
        Schema::dropIfExists('tillages');
        Schema::dropIfExists('mpesa');
        Schema::dropIfExists('mpesages');
        Schema::dropIfExists('cards');
        Schema::dropIfExists('cardages');
        // Schema::dropIfExists('deposits');
        // Schema::dropIfExists('depositages');
        Schema::dropIfExists('methods');
        Schema::dropIfExists('payings');
        Schema::dropIfExists('transactions');
    }
};
